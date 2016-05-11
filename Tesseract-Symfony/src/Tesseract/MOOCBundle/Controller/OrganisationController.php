<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\Organisation;
use Tesseract\MOOCBundle\Form\OrganisationType;

/**
 * Organisation controller.
 *
 * @Route("/organisation")
 */
class OrganisationController extends Controller {

    function inscriptionOrganisationAction(\Symfony\Component\HttpFoundation\Request $request) {
        $organisation = new \Tesseract\MOOCBundle\Entity\Organisation();
        $form = $this->createForm(new \Tesseract\MOOCBundle\Form\OrganisationForm(), $organisation);

        // $requet = $this->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($organisation);
            $em->flush();

            return $this->render("TesseractMOOCBundle::layoutwada.html.twig", array('formm' => $form->createView()));
        }

        return $this->render("TesseractMOOCBundle::layoutwada.html.twig", array('formm' => $form->createView(), 'test' => "hakim"));
    }

    /**
     * Lists all Organisation entities.
     *
     * @Route("/", name="organisation")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $usr = $this->getUser();
        $currentOrg = $usr->getIdOrganisation();

        $em = $this->getDoctrine()->getManager();

        $allCoaches = $em->getRepository('TesseractMOOCBundle:Utilisateur')->findAll();
        $allCoachesNbr = 0;

        foreach ($allCoaches as $c) {
            if ($c->getRoles()[0] == 'ROLE_FOR') {
                $allCoachesNbr++;
            }
        }

        $coachP = 0;

        $query1 = $em->createQuery(
                        'SELECT c
    FROM TesseractMOOCBundle:Utilisateur c
    WHERE c.idOrganisation= :id '
                )->setParameter('id', $currentOrg->getId());
        $coaches = $query1->getResult();
        $coachesNbr = count($coaches) - 1;
        if ($allCoachesNbr != 0) {
            $coachP = round(($coachesNbr * 100) / $allCoachesNbr);
        }


        $allCours = $em->getRepository('TesseractMOOCBundle:Cours')->findAll();
        $allCoursNbr = count($allCours);
        $myCoursesNbr = 0;
        foreach ($coaches as $i) {
            $myCourses = $em->getRepository('TesseractMOOCBundle:Cours')->findBy(array('idUtilisateur' => $i->getId()));
            $myCoursesNbr+=count($myCourses);
        }


        $courseP = round(( $myCoursesNbr * 100) / $allCoursNbr);
        $timeline1 = array();
        $timeline2 = array();

        foreach ($coaches as $i) {

            $timeline2 = $em->getRepository('TesseractMOOCBundle:Log')->findBy(array('idUtilisateur' => $i->getId()));
            foreach ($timeline2 as $t) {
                $tache = $t->getTache();
                $t->setTache($i->getUsername() . ' ' . $tache);
            }

            $timeline1 = array_merge($timeline1, $timeline2);
        }



        return $this->render("TesseractMOOCBundle:Organisation:index.html.twig", array('thisOrg' => $currentOrg,
                    'coaches' => $coaches,
                    'coachesNbr' => $coachesNbr,
                    'coachP' => $coachP,
                    'courseP' => $courseP,
                    'myCoursesNumber' => $myCoursesNbr,
                    'timeline' => $timeline1));
    }

    public function respondAction() {
        $currentOrg = $this->getUser()->getIdOrganisation();
        $em = $this->getDoctrine()->getManager();
        $inv = $em->getRepository("TesseractMOOCBundle:Invitations")
                ->findBy(array('idOrganisme' => $currentOrg->getId(),
            'sens' => 'f',
            'etat' => 'ATT'));

        $coaches = array();
        foreach ($inv as $i) {

            $c = $em->getRepository("TesseractMOOCBundle:Utilisateur")->find($i->getIdUtilisateur());
            array_push($coaches, $c);
        }


        return $this->render("TesseractMOOCBundle:Organisation:coachesReq.html.twig", array('coaches' => $coaches,
                    'thisOrg' => $currentOrg,
                    'inv' => $inv));
    }

    public function refuseAction($id) {
        $em = $this->getDoctrine()->getManager();
        $inv = $em->getRepository("TesseractMOOCBundle:Invitations")->find($id);
        $inv->setEtat('REF');
        $em->persist($inv);
        $em->flush();
        return $this->redirectToRoute('tesseract_mooc_Org_coach_req');
    }

    public function acceptAction($id) {
        $em = $this->getDoctrine()->getManager();
        $inv = $em->getRepository("TesseractMOOCBundle:Invitations")->find($id);
        $inv->setEtat('ACC');
        $em->persist($inv);
        $em->flush();
        $userId = $inv->getIdUtilisateur()->getId();
        $coach = $em->getRepository("TesseractMOOCBundle:Utilisateur")->find($userId);
        $coach->setIdOrganisation($inv->getIdOrganisme());
        $em->persist($coach);
        $em->flush();
        return $this->redirectToRoute('tesseract_mooc_Org_coach_req');
    }

    public function affiliateAction() {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("TesseractMOOCBundle:Utilisateur")
                ->findBy(array('idOrganisation' => null));
        $coaches=array();
          foreach ($users as $u) {
            if ($u->getRoles()[0] == 'ROLE_FOR') {
                array_push($coaches, $u);
                    return $this->render("TesseractMOOCBundle:Organisation:affiliateCoaches.html.twig", array('coaches' => $coaches));
            }
        }
    }

    /**
     * Creates a new Organisation entity.
     *
     * @Route("/", name="organisation_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Organisation:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Organisation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('organisation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Organisation entity.
     *
     * @param Organisation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Organisation $entity) {
        $form = $this->createForm(new OrganisationType(), $entity, array(
            'action' => $this->generateUrl('organisation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Organisation entity.
     *
     * @Route("/new", name="organisation_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Organisation();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Organisation entity.
     *
     * @Route("/{id}", name="organisation_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Organisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Organisation entity.
     *
     * @Route("/{id}/edit", name="organisation_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Organisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organisation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Organisation entity.
     *
     * @param Organisation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Organisation $entity) {
        $form = $this->createForm(new OrganisationType(), $entity, array(
            'action' => $this->generateUrl('organisation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Organisation entity.
     *
     * @Route("/{id}", name="organisation_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:Organisation:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Organisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('organisation_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Organisation entity.
     *
     * @Route("/{id}", name="organisation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:Organisation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Organisation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('organisation'));
    }

    /**
     * Creates a form to delete a Organisation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('organisation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}

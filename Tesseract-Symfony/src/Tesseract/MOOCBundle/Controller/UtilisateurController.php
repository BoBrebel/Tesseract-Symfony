<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\Utilisateur;
use Tesseract\MOOCBundle\Form\UtilisateurType;

/**
 * Utilisateur controller.
 *
 * @Route("/utilisateur")
 */
class UtilisateurController extends Controller
{

    /**
     * Lists all Utilisateur entities.
     *
     * @Route("/", name="utilisateur")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Utilisateur')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Utilisateur entity.
     *
     * @Route("/", name="utilisateur_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Utilisateur:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Utilisateur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateur_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Utilisateur entity.
     *
     * @param Utilisateur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Utilisateur $entity)
    {
        $form = $this->createForm(new UtilisateurType(), $entity, array(
            'action' => $this->generateUrl('utilisateur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Utilisateur entity.
     *
     * @Route("/new", name="utilisateur_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Utilisateur();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Utilisateur entity.
     *
     * @Route("/{id}", name="utilisateur_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Utilisateur entity.
     *
     * @Route("/{id}/edit", name="utilisateur_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Utilisateur entity.
    *
    * @param Utilisateur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Utilisateur $entity)
    {
        $form = $this->createForm(new UtilisateurType(), $entity, array(
            'action' => $this->generateUrl('utilisateur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Utilisateur entity.
     *
     * @Route("/{id}", name="utilisateur_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:Utilisateur:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('utilisateur_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Utilisateur entity.
     *
     * @Route("/{id}", name="utilisateur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:Utilisateur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Utilisateur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilisateur'));
    }

    /**
     * Creates a form to delete a Utilisateur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('utilisateur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Utilisateur')->findAll();

       
        return $this->render('TesseractMOOCBundle:Utilisateur:list.html.twig', array('entities' => $entities)); 
    }
    public function profileAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);
        $entity = $em->getRepository('TesseractMOOCBundle:Utilisateur')->find($id);

        $timeline=array();

        if($entity->getRoles()[0]=='ROLE_FOR'){
            $requette =$em->createQuery("SELECT Com FROM TesseractMOOCBundle:CommentaireCours Com INNER JOIN TesseractMOOCBundle:Cours C WITH Com.idCours=C.id WHERE C.idUtilisateur = :id");
            $requette->setParameter('id',$id);
            $timeline=$requette->getResult();
            $backdrop='Resources/formateur.jpg';
            $entity->setRole('Coach');


        }
        else{
            $em = $this->getDoctrine()->getManager();
            $timeline = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $id));

            $backdrop='Resources/formateur.jpg';
            $entity->setRole('Student');


        }

        return $this->render('TesseractMOOCBundle:Utilisateur:Profile.html.twig', array('entities' => $timeline,'notifications'=>$notifications,
            'nbrnot'=>$nbr,'currentuser'=>$entity,'backdrop'=>$backdrop));





    }

    public function indexformateurAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Utilisateur')->findAll();
        $coaches=array();
        $i=0;
        foreach($entities as $e){
            if($e->getRoles()[0]=='ROLE_FOR'){
                $coaches[$i]=$e;
            }
        }

        return $this->render('TesseractMOOCBundle:Utilisateur:mainindex.html.twig',array('entities'=>$coaches));

    }
}

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
class OrganisationController extends Controller
{
    
    
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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Organisation')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Organisation entity.
     *
     * @Route("/", name="organisation_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Organisation:new.html.twig")
     */
    public function createAction(Request $request)
    {
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
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Organisation entity.
     *
     * @param Organisation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Organisation $entity)
    {
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
    public function newAction()
    {
        $entity = new Organisation();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Organisation entity.
     *
     * @Route("/{id}", name="organisation_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Organisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
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
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Organisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organisation entity.');
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
    * Creates a form to edit a Organisation entity.
    *
    * @param Organisation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Organisation $entity)
    {
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
    public function updateAction(Request $request, $id)
    {
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
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Organisation entity.
     *
     * @Route("/{id}", name="organisation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
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
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('organisation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

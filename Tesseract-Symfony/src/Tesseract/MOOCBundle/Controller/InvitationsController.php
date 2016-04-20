<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\Invitations;
use Tesseract\MOOCBundle\Form\InvitationsType;

/**
 * Invitations controller.
 *
 * @Route("/invitations")
 */
class InvitationsController extends Controller
{

    /**
     * Lists all Invitations entities.
     *
     * @Route("/", name="invitations")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Invitations')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Invitations entity.
     *
     * @Route("/", name="invitations_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Invitations:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Invitations();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('invitations_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Invitations entity.
     *
     * @param Invitations $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Invitations $entity)
    {
        $form = $this->createForm(new InvitationsType(), $entity, array(
            'action' => $this->generateUrl('invitations_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Invitations entity.
     *
     * @Route("/new", name="invitations_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Invitations();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Invitations entity.
     *
     * @Route("/{id}", name="invitations_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Invitations')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invitations entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Invitations entity.
     *
     * @Route("/{id}/edit", name="invitations_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Invitations')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invitations entity.');
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
    * Creates a form to edit a Invitations entity.
    *
    * @param Invitations $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Invitations $entity)
    {
        $form = $this->createForm(new InvitationsType(), $entity, array(
            'action' => $this->generateUrl('invitations_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Invitations entity.
     *
     * @Route("/{id}", name="invitations_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:Invitations:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Invitations')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invitations entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('invitations_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Invitations entity.
     *
     * @Route("/{id}", name="invitations_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:Invitations')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Invitations entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('invitations'));
    }

    /**
     * Creates a form to delete a Invitations entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invitations_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

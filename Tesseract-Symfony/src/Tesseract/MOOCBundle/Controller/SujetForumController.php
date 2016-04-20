<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\SujetForum;
use Tesseract\MOOCBundle\Form\SujetForumType;

/**
 * SujetForum controller.
 *
 * @Route("/sujetforum")
 */
class SujetForumController extends Controller
{

    /**
     * Lists all SujetForum entities.
     *
     * @Route("/", name="sujetforum")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:SujetForum')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new SujetForum entity.
     *
     * @Route("/", name="sujetforum_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:SujetForum:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new SujetForum();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sujetforum_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a SujetForum entity.
     *
     * @param SujetForum $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SujetForum $entity)
    {
        $form = $this->createForm(new SujetForumType(), $entity, array(
            'action' => $this->generateUrl('sujetforum_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SujetForum entity.
     *
     * @Route("/new", name="sujetforum_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SujetForum();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a SujetForum entity.
     *
     * @Route("/{id}", name="sujetforum_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:SujetForum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SujetForum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing SujetForum entity.
     *
     * @Route("/{id}/edit", name="sujetforum_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:SujetForum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SujetForum entity.');
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
    * Creates a form to edit a SujetForum entity.
    *
    * @param SujetForum $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SujetForum $entity)
    {
        $form = $this->createForm(new SujetForumType(), $entity, array(
            'action' => $this->generateUrl('sujetforum_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SujetForum entity.
     *
     * @Route("/{id}", name="sujetforum_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:SujetForum:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:SujetForum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SujetForum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sujetforum_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a SujetForum entity.
     *
     * @Route("/{id}", name="sujetforum_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:SujetForum')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SujetForum entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sujetforum'));
    }

    /**
     * Creates a form to delete a SujetForum entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sujetforum_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\Objectif;
use Tesseract\MOOCBundle\Form\ObjectifType;

/**
 * Objectif controller.
 *
 * @Route("/objectif")
 */
class ObjectifController extends Controller
{

    /**
     * Lists all Objectif entities.
     *
     * @Route("/", name="objectif")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Objectif')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Objectif entity.
     *
     * @Route("/", name="objectif_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Objectif:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Objectif();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('objectif_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Objectif entity.
     *
     * @param Objectif $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Objectif $entity)
    {
        $form = $this->createForm(new ObjectifType(), $entity, array(
            'action' => $this->generateUrl('objectif_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Objectif entity.
     *
     * @Route("/new", name="objectif_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Objectif();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Objectif entity.
     *
     * @Route("/{id}", name="objectif_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Objectif')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Objectif entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Objectif entity.
     *
     * @Route("/{id}/edit", name="objectif_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Objectif')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Objectif entity.');
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
    * Creates a form to edit a Objectif entity.
    *
    * @param Objectif $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Objectif $entity)
    {
        $form = $this->createForm(new ObjectifType(), $entity, array(
            'action' => $this->generateUrl('objectif_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Objectif entity.
     *
     * @Route("/{id}", name="objectif_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:Objectif:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Objectif')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Objectif entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('objectif_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Objectif entity.
     *
     * @Route("/{id}", name="objectif_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:Objectif')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Objectif entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('objectif'));
    }

    /**
     * Creates a form to delete a Objectif entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('objectif_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

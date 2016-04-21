<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\Emoticon;
use Tesseract\MOOCBundle\Form\EmoticonType;

/**
 * Emoticon controller.
 *
 * @Route("/emoticon")
 */
class EmoticonController extends Controller
{

    /**
     * Lists all Emoticon entities.
     *
     * @Route("/", name="emoticon")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Emoticon')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Emoticon entity.
     *
     * @Route("/", name="emoticon_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Emoticon:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Emoticon();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('emoticon_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Emoticon entity.
     *
     * @param Emoticon $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Emoticon $entity)
    {
        $form = $this->createForm(new EmoticonType(), $entity, array(
            'action' => $this->generateUrl('emoticon_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Emoticon entity.
     *
     * @Route("/new", name="emoticon_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Emoticon();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Emoticon entity.
     *
     * @Route("/{id}", name="emoticon_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Emoticon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emoticon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Emoticon entity.
     *
     * @Route("/{id}/edit", name="emoticon_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Emoticon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emoticon entity.');
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
    * Creates a form to edit a Emoticon entity.
    *
    * @param Emoticon $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Emoticon $entity)
    {
        $form = $this->createForm(new EmoticonType(), $entity, array(
            'action' => $this->generateUrl('emoticon_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Emoticon entity.
     *
     * @Route("/{id}", name="emoticon_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:Emoticon:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Emoticon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emoticon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('emoticon_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Emoticon entity.
     *
     * @Route("/{id}", name="emoticon_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:Emoticon')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Emoticon entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('emoticon'));
    }

    /**
     * Creates a form to delete a Emoticon entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('emoticon_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

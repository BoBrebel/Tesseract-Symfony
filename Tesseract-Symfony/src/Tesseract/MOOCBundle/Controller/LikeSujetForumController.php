<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\LikeSujetForum;
use Tesseract\MOOCBundle\Form\LikeSujetForumType;

/**
 * LikeSujetForum controller.
 *
 * @Route("/likesujetforum")
 */
class LikeSujetForumController extends Controller
{

    /**
     * Lists all LikeSujetForum entities.
     *
     * @Route("/", name="likesujetforum")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:LikeSujetForum')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new LikeSujetForum entity.
     *
     * @Route("/", name="likesujetforum_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:LikeSujetForum:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new LikeSujetForum();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('likesujetforum_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a LikeSujetForum entity.
     *
     * @param LikeSujetForum $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(LikeSujetForum $entity)
    {
        $form = $this->createForm(new LikeSujetForumType(), $entity, array(
            'action' => $this->generateUrl('likesujetforum_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LikeSujetForum entity.
     *
     * @Route("/new", name="likesujetforum_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LikeSujetForum();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a LikeSujetForum entity.
     *
     * @Route("/{id}", name="likesujetforum_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:LikeSujetForum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LikeSujetForum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LikeSujetForum entity.
     *
     * @Route("/{id}/edit", name="likesujetforum_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:LikeSujetForum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LikeSujetForum entity.');
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
    * Creates a form to edit a LikeSujetForum entity.
    *
    * @param LikeSujetForum $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LikeSujetForum $entity)
    {
        $form = $this->createForm(new LikeSujetForumType(), $entity, array(
            'action' => $this->generateUrl('likesujetforum_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LikeSujetForum entity.
     *
     * @Route("/{id}", name="likesujetforum_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:LikeSujetForum:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:LikeSujetForum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LikeSujetForum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('likesujetforum_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a LikeSujetForum entity.
     *
     * @Route("/{id}", name="likesujetforum_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:LikeSujetForum')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LikeSujetForum entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('likesujetforum'));
    }

    /**
     * Creates a form to delete a LikeSujetForum entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('likesujetforum_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

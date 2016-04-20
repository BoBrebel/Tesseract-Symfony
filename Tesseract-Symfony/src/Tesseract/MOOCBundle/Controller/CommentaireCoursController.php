<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\CommentaireCours;
use Tesseract\MOOCBundle\Form\CommentaireCoursType;

/**
 * CommentaireCours controller.
 *
 * @Route("/commentairecours")
 */
class CommentaireCoursController extends Controller
{

    /**
     * Lists all CommentaireCours entities.
     *
     * @Route("/", name="commentairecours")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:CommentaireCours')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new CommentaireCours entity.
     *
     * @Route("/", name="commentairecours_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:CommentaireCours:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CommentaireCours();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('commentairecours_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a CommentaireCours entity.
     *
     * @param CommentaireCours $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CommentaireCours $entity)
    {
        $form = $this->createForm(new CommentaireCoursType(), $entity, array(
            'action' => $this->generateUrl('commentairecours_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CommentaireCours entity.
     *
     * @Route("/new", name="commentairecours_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CommentaireCours();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a CommentaireCours entity.
     *
     * @Route("/{id}", name="commentairecours_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:CommentaireCours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CommentaireCours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CommentaireCours entity.
     *
     * @Route("/{id}/edit", name="commentairecours_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:CommentaireCours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CommentaireCours entity.');
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
    * Creates a form to edit a CommentaireCours entity.
    *
    * @param CommentaireCours $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CommentaireCours $entity)
    {
        $form = $this->createForm(new CommentaireCoursType(), $entity, array(
            'action' => $this->generateUrl('commentairecours_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CommentaireCours entity.
     *
     * @Route("/{id}", name="commentairecours_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:CommentaireCours:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:CommentaireCours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CommentaireCours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commentairecours_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a CommentaireCours entity.
     *
     * @Route("/{id}", name="commentairecours_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:CommentaireCours')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CommentaireCours entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commentairecours'));
    }

    /**
     * Creates a form to delete a CommentaireCours entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentairecours_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

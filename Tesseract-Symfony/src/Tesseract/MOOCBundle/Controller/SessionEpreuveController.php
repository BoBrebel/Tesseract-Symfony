<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\SessionEpreuve;
use Tesseract\MOOCBundle\Form\SessionEpreuveType;

/**
 * SessionEpreuve controller.
 *
 * @Route("/sessionepreuve")
 */
class SessionEpreuveController extends Controller
{

    /**
     * Lists all SessionEpreuve entities.
     *
     * @Route("/", name="sessionepreuve")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:SessionEpreuve')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new SessionEpreuve entity.
     *
     * @Route("/", name="sessionepreuve_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:SessionEpreuve:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new SessionEpreuve();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sessionepreuve_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a SessionEpreuve entity.
     *
     * @param SessionEpreuve $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SessionEpreuve $entity)
    {
        $form = $this->createForm(new SessionEpreuveType(), $entity, array(
            'action' => $this->generateUrl('sessionepreuve_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SessionEpreuve entity.
     *
     * @Route("/new", name="sessionepreuve_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SessionEpreuve();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a SessionEpreuve entity.
     *
     * @Route("/{id}", name="sessionepreuve_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:SessionEpreuve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SessionEpreuve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing SessionEpreuve entity.
     *
     * @Route("/{id}/edit", name="sessionepreuve_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:SessionEpreuve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SessionEpreuve entity.');
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
    * Creates a form to edit a SessionEpreuve entity.
    *
    * @param SessionEpreuve $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SessionEpreuve $entity)
    {
        $form = $this->createForm(new SessionEpreuveType(), $entity, array(
            'action' => $this->generateUrl('sessionepreuve_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SessionEpreuve entity.
     *
     * @Route("/{id}", name="sessionepreuve_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:SessionEpreuve:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:SessionEpreuve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SessionEpreuve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sessionepreuve_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a SessionEpreuve entity.
     *
     * @Route("/{id}", name="sessionepreuve_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:SessionEpreuve')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SessionEpreuve entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sessionepreuve'));
    }

    /**
     * Creates a form to delete a SessionEpreuve entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sessionepreuve_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\Epreuve;
use Tesseract\MOOCBundle\Form\EpreuveType;

/**
 * Epreuve controller.
 *
 * @Route("/epreuve")
 */
class EpreuveController extends Controller
{

    /**
     * Lists all Epreuve entities.
     *
     * @Route("/", name="epreuve")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Epreuve')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Epreuve entity.
     *
     * @Route("/", name="epreuve_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Epreuve:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Epreuve();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('epreuve_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Epreuve entity.
     *
     * @param Epreuve $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Epreuve $entity)
    {
        $form = $this->createForm(new EpreuveType(), $entity, array(
            'action' => $this->generateUrl('epreuve_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Epreuve entity.
     *
     * @Route("/new", name="epreuve_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Epreuve();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Epreuve entity.
     *
     * @Route("/{id}", name="epreuve_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Epreuve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Epreuve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Epreuve entity.
     *
     * @Route("/{id}/edit", name="epreuve_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Epreuve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Epreuve entity.');
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
    * Creates a form to edit a Epreuve entity.
    *
    * @param Epreuve $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Epreuve $entity)
    {
        $form = $this->createForm(new EpreuveType(), $entity, array(
            'action' => $this->generateUrl('epreuve_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Epreuve entity.
     *
     * @Route("/{id}", name="epreuve_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:Epreuve:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Epreuve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Epreuve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('epreuve_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Epreuve entity.
     *
     * @Route("/{id}", name="epreuve_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:Epreuve')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Epreuve entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('epreuve'));
    }

    /**
     * Creates a form to delete a Epreuve entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('epreuve_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

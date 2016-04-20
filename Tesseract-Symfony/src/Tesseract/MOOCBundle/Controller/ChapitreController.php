<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\Chapitre;
use Tesseract\MOOCBundle\Form\ChapitreType;

/**
 * Chapitre controller.
 *
 * @Route("/chapitre")
 */
class ChapitreController extends Controller
{

    /**
     * Lists all Chapitre entities.
     *
     * @Route("/", name="chapitre")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:Chapitre')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Chapitre entity.
     *
     * @Route("/", name="chapitre_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:Chapitre:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Chapitre();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chapitre_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Chapitre entity.
     *
     * @param Chapitre $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Chapitre $entity)
    {
        $form = $this->createForm(new ChapitreType(), $entity, array(
            'action' => $this->generateUrl('chapitre_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Chapitre entity.
     *
     * @Route("/new", name="chapitre_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Chapitre();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Chapitre entity.
     *
     * @Route("/{id}", name="chapitre_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Chapitre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chapitre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Chapitre entity.
     *
     * @Route("/{id}/edit", name="chapitre_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Chapitre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chapitre entity.');
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
    * Creates a form to edit a Chapitre entity.
    *
    * @param Chapitre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Chapitre $entity)
    {
        $form = $this->createForm(new ChapitreType(), $entity, array(
            'action' => $this->generateUrl('chapitre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Chapitre entity.
     *
     * @Route("/{id}", name="chapitre_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:Chapitre:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:Chapitre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chapitre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chapitre_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Chapitre entity.
     *
     * @Route("/{id}", name="chapitre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:Chapitre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Chapitre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chapitre'));
    }

    /**
     * Creates a form to delete a Chapitre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chapitre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\InscriptionEvenement;
use Tesseract\MOOCBundle\Form\InscriptionEvenementType;

/**
 * InscriptionEvenement controller.
 *
 * @Route("/inscriptionevenement")
 */
class InscriptionEvenementController extends Controller
{

    /**
     * Lists all InscriptionEvenement entities.
     *
     * @Route("/", name="inscriptionevenement")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:InscriptionEvenement')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new InscriptionEvenement entity.
     *
     * @Route("/", name="inscriptionevenement_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:InscriptionEvenement:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new InscriptionEvenement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inscriptionevenement_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a InscriptionEvenement entity.
     *
     * @param InscriptionEvenement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(InscriptionEvenement $entity)
    {
        $form = $this->createForm(new InscriptionEvenementType(), $entity, array(
            'action' => $this->generateUrl('inscriptionevenement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new InscriptionEvenement entity.
     *
     * @Route("/new", name="inscriptionevenement_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new InscriptionEvenement();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a InscriptionEvenement entity.
     *
     * @Route("/{id}", name="inscriptionevenement_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:InscriptionEvenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InscriptionEvenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing InscriptionEvenement entity.
     *
     * @Route("/{id}/edit", name="inscriptionevenement_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:InscriptionEvenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InscriptionEvenement entity.');
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
    * Creates a form to edit a InscriptionEvenement entity.
    *
    * @param InscriptionEvenement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(InscriptionEvenement $entity)
    {
        $form = $this->createForm(new InscriptionEvenementType(), $entity, array(
            'action' => $this->generateUrl('inscriptionevenement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing InscriptionEvenement entity.
     *
     * @Route("/{id}", name="inscriptionevenement_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:InscriptionEvenement:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:InscriptionEvenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InscriptionEvenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('inscriptionevenement_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a InscriptionEvenement entity.
     *
     * @Route("/{id}", name="inscriptionevenement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:InscriptionEvenement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find InscriptionEvenement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inscriptionevenement'));
    }

    /**
     * Creates a form to delete a InscriptionEvenement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscriptionevenement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

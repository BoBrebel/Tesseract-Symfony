<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tesseract\MOOCBundle\Entity\InscriptionChallenge;
use Tesseract\MOOCBundle\Form\InscriptionChallengeType;

/**
 * InscriptionChallenge controller.
 *
 * @Route("/inscriptionchallenge")
 */
class InscriptionChallengeController extends Controller
{

    /**
     * Lists all InscriptionChallenge entities.
     *
     * @Route("/", name="inscriptionchallenge")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TesseractMOOCBundle:InscriptionChallenge')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new InscriptionChallenge entity.
     *
     * @Route("/", name="inscriptionchallenge_create")
     * @Method("POST")
     * @Template("TesseractMOOCBundle:InscriptionChallenge:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new InscriptionChallenge();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inscriptionchallenge_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a InscriptionChallenge entity.
     *
     * @param InscriptionChallenge $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(InscriptionChallenge $entity)
    {
        $form = $this->createForm(new InscriptionChallengeType(), $entity, array(
            'action' => $this->generateUrl('inscriptionchallenge_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new InscriptionChallenge entity.
     *
     * @Route("/new", name="inscriptionchallenge_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new InscriptionChallenge();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a InscriptionChallenge entity.
     *
     * @Route("/{id}", name="inscriptionchallenge_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:InscriptionChallenge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InscriptionChallenge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing InscriptionChallenge entity.
     *
     * @Route("/{id}/edit", name="inscriptionchallenge_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:InscriptionChallenge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InscriptionChallenge entity.');
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
    * Creates a form to edit a InscriptionChallenge entity.
    *
    * @param InscriptionChallenge $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(InscriptionChallenge $entity)
    {
        $form = $this->createForm(new InscriptionChallengeType(), $entity, array(
            'action' => $this->generateUrl('inscriptionchallenge_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing InscriptionChallenge entity.
     *
     * @Route("/{id}", name="inscriptionchallenge_update")
     * @Method("PUT")
     * @Template("TesseractMOOCBundle:InscriptionChallenge:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TesseractMOOCBundle:InscriptionChallenge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InscriptionChallenge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('inscriptionchallenge_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a InscriptionChallenge entity.
     *
     * @Route("/{id}", name="inscriptionchallenge_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesseractMOOCBundle:InscriptionChallenge')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find InscriptionChallenge entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inscriptionchallenge'));
    }

    /**
     * Creates a form to delete a InscriptionChallenge entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscriptionchallenge_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

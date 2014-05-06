<?php

namespace SosAnimaux\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SosAnimaux\BackOfficeBundle\Entity\Adherant;
use SosAnimaux\BackOfficeBundle\Form\AdherantType;

/**
 * Adherant controller.
 *
 */
class AdherantController extends Controller
{

    /**
     * Lists all Adherant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficeBundle:Adherant')->findAll();

        return $this->render('BackOfficeBundle:Adherant:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Adherant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Adherant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adherant_show', array('id' => $entity->getId())));
        }

        return $this->render('BackOfficeBundle:Adherant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Adherant entity.
    *
    * @param Adherant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Adherant $entity)
    {
        $form = $this->createForm(new AdherantType(), $entity, array(
            'action' => $this->generateUrl('adherant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Adherant entity.
     *
     */
    public function newAction()
    {
        $entity = new Adherant();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackOfficeBundle:Adherant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Adherant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Adherant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Adherant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Adherant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Adherant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Adherant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Adherant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficeBundle:Adherant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Adherant entity.
    *
    * @param Adherant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Adherant $entity)
    {
        $form = $this->createForm(new AdherantType(), $entity, array(
            'action' => $this->generateUrl('adherant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Adherant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficeBundle:Adherant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Adherant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adherant_edit', array('id' => $id)));
        }

        return $this->render('BackOfficeBundle:Adherant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Adherant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackOfficeBundle:Adherant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Adherant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adherant'));
    }

    /**
     * Creates a form to delete a Adherant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adherant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Carte;
use AppBundle\Form\CarteType;

/**
 * Carte controller.
 *
 */
class CarteController extends Controller
{
    /**
     * Lists all Carte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cartes = $em->getRepository('AppBundle:Carte')->findAll();

        return $this->render('AppBundle:Carte:index.html.twig', array(
            'cartes' => $cartes,
        ));
    }

    /**
     * Creates a new Carte entity.
     *
     */
    public function newAction(Request $request)
    {
        $carte = new Carte();
        $form = $this->createForm('AppBundle\Form\CarteType', $carte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carte);
            $em->flush();

            return $this->redirectToRoute('carte_show', array('id' => $carte->getId()));
        }

        return $this->render('AppBundle:Carte:new.html.twig', array(
            'carte' => $carte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Carte entity.
     *
     */
    public function showAction(Carte $carte)
    {
        $deleteForm = $this->createDeleteForm($carte);

        return $this->render('AppBundle:Carte:show.html.twig', array(
            'carte' => $carte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Carte entity.
     *
     */
    public function editAction(Request $request, Carte $carte)
    {
        $deleteForm = $this->createDeleteForm($carte);
        $editForm = $this->createForm('AppBundle\Form\CarteType', $carte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carte);
            $em->flush();

            return $this->redirectToRoute('carte_edit', array('id' => $carte->getId()));
        }

        return $this->render('AppBundle:Carte:edit.html.twig', array(
            'carte' => $carte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Carte entity.
     *
     */
    public function deleteAction(Request $request, Carte $carte)
    {
        $form = $this->createDeleteForm($carte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($carte);
            $em->flush();
        }

        return $this->redirectToRoute('carte_index');
    }

    /**
     * Creates a form to delete a Carte entity.
     *
     * @param Carte $carte The Carte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Carte $carte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carte_delete', array('id' => $carte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

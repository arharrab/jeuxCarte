<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Joueur;
use AppBundle\Form\JoueurType;

/**
 * Joueur controller.
 *
 */
class JoueurController extends Controller
{
    /**
     * Lists all Joueur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $joueurs = $em->getRepository('AppBundle:Joueur')->findAll();

        return $this->render("AppBundle:Joueur:index.html.twig", array(
            'joueurs' => $joueurs,
        ));
    }

    /**
     * Creates a new Joueur entity.
     *
     */
    public function newAction(Request $request)
    {
        $joueur = new Joueur();
        $form = $this->createForm('AppBundle\Form\JoueurType', $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($joueur);
            $em->flush();

            return $this->redirectToRoute('joueur_show', array('id' => $joueur->getId()));
        }

        return $this->render('AppBundle:Joueur:new.html.twig', array(
            'joueur' => $joueur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Joueur entity.
     *
     */
    public function showAction(Joueur $joueur)
    {
        $deleteForm = $this->createDeleteForm($joueur);

        return $this->render('AppBundle:Joueur:show.html.twig', array(
            'joueur' => $joueur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Joueur entity.
     *
     */
    public function editAction(Request $request, Joueur $joueur)
    {
        $deleteForm = $this->createDeleteForm($joueur);
        $editForm = $this->createForm('AppBundle\Form\JoueurType', $joueur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($joueur);
            $em->flush();

            return $this->redirectToRoute('joueur_edit', array('id' => $joueur->getId()));
        }

        return $this->render('AppBundle:Joueur:edit.html.twig', array(
            'joueur' => $joueur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Joueur entity.
     *
     */
    public function deleteAction(Request $request, Joueur $joueur)
    {
        $form = $this->createDeleteForm($joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($joueur);
            $em->flush();
        }

        return $this->redirectToRoute('joueur_index');
    }

    /**
     * Creates a form to delete a Joueur entity.
     *
     * @param Joueur $joueur The Joueur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Joueur $joueur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('joueur_delete', array('id' => $joueur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

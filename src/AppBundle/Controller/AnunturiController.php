<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Anunturi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Anunturi controller.
 *
 * @Route("anunturi")
 */
class AnunturiController extends Controller
{
    /**
     * Lists all anunturi entities.
     *
     * @Route("/", name="anunturi_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $anunturis = $em->getRepository('AppBundle:Anunturi')->findAll();

        return $this->render('anunturi/index.html.twig', array(
            'anunturis' => $anunturis,
        ));
    }

    /**
     * Creates a new anunturi entity.
     *
     * @Route("/new", name="anunturi_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $anunturi = new Anunturi();
        $form = $this->createForm('AppBundle\Form\AnunturiType', $anunturi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anunturi);
            $em->flush();

            return $this->redirectToRoute('anunturi_show', array('id' => $anunturi->getId()));
        }

        return $this->render('anunturi/new.html.twig', array(
            'anunturi' => $anunturi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anunturi entity.
     *
     * @Route("/{id}", name="anunturi_show")
     * @Method("GET")
     */
    public function showAction(Anunturi $anunturi)
    {
        $deleteForm = $this->createDeleteForm($anunturi);

        return $this->render('anunturi/show.html.twig', array(
            'anunturi' => $anunturi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anunturi entity.
     *
     * @Route("/{id}/edit", name="anunturi_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Anunturi $anunturi)
    {
        $deleteForm = $this->createDeleteForm($anunturi);
        $editForm = $this->createForm('AppBundle\Form\AnunturiType', $anunturi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('anunturi_edit', array('id' => $anunturi->getId()));
        }

        return $this->render('anunturi/edit.html.twig', array(
            'anunturi' => $anunturi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a anunturi entity.
     *
     * @Route("/{id}", name="anunturi_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Anunturi $anunturi)
    {
        $form = $this->createDeleteForm($anunturi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($anunturi);
            $em->flush();
        }

        return $this->redirectToRoute('anunturi_index');
    }

    /**
     * Creates a form to delete a anunturi entity.
     *
     * @param Anunturi $anunturi The anunturi entity
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Anunturi $anunturi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anunturi_delete', array('id' => $anunturi->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

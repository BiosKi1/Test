<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use AppBundle\Entity\People;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Person controller.
 *
 * @Route("people")
 */
class PeopleController extends Controller
{
    /**
     * Lists all person entities.
     *
     * @Route("/", name="people_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $people = $em->getRepository('AppBundle:People')->findAll();

        return $this->render('people/index.html.twig', array(
            'people' => $people,
        ));
    }

    /**
     * Creates a new person entity.
     *
     * @Route("/new", name="people_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $person = new People();
        $form = $this->createForm('AppBundle\Form\PeopleType', $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();

            return $this->redirectToRoute('people_show', array('id' => $person->getId()));
        }

        return $this->render('people/new.html.twig', array(
            'person' => $person,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a person entity.
     *
     * @Route("/{id}", name="people_show")
     * @Method("GET")
     */
    public function showAction(People $person)
    {
        $deleteForm = $this->createDeleteForm($person);

        return $this->render('people/show.html.twig', array(
            'person' => $person,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing person entity.
     *
     * @Route("/{id}/edit", name="people_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, People $person)
    {
        $deleteForm = $this->createDeleteForm($person);
        $editForm = $this->createForm('AppBundle\Form\PeopleType', $person);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('people_edit', array('id' => $person->getId()));
        }

        return $this->render('people/edit.html.twig', array(
            'person' => $person,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a person entity.
     *
     * @Route("/{id}", name="people_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, People $person)
    {
        $form = $this->createDeleteForm($person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($person);
            $em->flush();
        }

        return $this->redirectToRoute('people_index');
    }

    /**
     * Creates a form to delete a person entity.
     *
     * @param People $person The person entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(People $person)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('people_delete', array('id' => $person->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

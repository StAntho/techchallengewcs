<?php

namespace App\Controller;

use App\Entity\Argonaute;
use App\Form\ArgonauteType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request): Response
    {
        $argonaute = new Argonaute();
        $form = $this->createForm(ArgonauteType::class, $argonaute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $argonaute->setRegisteredAt(new \DateTime('now'));
            $manager->persist($argonaute);
            $manager->flush();
            $this->addFlash('success', 'Crée avec succés');
        }

        $allArgonaute = $this->getDoctrine()->getRepository(Argonaute::class)->findAll();

        return $this->render('home/index.html.twig', [
            'all' => $allArgonaute,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id<\d+>}", name="delete")
     */
    public function delete($id)
    {
        $manager = $this->getDoctrine()->getManager();
        $argonaute = $this->getDoctrine()->getRepository(Argonaute::class)->find($id);

        $manager->remove($argonaute);
        $manager->flush();
        $this->addFlash('success', 'Supprimé avec succès');

        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/update/{id<\d+>}", name="update")
     */
    public function update(Request $request, $id)
    {
        $manager = $this->getDoctrine()->getManager();
        $argonaute = $this->getDoctrine()->getRepository(Argonaute::class)->find($id);

        $allArgonaute = $this->getDoctrine()->getRepository(Argonaute::class)->findAll();

        $form = $this->createForm(ArgonauteType::class, $argonaute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($argonaute);
            $manager->flush();
            $this->addFlash('success', 'Modifié avec succès');

            return $this->redirectToRoute('index');
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'all' => $allArgonaute,
        ]);
    }
}

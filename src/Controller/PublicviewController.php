<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicviewController extends AbstractController
{
    /**
     * @Route("/", name="publicview", methods={"GET"})
     */
    public function index(EventRepository $eventRepository): Response
    {
        return $this->render('publicview/index.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }
}

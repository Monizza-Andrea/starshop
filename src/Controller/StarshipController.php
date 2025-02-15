<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StarshipController extends AbstractController
{
    #[Route('/starship/{id<\d+>}', name: 'app_starship_show', methods: ['GET'])]
    public function show(int $id, StarshipRepository $repository): Response
    {
        $ship = $repository->findById($id);

        if (!$ship) {
            throw $this->createNotFoundException('Ship not found');
        }

        return $this->render('starship/show.html.twig', [
            'ship' => $ship,
        ]);
    }
}

<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'starships')]
    public function getCollection(): Response
    {
        $starships = [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                'under construction'
            ),
            new Starship(
                2,
                'USS Espresso (NCC-0001)',
                'Latte',
                'Jean-Luc Pickles',
                'under construction'
            ),
            new Starship(
                3,
                'USS BelCulo (NCC-0001)',
                'Tourist',
                'Jean-Luc Pickles',
                'under construction',
            ),
        ];

        return $this->json($starships);
    }
}

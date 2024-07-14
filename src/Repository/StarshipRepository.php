<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }
    public function findAll(): array
    {
        $this->logger->info('Starships collection retrieved');

        return [
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
    }

    public function findById(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }
        return null;
    }
}

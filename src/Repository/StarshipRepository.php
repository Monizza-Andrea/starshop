<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
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
                StarshipStatusEnum::IN_PROGRESS
            ),
            new Starship(
                2,
                'USS Espresso (NCC-0001)',
                'Latte',
                'Jean-Luc Pickles',
                StarshipStatusEnum::COMPLETED
            ),
            new Starship(
                3,
                'USS BelCulo (NCC-0001)',
                'Tourist',
                'Jean-Luc Pickles',
                StarshipStatusEnum::WAITING,
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

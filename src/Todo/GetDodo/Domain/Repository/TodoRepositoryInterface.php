<?php

namespace App\Todo\GetDodo\Domain\Repository;

interface TodoRepositoryInterface
{
    public function getById(int $id): array;
}

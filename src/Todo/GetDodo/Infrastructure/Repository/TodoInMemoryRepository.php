<?php

namespace App\Todo\GetDodo\Infrastructure\Repository;

use App\Todo\GetDodo\Domain\Repository\TodoRepositoryInterface;

final class TodoInMemoryRepository implements TodoRepositoryInterface
{
    public function getById(int $id): array
    {
        return [
            'id' => $id,
            'name' => 'implementer pattern command avec symfony messenger',
            'status' => 'DONE',
            'createdBy' => 'ZeroCool'
        ];
    }
}

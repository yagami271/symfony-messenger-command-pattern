<?php

declare(strict_types=1);

namespace App\Todo\GetDodo\Domain\UseCase;

final class GetTodoRequest
{
    public function __construct(
        private readonly int $id
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }
}

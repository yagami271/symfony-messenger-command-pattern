<?php

declare(strict_types=1);

namespace App\Todo\GetDodo\Domain\UseCase;

use App\Framework\Messenger\AbstractHandler;
use App\Todo\GetDodo\Domain\Repository\TodoRepositoryInterface;

final class GetTodo extends AbstractHandler
{
    public function __construct(private readonly TodoRepositoryInterface $todoRepository)
    {
    }

    public function __invoke(GetTodoRequest $getTodoRequest): array
    {
        return $this->todoRepository->getById($getTodoRequest->getId());
    }

}

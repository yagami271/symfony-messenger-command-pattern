<?php

declare(strict_types=1);

namespace App\Todo\GetDodo\UserInterface;

use App\Framework\Messenger\Bus;
use App\Todo\GetDodo\Domain\UseCase\GetTodoRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/todo/{id}', methods: ['GET'])]
final class GetTodoController extends AbstractController
{
    public function __invoke(Bus $bus, int $id): JsonResponse
    {
        $response = $bus->execute(new GetTodoRequest($id));

        return new JsonResponse($response);
    }
}

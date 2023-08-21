<?php

namespace App\Controller;

use App\Attribute\RequestBody;
use App\Model\IdResponse;
use App\Model\SignUpRequest;
use App\Service\SignUpService;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    public function __construct(private SignUpService $signUpService)
    {
    }

    #[OA\Response(
        response: 200,
        description: 'Signs up a user',
        attachables: [new Model(type: IdResponse::class)]
    )]
    #[Route(path: '/api/v1/auth/signUp', methods: ['POST'])]
    public function signUp(#[RequestBody] SignUpRequest $signUpRequest): Response
    {
        return $this->json($this->signUpService->signUp($signUpRequest));
    }
}

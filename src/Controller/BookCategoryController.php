<?php

namespace App\Controller;

use App\Model\BookCategoryListResponse;
use App\Service\BookCategoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Attributes as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

class BookCategoryController extends AbstractController
{
    public function __construct(private BookCategoryService $bookCategoryService)
    {
    }

    #[OA\Response(
        response: 200,
        description: 'Return book categories',
        attachables: [new Model(type: BookCategoryListResponse::class)]
    )]
    #[Route(path: '/api/v1/book/categories', methods: ['GET'])]
    public function categories(): Response
    {
        return $this->json($this->bookCategoryService->getCategories());
    }
}

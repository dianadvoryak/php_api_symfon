<?php

namespace App\Service;

use App\Entity\Review;
use App\Model\ReviewModel;
use App\Model\ReviewPage;
use App\Repository\ReviewRepository;

class ReviewService
{
    private const PAGE_LIMIT = 5;

    public function __construct(private ReviewRepository $reviewRepository)
    {
    }

    public function getReviewPageByBookId(int $id, int $page): ReviewPage
    {
        $offset = max($page - 1, 0) * self::PAGE_LIMIT;
        $paginator = $this->reviewRepository->getPageByBookId($id, 0, self::PAGE_LIMIT);
        $ratingSum = $this->reviewRepository->getBookTotalRatingSum($id);
        $total = count($paginator);
        $rating = 0;

        if ($total > 0) {
            $rating = $this->reviewRepository->getBookTotalRatingSum($id) / $total;
        }

        return (new ReviewPage())
            ->setRating($rating)
            ->setTotal($total)
            ->setPage($page)
            ->setPerPage(self::PAGE_LIMIT)
            ->setPages(ceil($total / self::PAGE_LIMIT))
            ->setItems(array_map([$this, 'map'], $paginator->getIterator()->getArrayCopy()));
    }

    public function map(Review $review): ReviewModel
    {
        return (new ReviewModel())
            ->setId($review->getId())
            ->setRating($review->getRating())
            ->setCreateAt($review->getCreatedAt()->getTimestamp())
            ->setAuthor($review->getAuthor())
            ->setContent($review->getContent());
    }
}

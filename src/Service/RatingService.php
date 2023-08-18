<?php

namespace App\Service;

use App\Repository\ReviewRepository;

class RatingService
{
    public function __construct(private ReviewRepository $reviewRepository)
    {
    }

    public function calcReviewRatingForBook(int $id): RatingModel
    {
        $total = $this->reviewRepository->countByBookId($id);
        $rating = $total > 0 ? $this->reviewRepository->getBookTotalRatingSum($id) / $total : 0;

        return new RatingModel($total, $rating);
    }
}

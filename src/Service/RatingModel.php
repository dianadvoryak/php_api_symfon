<?php

namespace App\Service;

class RatingModel
{
    public function __construct(private int $total, private float $rating)
    {
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

}

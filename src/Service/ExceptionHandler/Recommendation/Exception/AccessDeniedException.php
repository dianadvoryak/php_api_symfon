<?php

namespace App\Service\ExceptionHandler\Recommendation\Exception;

final class AccessDeniedException extends RecommendationException
{
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('access denied', $previous);
    }
}

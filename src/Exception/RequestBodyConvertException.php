<?php

namespace App\Exception;

use Symfony\Component\Asset\Exception\RuntimeException;

class RequestBodyConvertException extends RuntimeException
{
    public function __construct(\Throwable $previous)
    {
        parent::__construct('error while unmarshalling request body', 0, $previous);
    }
}

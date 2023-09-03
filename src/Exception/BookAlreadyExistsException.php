<?php

namespace App\Exception;

use Symfony\Component\Asset\Exception\RuntimeException;

class BookAlreadyExistsException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('book already exists');
    }
}

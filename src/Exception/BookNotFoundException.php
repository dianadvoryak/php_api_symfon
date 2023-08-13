<?php

namespace App\Exception;

use Symfony\Component\Asset\Exception\RuntimeException;

class BookNotFoundException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('book not found');
    }
}

<?php

namespace App\Exception;

use Symfony\Component\Asset\Exception\RuntimeException;

class SubscriberAlreadyExistsException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('subscriber already exists');
    }
}

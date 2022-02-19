<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;
use Throwable;

class InsufficientScopeException extends Exception
{
    public function __construct()
    {
        parent::__construct('Insufficient scope', Response::HTTP_FORBIDDEN);
    }
}

<?php

namespace App\Exceptions;

use Exception;

class AuthFailedException extends Exception
{
    /**
     * Render the exception into an HTTP response.
     *
     */
    public function render()
    {
        return response()->json(['message' => 'These credentials do not match out records.'], 422);
    }
}

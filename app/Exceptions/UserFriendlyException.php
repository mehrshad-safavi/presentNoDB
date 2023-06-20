<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserFriendlyException extends Exception
{
    public function render(Request $request)
    {
        return response()->json(['status' => 'failed', 'msg' => $this->getMessage()], $this->getCode() ?? 400);;
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\Prize;
use App\Services\PrizeWrapper;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $result = PrizeWrapper::getAll();
            return response()->json(['status' => 'success', 'data' => $result], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'failed', 'msg' => $th->getMessage()], 400);
        }
    }

    /**
     * validate whether given values are correct.
     */
    public function myValidate(Request $request)
    {
        try {
            PrizeWrapper::getInstance($request->id)->validate($request->fields);
            return response()->json(['status' => 'success', 'msg' => 'valid'], 200);
        } catch (\Throwable $th) {
            //TODO create a custom exception to make sure messages are safe to return!
            return response()->json(['status' => 'failed', 'msg' => $th->getMessage()], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Prize $prize)
    {
        try {
            $result = $prize->getFields();
            return response()->json(['status' => 'success', 'data' => $result], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'failed', 'msg' => $th->getMessage()], 400);
        }
    }
}

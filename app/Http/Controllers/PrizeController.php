<?php

namespace App\Http\Controllers;

use App\Services\Prizes\Prize;
use App\Services\Prizes\PrizeWrapper;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return (new PrizeWrapper())->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return (new PrizeWrapper())->getInstance($request->id)->validate($request->fields);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $prizeId)
    {
        return (new PrizeWrapper())->getInstance($prizeId)->getFields();
    }
}

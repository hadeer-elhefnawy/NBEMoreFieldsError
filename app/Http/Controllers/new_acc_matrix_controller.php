<?php

namespace App\Http\Controllers;

use App\Models\NewAccessMatrix;
use Illuminate\Http\Request;

class new_acc_matrix_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/Add New Access Matrix/NewAccessMatrix');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewAccessMatrix  $newAccessMatrix
     * @return \Illuminate\Http\Response
     */
    public function show(NewAccessMatrix $newAccessMatrix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewAccessMatrix  $newAccessMatrix
     * @return \Illuminate\Http\Response
     */
    public function edit(NewAccessMatrix $newAccessMatrix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewAccessMatrix  $newAccessMatrix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewAccessMatrix $newAccessMatrix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewAccessMatrix  $newAccessMatrix
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewAccessMatrix $newAccessMatrix)
    {
        //
    }
}

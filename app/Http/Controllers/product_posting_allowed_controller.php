<?php

namespace App\Http\Controllers;

use App\Models\ProductPostingAllowed;
use Illuminate\Http\Request;

class product_posting_allowed_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['productPostingAllowed'] = ProductPostingAllowed::orderBy('id','asc')->paginate(5);
        return view('Product-Posting-Allowed.indexProductPostingAllowed', $data);
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
     * @param  \App\Models\ProductPostingAllowed  $productPostingAllowed
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPostingAllowed $productPostingAllowed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductPostingAllowed  $productPostingAllowed
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPostingAllowed $productPostingAllowed,$id)
    {
        //
        $productPostingAllowed = ProductPostingAllowed::find($id);
        return view('Product-Posting-Allowed.EditProductPostingAllowed',compact('productPostingAllowed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductPostingAllowed  $productPostingAllowed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductPostingAllowed $productPostingAllowed,$id)
    {
        //
        $request->validate([
            'product_code_posting' => 'nullable|string|max:6',
            'product_desc_posting' => 'nullable|string|max:100',

        ]);
        $productPostingAllowed = ProductPostingAllowed::find($id);
        $productPostingAllowed->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductPostingAllowed  $productPostingAllowed
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductPostingAllowed $productPostingAllowed,$id)
    {
        //
        $productPostingAllowed = ProductPostingAllowed::find($id);
        $productPostingAllowed->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

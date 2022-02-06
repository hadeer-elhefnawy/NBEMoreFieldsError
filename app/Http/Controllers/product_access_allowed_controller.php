<?php

namespace App\Http\Controllers;

use App\Models\ProductAccessAllowed;
use Illuminate\Http\Request;

class product_access_allowed_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['productAccessAllowed'] = ProductAccessAllowed::orderBy('id','asc')->paginate(5);
        return view('Product-Access-Allowed.indexProductAccessAllowed', $data);
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
     * @param  \App\Models\ProductAccessAllowed  $productAccessAllowed
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAccessAllowed $productAccessAllowed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAccessAllowed  $productAccessAllowed
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAccessAllowed $productAccessAllowed,$id)
    {
        //
        $productAccessAllowed = ProductAccessAllowed::find($id);
        dd($productAccessAllowed);
        return view('Product-Access-Allowed.EditProductAccessAllowed',compact('productAccessAllowed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductAccessAllowed  $productAccessAllowed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductAccessAllowed $productAccessAllowed,$id)
    {
        //
        $request->validate([
            'product_code_access' => 'nullable|string|max:6',
            'product_desc_access' => 'nullable|string|max:100',   

        ]);
        $productAccessAllowed = ProductAccessAllowed::find($id);
        $productAccessAllowed->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAccessAllowed  $productAccessAllowed
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAccessAllowed $productAccessAllowed,$id)
    {
        //
        $productAccessAllowed = ProductAccessAllowed::find($id);
        $productAccessAllowed->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

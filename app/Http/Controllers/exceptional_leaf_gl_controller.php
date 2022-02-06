<?php

namespace App\Http\Controllers;

use App\Models\ExceptionalLeafGl;
use Illuminate\Http\Request;

class exceptional_leaf_gl_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['exceptionalLeafGl'] = ExceptionalLeafGl::orderBy('id','asc')->paginate(5);
        return view('Exceptional-LeafGl.indexExceptionalLeafGl', $data);
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
     * @param  \App\Models\ExceptionalLeafGl  $exceptionalLeafGl
     * @return \Illuminate\Http\Response
     */
    public function show(ExceptionalLeafGl $exceptionalLeafGl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExceptionalLeafGl  $exceptionalLeafGl
     * @return \Illuminate\Http\Response
     */
    public function edit(ExceptionalLeafGl $exceptionalLeafGl,$id)
    {
        //
        $exceptionalLeafGl = ExceptionalLeafGl::find($id);
        return view('Exceptional-LeafGl.EditExceptionalLeafGl',compact('exceptionalLeafGl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExceptionalLeafGl  $exceptionalLeafGl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExceptionalLeafGl $exceptionalLeafGl,$id)
    {
        //
        $request->validate([
            'node_gl_exceptional' => 'nullable|string|max:15',
            'node_gl_descripion_en_exceptional' => 'nullable|string|max:100',  
            'node_gl_descripion_ar_exceptional' => 'nullable|string|max:100',  
            'exceptional_leaf_gl' => 'nullable|string|max:15',
            'leaf_gl_description_en_exceptional' => 'nullable|string|max:100',  
            'leaf_gl_description_ar_exceptional' => 'nullable|string|max:100',
        ]);
        $exceptionalLeafGl = ExceptionalLeafGl::find($id);
        $exceptionalLeafGl->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExceptionalLeafGl  $exceptionalLeafGl
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExceptionalLeafGl $exceptionalLeafGl,$id)
    {
        //
        $exceptionalLeafGl = ExceptionalLeafGl::find($id);
        $exceptionalLeafGl->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\NodeGl;
use Illuminate\Http\Request;

class node_gl_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['nodeGl'] = NodeGl::orderBy('id','asc')->paginate(5);
        return view('NodeGl.indexNodeGl', $data);
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
     * @param  \App\Models\NodeGl  $nodeGl
     * @return \Illuminate\Http\Response
     */
    public function show(NodeGl $nodeGl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NodeGl  $nodeGl
     * @return \Illuminate\Http\Response
     */
    public function edit(NodeGl $nodeGl,$id)
    {
        //
        $nodeGl = NodeGl::find($id);
        return view('NodeGl.EditNodeGl',compact('nodeGl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NodeGl  $nodeGl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NodeGl $nodeGl,$id)
    {
        //
        $request->validate([
            'node_gl_node' => 'nullable|string|max:15',
            'node_gl_descripion_en_node' => 'nullable|string|max:100',  
            'node_gl_descripion_ar_node' => 'nullable|string|max:100', 

        ]);
        $nodeGl = NodeGl::find($id);
        $nodeGl->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NodeGl  $nodeGl
     * @return \Illuminate\Http\Response
     */
    public function destroy(NodeGl $nodeGl,$id)
    {
        //
        $nodeGl = NodeGl::find($id);
        $nodeGl->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

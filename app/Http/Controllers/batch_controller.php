<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class batch_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['batch'] = Batch::orderBy('id','asc')->paginate(5);
        return view('batchs.indexBatchs', $data);
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
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch,$id)
    {
        //
        $batch = Batch::find($id);
        return view('Batch.EditBatch',compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch,$id)
    {
        //
        $request->validate([
            'role_function_batch' => 'required|string|max:10',
            'main_menu_batch' => 'required|string|max:50',
            'sub_menu1_batch' => 'required|string|max:50',
            'sub_menu2_batch' => 'required|string|max:50',
            'batch_description' => 'required|string|max:50',

        ]);
        $batch = Batch::find($id);
        $batch->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch,$id)
    {
        //
        $batch = Batch::find($id);
        $batch->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ProcessStageRights;
use Illuminate\Http\Request;

class process_stage_rights_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['processStageRights'] = ProcessStageRights::orderBy('id','asc')->paginate(5);
        return view('Process-Stage-Rights.indexProcessStageRights', $data);
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
     * @param  \App\Models\ProcessStageRights  $processStageRights
     * @return \Illuminate\Http\Response
     */
    public function show(ProcessStageRights $processStageRights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProcessStageRights  $processStageRights
     * @return \Illuminate\Http\Response
     */
    public function edit(ProcessStageRights $processStageRights,$id)
    {
        //
        $processStageRights = ProcessStageRights::find($id);
        return view('Process-Stage-Rights.EditProcessStageRights',compact('processStageRights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProcessStageRights  $processStageRights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcessStageRights $processStageRights,$id)
    {
        //
        $request->validate([
            'role_function_Process_stage' => 'nullable|string|max:10',
            'main_menu_Process_stage' => 'required|string|max:50',
            'sub_menu1_Process_stage' => 'required|string|max:50',
            'sub_menu2_Process_stage' => 'required|string|max:50',
            'Process_stage_description' => 'required|string|max:50',
        ]);
        $processStageRights = ProcessStageRights::find($id);
        $processStageRights->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProcessStageRights  $processStageRights
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProcessStageRights $processStageRights,$id)
    {
        //
        $processStageRights = ProcessStageRights::find($id);
        $processStageRights->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

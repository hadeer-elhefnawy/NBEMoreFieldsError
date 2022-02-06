<?php

namespace App\Http\Controllers;

use App\Models\QueueRights;
use Illuminate\Http\Request;

class queue_rights_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['queueRights'] = QueueRights::orderBy('id','asc')->paginate(5);
        return view('QueueRights.index', $data);


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
     * @param  \App\Models\QueueRights  $queueRights
     * @return \Illuminate\Http\Response
     */
    public function show(QueueRights $queueRights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QueueRights  $queueRights
     * @return \Illuminate\Http\Response
     */
    public function edit(QueueRights $queueRights,$id)
    {
        //
        $queueRights = QueueRights::find($id);
        return view('QueueRights.EditQueue',compact('queueRights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QueueRights  $queueRights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QueueRights $queueRights,$id)
    {
        //
            $request->validate([
                'queue_rights' => 'required',
                ]);
            $queueRights = QueueRights::find($id);
            $queueRights->update($request->all());
            return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QueueRights  $queueRights
     * @return \Illuminate\Http\Response
     */
    public function destroy(QueueRights $queueRights,$id)
    {
        //
        $queueRights = QueueRights::find($id);
        $queueRights->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

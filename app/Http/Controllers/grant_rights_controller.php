<?php

namespace App\Http\Controllers;

use App\Models\GrantRights;
use Illuminate\Http\Request;

class grant_rights_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['grantRights'] = GrantRights::orderBy('id','asc')->paginate(5);
        return view('Grant-Rights.indexGrantRights', $data);
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
     * @param  \App\Models\GrantRights  $grantRights
     * @return \Illuminate\Http\Response
     */
    public function show(GrantRights $grantRights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GrantRights  $grantRights
     * @return \Illuminate\Http\Response
     */
    public function edit(GrantRights $grantRights,$id)
    {
        //
        $grantRights = GrantRights::find($id);
        return view('Grant-Rights.EditGrantRights',compact('grantRights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GrantRights  $grantRights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrantRights $grantRights,$id)
    {
        //
        $request->validate([
            'cancel' => 'boolean',

        ]);
        $grantRights = GrantRights::find($id);
        $grantRights->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrantRights  $grantRights
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrantRights $grantRights,$id)
    {
        //
        $grantRights = GrantRights::find($id);
        $grantRights->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

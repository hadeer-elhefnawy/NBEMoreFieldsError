<?php

namespace App\Http\Controllers;

use App\Models\Online;
use Illuminate\Http\Request;

class online_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['online'] = Online::orderBy('id','asc')->paginate(5);
        return view('Online.indexOnline', $data);
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
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function show(Online $online)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function edit(Online $online,$id)
    {
        //
        $online = Online::find($id);
        return view('Online.EditOnline',compact('online'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Online $online,$id)
    {
        //
        $request->validate([
            'role_function_online' => 'required|string|max:10',
            'main_menu_online' => 'required|string|max:50',
            'sub_menu1_online' => 'required|string|max:50',
            'sub_menu2_online' => 'required|string|max:50',
            'online_description' => 'required|string|max:50',

        ]);
        $online = Online::find($id);
        $online->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Online  $online
     * @return \Illuminate\Http\Response
     */
    public function destroy(Online $online,$id)
    {
        //
        $online = Online::find($id);
        $online->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

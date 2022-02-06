<?php

namespace App\Http\Controllers;

use App\Models\AccClassRestriction;
use Illuminate\Http\Request;

class acc_class_restriction_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['accountClassRestriction'] = AccClassRestriction::orderBy('id','asc')->paginate(5);
        return view('Account-Class-Restriction.indexAccClassRestriction', $data);
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
     * @param  \App\Models\AccClassRestriction  $accClassRestriction
     * @return \Illuminate\Http\Response
     */
    public function show(AccClassRestriction $accClassRestriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccClassRestriction  $accClassRestriction
     * @return \Illuminate\Http\Response
     */
    public function edit(AccClassRestriction $accClassRestriction,$id)
    {
        //
        $accClassRestriction = AccClassRestriction::find($id);
        return view('Account-Class-Restriction.EditAccountClassRestriction',compact('accClassRestriction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccClassRestriction  $accClassRestriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccClassRestriction $accClassRestriction,$id)
    {
        //
        $request->validate([
            'acc_class' => 'nullable|string|min:3|max:6',
            'acc_class_description'=>'nullable|string|max:100',
        ]);
        $accClassRestriction = AccClassRestriction::find($id);
        $accClassRestriction->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccClassRestriction  $accClassRestriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccClassRestriction $accClassRestriction,$id)
    {
        //
        $accClassRestriction = AccClassRestriction::find($id);
        $accClassRestriction->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PasswordRestriction;
use Illuminate\Http\Request;

class password_restriction_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['passwordRestriction'] = PasswordRestriction::orderBy('id','asc')->paginate(5);
        return view('Password-Restriction.indexPasswordRestriction', $data);
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
     * @param  \App\Models\PasswordRestriction  $passwordRestriction
     * @return \Illuminate\Http\Response
     */
    public function show(PasswordRestriction $passwordRestriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PasswordRestriction  $passwordRestriction
     * @return \Illuminate\Http\Response
     */
    public function edit(PasswordRestriction $passwordRestriction,$id)
    {
        //
        $passwordRestriction = PasswordRestriction::find($id);
        return view('Password-Restriction.EditPasswordRestriction',compact('passwordRestriction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PasswordRestriction  $passwordRestriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PasswordRestriction $passwordRestriction,$id)
    {
        //
        $request->validate([
            'password_restriction'=>'nullable|string|max:50',
        ]);
        $passwordRestriction = PasswordRestriction::find($id);
        $passwordRestriction->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PasswordRestriction  $passwordRestriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PasswordRestriction $passwordRestriction,$id)
    {
        //
        $passwordRestriction = PasswordRestriction::find($id);
        $passwordRestriction->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

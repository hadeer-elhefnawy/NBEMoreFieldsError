<?php

namespace App\Http\Controllers;

use App\Models\GroupRestriction;
use Illuminate\Http\Request;

class group_restriction_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['groupRestriction'] = GroupRestriction::orderBy('id','asc')->paginate(5);
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
     * @param  \App\Models\GroupRestriction  $groupRestriction
     * @return \Illuminate\Http\Response
     */
    public function show(GroupRestriction $groupRestriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupRestriction  $groupRestriction
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupRestriction $groupRestriction,$id)
    {
        //
        $groupRestriction = GroupRestriction::find($id);
        return view('Group-Restriction.EditGroupRestriction',compact('groupRestriction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GroupRestriction  $groupRestriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupRestriction $groupRestriction,$id)
    {
        //
        $request->validate([
            'group_code' => 'nullable|string|max:6',
            'group_descripion' => 'nullable|string|max:100',  

        ]);
        $groupRestriction = GroupRestriction::find($id);
        $groupRestriction->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupRestriction  $groupRestriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupRestriction $groupRestriction,$id)
    {
        //
        $groupRestriction = GroupRestriction::find($id);
        $groupRestriction->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

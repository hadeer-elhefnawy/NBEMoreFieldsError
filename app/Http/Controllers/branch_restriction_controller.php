<?php

namespace App\Http\Controllers;

use App\Models\BranchRestriction;
use Illuminate\Http\Request;

class branch_restriction_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['branchRestriction'] = BranchRestriction::orderBy('id','asc')->paginate(5);
        return view('Branch-Restriction.indexBranchRestriction', $data);
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
     * @param  \App\Models\BranchRestriction  $branchRestriction
     * @return \Illuminate\Http\Response
     */
    public function show(BranchRestriction $branchRestriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BranchRestriction  $branchRestriction
     * @return \Illuminate\Http\Response
     */
    public function edit(BranchRestriction $branchRestriction,$id)
    {
        //
        $branchRestriction = BranchRestriction::find($id);
        return view('Branch-Restriction.EditBranchRestriction',compact('branchRestriction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BranchRestriction  $branchRestriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BranchRestriction $branchRestriction,$id)
    {
        //
        $request->validate([
            'branch' => 'nullable|string|min:3|max:5',
            'branch_name'=>'nullable|string|max:50',
        ]);
        $branchRestriction = BranchRestriction::find($id);
        $branchRestriction->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BranchRestriction  $branchRestriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(BranchRestriction $branchRestriction,$id)
    {
        //
        $branchRestriction = BranchRestriction::find($id);
        $branchRestriction->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

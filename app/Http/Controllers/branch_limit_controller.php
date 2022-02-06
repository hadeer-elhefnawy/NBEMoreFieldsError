<?php

namespace App\Http\Controllers;

use App\Models\BranchLimit;
use Illuminate\Http\Request;

class branch_limit_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['branchLimit'] = BranchLimit::orderBy('id','asc')->paginate(5);
        return view('Branch-Limit.indexBranchLimit', $data);
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
     * @param  \App\Models\BranchLimit  $branchLimit
     * @return \Illuminate\Http\Response
     */
    public function show(BranchLimit $branchLimit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BranchLimit  $branchLimit
     * @return \Illuminate\Http\Response
     */
    public function edit(BranchLimit $branchLimit,$id)
    {
        //
        $branchLimit = BranchLimit::find($id);
        return view('Branch-Limit.EditBranchLimit',compact('branchLimit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BranchLimit  $branchLimit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BranchLimit $branchLimit,$id)
    {
        //
        $request->validate([
            'limit_currency'=>'nullable|string|max:5',
            'user_limit'=>'nullable|max:20',
        ]);
        $branchLimit = BranchLimit::find($id);
        $branchLimit->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BranchLimit  $branchLimit
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(BranchLimit $branchLimit,$id)
    {
        //
        $branchLimit = BranchLimit::find($id);
        $branchLimit->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\WebBranch;
use Illuminate\Http\Request;

class web_branch_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['webBranch'] = WebBranch::orderBy('id','asc')->paginate(5);
        return view('Web-Branch.indexWebBranch', $data);

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
     * @param  \App\Models\WebBranch  $webBranch
     * @return \Illuminate\Http\Response
     */
    public function show(WebBranch $webBranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebBranch  $webBranch
     * @return \Illuminate\Http\Response
     */
    public function edit(WebBranch $webBranch,$id)
    {
        //
        $webBranch = WebBranch::find($id);
        return view('Web-Branch.EditWebBranch',compact('webBranch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebBranch  $webBranch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebBranch $webBranch,$id)
    {
        //
        $request->validate([
            'role_function_web_branch' => 'nullable|string|max:10',
            'main_menu_web_branch' => 'required|string|max:50',
            'sub_menu1_web_branch' => 'required|string|max:50',
            'sub_menu2_web_branch' => 'required|string|max:50',
            'web_branch_description' => 'required|string|max:50',

        ]);
        $webBranch = WebBranch::find($id);
        $webBranch->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebBranch  $webBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebBranch $webBranch,$id)
    {
        //
        $webBranch = WebBranch::find($id);
        $webBranch->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

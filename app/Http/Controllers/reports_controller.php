<?php

namespace App\Http\Controllers;

use App\Models\Reports;

use Illuminate\Http\Request;

class reports_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['reports'] = Reports::orderBy('id','asc')->paginate(5);
        return view('reports.indexReports', $data);
        
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
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports,$id)
    {
        //
        $reports = Reports::find($id);
        return view('reports.editReports',compact('reports'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports,$id)
    {
        //
        $request->validate([
            'role_function_report' => 'required|string|max:10',
            'main_menu_report' => 'required|string|max:50',
            'sub_menu1_report' => 'required|string|max:50',
            'sub_menu2_report' => 'required|string|max:50',
            'report_description' => 'required|string|max:50',
            ]);
        $reports = Reports::find($id);
        $reports->update($request->all());
        return redirect()->route('Maintenance.index')->with('success','reports updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports,$id)
    {
        //
        $reports = Reports::find($id);
        $reports->delete();
        return back()->with('success','reports has been deleted successfully');
    }
}

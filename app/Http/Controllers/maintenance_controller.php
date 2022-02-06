<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Reports;
use App\Models\Batch;
use App\Models\Online;
use App\Models\BranchRestriction;
use App\Models\AccClassRestriction;
use App\Models\GrantRights;
use App\Models\QueueRights;
use App\Models\PasswordRestriction;
use App\Models\BranchLimit;
use App\Models\ProcessStageRights;
use App\Models\WebBranch;
use App\Models\ProductPostingAllowed;
use App\Models\ProductAccessAllowed;
use App\Models\GroupRestriction;
use App\Models\NodeGl;
use App\Models\ExceptionalLeafGl;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MaintenanceExport;



use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class maintenance_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['maintenances'] = Maintenance::orderBy('id','asc')->paginate(5);
        $data['reports'] = Reports::orderBy('id','asc')->paginate(5);
        $data['batchs']   = Batch::orderBy('id','asc')->paginate(5);
        $data['onlines'] = Online::orderBy('id','asc')->paginate(5);
        $data['branchRestriction'] = BranchRestriction::orderBy('id','asc')->paginate(5);
        $data['accClassRestriction'] = AccClassRestriction::orderBy('id','asc')->paginate(5);
        $data['grantRights'] = GrantRights::orderBy('id','asc')->paginate(5);
        $data['queueRights'] = QueueRights::orderBy('id','asc')->paginate(5);
        $data['passwordRestriction'] = PasswordRestriction::orderBy('id','asc')->paginate(5);
        $data['branchLimits'] = BranchLimit::orderBy('id','asc')->paginate(5);
        $data['processStageRights'] = ProcessStageRights::orderBy('id','asc')->paginate(5);
        $data['webBranchs'] = WebBranch::orderBy('id','asc')->paginate(5);
        $data['productPostingAllowed'] = ProductPostingAllowed::orderBy('id','asc')->paginate(5);
        $data['productAccessAllowed'] = ProductAccessAllowed::orderBy('id','asc')->paginate(5);
        $data['groupRestriction'] = GroupRestriction::orderBy('id','asc')->paginate(5);
        $data['nodeGls'] = NodeGl::orderBy('id','asc')->paginate(5);
        $data['exceptionalLeafGl'] = ExceptionalLeafGl::orderBy('id','asc')->paginate(5);

        return view('maintenance.index', $data);

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
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance,$id)
    {
        //
        $maintenance = Maintenance::find($id);

        return view('maintenance.edit',compact('maintenance'));

        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenance $maintenance,$id)
    {
        //

            $request->validate([
                'role_function' => 'required|string|max:10',
                'main_menu' => 'required|string|max:50',
                'sub_menu1' => 'required|string|max:50',
                'sub_menu2' => 'required|string|max:50',
                'maint_description' => 'required|string|max:50',
                ]);
            $maintenance = Maintenance::find($id);
            $maintenance->update($request->all());
            return redirect()->route('Maintenance.index')->with('success','maintenance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance,$id)
    {
        //
        $maintenance = Maintenance::find($id);
        $maintenance->delete();
        return back()->with('success','Maintenance has been deleted successfully');
    }

    public function export() 
    {
        return Excel::download(new MaintenanceExport, 'maintenance.xlsx');
    }

}

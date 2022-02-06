<?php
     
namespace App\Http\Controllers;

use App\Exports\MaintenanceExport;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\MaintenanceImport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
    
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('maintenance.index');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new MaintenanceExport, 'maintenance.xlsx');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new MaintenanceImport,request()->file('file'));
             
        return back();
    }
}
<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fcaccessmatrix;
use App\Models\Maintenance;
use App\Models\Reports;
// use Auth;
use Illuminate\Support\Facades\Auth;

// use App\Models\Batch;
// use App\Models\Online;
// use App\Models\BranchRestriction;
// use App\Models\AccClassRestriction;
// use App\Models\GrantRights;
// use App\Models\QueueRights;
// use App\Models\PasswordRestriction;
// use App\Models\BranchLimit;
// use App\Models\ProcessStageRights;
// use App\Models\WebBranch;
// use App\Models\ProductPostingAllowed;
// use App\Models\ProductAccessAllowed;
// use App\Models\GroupRestriction;
// use App\Models\NodeGl;
// use App\Models\ExceptionalLeafGl;


class Wizard extends Component
{

    public $currentStep = 1;
    public array $role_function=array();
    // New Access Matrix
    public $group_name, $role_id, $role_description, $centralizaton_role, $status,$home_branch_no,$version_no,$completed,
    // Maintenance
    $main_menu,$sub_menu1,$sub_menu2,$maint_description,$new,$copy,$delete,$close,$unlock,$reopen,
    $print,$auth,$reverse,$rollover,$confirm,$liquidate,$hold,$template,$view,
    // Reports
    $role_function_report,$main_menu_report,$sub_menu1_report,$sub_menu2_report,$report_description,
    $print_report,$generate_report;



    public $updateMode = false;
    public $inputs = [];
    public $i = 1;


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $this->maintenance = Maintenance::all();
        return view('livewire.wizard');
    }



    public $successMessage = '';

    public function mount()
    {

        // return view('livewire.wizard');    

        // if (Auth::check()){
        //     return view('livewire.wizard');    
        // } else {        

        //     // validation not successful, send back to form 
        //     // return redirect('login');
        //     // return redirect(route('login'));

        // }
    }

    public function newAcessMatrix()
    {
        $validatedData = $this->validate([
            'group_name' => 'required|string|max:50',
            'role_id' => 'required|string|max:15',
            'role_description' => 'required|string|max:50',
            'home_branch_no' => 'required|string|min:3|max:5',
            'version_no' => 'required|max:5',
        ]);

        $this->currentStep = 2;
    }

    public function maintenance()
    {
        $validatedData = $this->validate([
            'role_function.0' => 'required|string|max:10|exists:fc_function_description,FUNCTION_ID',

            'main_menu' => 'required|string|max:50|exists:fc_function_description,MAIN_MENU',
            'sub_menu1' => 'required|string|max:50|exists:fc_function_description,SUB_MENU_1',
            'sub_menu2' => 'required|string|max:50|exists:fc_function_description,SUB_MENU_2',
            'maint_description' => 'required|string|max:50|exists:fc_function_description,DESCRIPTION',

            'role_function.*' => 'required|string|max:10|exists:fc_function_description,FUNCTION_ID',
            // 'main_menu.*' => 'required|string|max:50|exists:fc_function_description,MAIN_MENU',
            // 'sub_menu1.*' => 'required|string|max:50|exists:fc_function_description,SUB_MENU_1',
            // 'sub_menu2.*' => 'required|string|max:50|exists:fc_function_description,SUB_MENU_2',
            // 'maint_description.*' => 'required|string|max:50|exists:fc_function_description,DESCRIPTION',
        
        ],
    
    );
  
        $this->currentStep = 3;
    }

    public function report()
    {
        $validatedData = $this->validate([
            'role_function_report' => 'required|string|max:10|exists:fc_function_description,FUNCTION_ID',
            'main_menu_report' => 'required|string|max:50|exists:fc_function_description,SUB_MENU_1',
            'sub_menu1_report' => 'required|string|max:50|exists:fc_function_description,SUB_MENU_1',
            'sub_menu2_report' => 'required|string|max:50|exists:fc_function_description,SUB_MENU_2',
            'report_description' => 'required|string|max:50|exists:fc_function_description,DESCRIPTION',
         
        ]);
  
        $this->currentStep = 4;
    }

  
    /////////////////////****************************************************/////////////////////////

    public function submitForm()
    { 
        
        $first_insert = Fcaccessmatrix::create([
            'group_name' => $this->group_name,
            'role_id' => $this->role_id,
            'role_description' => $this->role_description,
            'centralizaton_role' => '0',
            'status' => '0',
            'home_branch_no' => $this->home_branch_no,
            'version_no' => $this->version_no, 

        ]);
        $role_id=$first_insert->id;
        foreach ($this->role_function as $key => $value) {

        Maintenance::create([
            'role_id' => $role_id,
            'role_function' => $this->role_function[$key],
            'main_menu' => $this->main_menu,
            'sub_menu1' => $this->sub_menu1,
            'sub_menu2' => $this->sub_menu2,
            'maint_description' => $this->maint_description,
            'new' => '0',
            'copy' => '0',
            'delete' => '0',
            'close' => '0',
            'unlock' => '0',
            'reopen' => '0',
            'print' => '0',
            'auth' => '0',
            'reverse' => '0',
            'rollover' => '0',
            'confirm' => '0',
            'liquidate' => '0',
            'hold' => '0',
            'template' => '0',
            'view' => '0',
        ]);
    }
        Reports::create([
            'role_id' => $role_id,
            'role_function_report' => $this->role_function_report,
            'main_menu_report' => $this->main_menu_report,
            'sub_menu1_report' => $this->sub_menu1_report,
            'sub_menu2_report' => $this->sub_menu2_report,
            'report_description' => $this->report_description,
            'print_report' => '0',
            'generate_report' => '0',
        ]);

      
 
       
        $this->inputs = [];
        $this->successMessage = 'Access Matrix Created Successfully.';
        // $this->clearForm();
        $this->currentStep = 1;
    }






public function back($step)
{
    $this->currentStep = $step;    
}


public function clearForm()
{
    // NewAccessMatrix
    $this->group_name = '';
    $this->role_id = '';
    $this->role_description = '';
    $this->centralizaton_role = '';
    $this->status = '';
    $this->home_branch_no = '';
    $this->version_no = '';
    //Maintenance
    $this->role_id = '';
    $this->role_function = '';
    $this->main_menu = '';
    $this->sub_menu1 = '';
    $this->sub_menu2 = '';
    $this->maint_description = '';
    $this->new = '';
    $this->copy = '';
    $this->delete = '';
    $this->close = '';
    $this->unlock = '';
    $this->reopen = '';
    $this->print = '';
    $this->auth = '';
    $this->reverse = '';
    $this->rollover = '';
    $this->confirm = '';
    $this->liquidate = '';
    $this->hold = '';
    $this->template = '';
    $this->view = '';
    // Reports
    $this->role_id = '';
    $this->role_function_report = '';
    $this->main_menu_report = '';
    $this->sub_menu1_report = '';
    $this->sub_menu2_report = '';
    $this->report_description = '';
    $this->print_report = '';
    $this->generate_report = '';

}


}

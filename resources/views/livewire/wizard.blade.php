<div>
    {{-- In work, do what you enjoy. --}}

    @if (!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

<!-- START OF New Access Matrix SECTION -->
<section id="NewAccess pt-5 mt-5" class="{{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <h1>Add New Access Matrix</h1>
            </div>
            <div class="col-md-6 mb-3">
                <label for="groupName" class="form-label">Group Name</label>
                <input type="text" wire:model="group_name" class="form-control" id="groupName" placeholder="Enter Group Name"> 
                {{-- @error('group_name') <span class="error">{{ $message }}</span> @enderror --}}
                @error('group_name') 
                <div class="alert alert-danger mt-2" role="alert">
                    You Should Enter Group Name
                </div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="RoleId" class="form-label">Role ID</label>
                <input type="text" wire:model="role_id" class="form-control" id="RoleId" placeholder="Enter Role ID">
                @error('role_id') 
                <div class="alert alert-danger mt-2" role="alert">
                    You Should Enter Role ID
                </div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control" wire:model="role_description" id="Description" rows="3"></textarea>
                @error('role_description') 
                <div class="alert alert-danger mt-2" role="alert">
                    You Should Enter Description
                </div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="CentralizationRole" class="form-label">Centralization Role</label>
                <select class="form-select" wire:model="centralizaton_role" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-select" wire:model="status" aria-label="Default select example">
                    <option selected value="0">Close</option>
                    <option value="1">Open</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="branchNo" class="form-label">Home Branch No</label>
                <input type="text" class="form-control" wire:model="home_branch_no" id="branchNo" placeholder="Enter Branch No">
                @error('home_branch_no') 
                <div class="alert alert-danger mt-2" role="alert">
                    You Should Enter Home Branch No
                </div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="versionNo" class="form-label">version No</label>
                <input type="text" class="form-control" wire:model="version_no" id="versionNo" placeholder="Enter Version No">
                @error('version_no') 
                <div class="alert alert-danger mt-2" role="alert">
                    You Should Enter Version No
                </div>
                @enderror
            </div>
            <div class="col-12 text-center my-4">
                <a href="{{ url('/home') }}" class="btn btn-danger mx-3"> Exit</a>
                <button class="btn btn-primary mx-3" wire:click="newAcessMatrix" type="button" >Next</button>
            </div>
        </div>
    </div>
</section>
<!-- END OF New Access Matrix SECTION -->

<!-- START OF Maintenance SECTION -->
<section id="maintenance pt-5 mt-5" class="{{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Maintenance</h1>
            </div>

            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3" wire:click.prevent="add({{$i}})"><i class="fas fa-plus"></i>  Add Maintenance</a>
            </div>

            <div class="col-md-6 mb-3">
                <label for="RoleId2" class="form-label">Role ID</label>
                <input type="text" wire:model="role_id" class="form-control" id="RoleId2" placeholder="Role ID" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="RoleFunc" class="form-label">Role Function</label>
                <input type="text" wire:model="role_function.0" class="form-control" id="RoleFunc" placeholder="Role Function">
                @error('role_function.0')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror

                @foreach($inputs as $key => $value)

                <div class="col-md-6 mb-3">
                    <label for="RoleFunc" class="form-label">Role Function</label>
                    <input type="text" wire:model="role_function.{{ $value }}" class="form-control" id="RoleFunc" placeholder="Role Function">
                    @error('role_function.'.$value)
                    <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="col-md-2">
                    <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
                </div>
        
        
            @endforeach
            </div>

            


            <div class="col-md-6 mb-3">
                <label for="MainMenu" class="form-label">Main Menu</label>
                <input type="text" wire:model="main_menu" class="form-control" id="MainMenu" placeholder="Main Menu">
                @error('main_menu')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu1" class="form-label">Sub Menu 1</label>
                <input type="text" wire:model="sub_menu1" class="form-control" id="SubMenu1" placeholder="Sub Menu 1">
                @error('sub_menu1')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu2" class="form-label">Sub Menu 2</label>
                <input type="text" wire:model="sub_menu2" class="form-control" id="SubMenu2" placeholder="Sub Menu 2">
                @error('sub_menu2')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="MantDescription" class="form-label">Description</label>
                <textarea class="form-control" wire:model="maint_description" id="MantDescription" rows="3"></textarea>
                @error('maint_description')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="New" class="form-label">New</label>
                <select class="form-select" wire:model="new" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Copy" class="form-label">Copy</label>
                <select class="form-select" wire:model="copy" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Delete" class="form-label">Delete</label>
                <select class="form-select" wire:model="delete" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Close" class="form-label">Close</label>
                <select class="form-select" wire:model="close" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Unlock" class="form-label">Unlock</label>
                <select class="form-select" wire:model="unlock" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Reopen" class="form-label">Reopen</label>
                <select class="form-select" wire:model="reopen" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Print" class="form-label">Print</label>
                <select class="form-select" wire:model="print" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Auth" class="form-label">Auth</label>
                <select class="form-select" wire:model="auth" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Reverse" class="form-label">Reverse</label>
                <select class="form-select" wire:model="reverse" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>             
            <div class="col-md-6 mb-3">
                <label for="rollover" class="form-label">RollOver</label>
                <select class="form-select" wire:model="rollover" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Confirm" class="form-label">Confirm</label>
                <select class="form-select" wire:model="confirm" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Liquidate" class="form-label">Liquidate</label>
                <select class="form-select" wire:model="liquidate" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>          
            <div class="col-md-6 mb-3">
                <label for="Hold" class="form-label">Hold</label>
                <select class="form-select" wire:model="hold" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Template" class="form-label">Template</label>
                <select class="form-select" wire:model="template" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="View" class="form-label">View</label>
                <select class="form-select" wire:model="view" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn pull-right" type="button" wire:click="back(1)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="maintenance" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3" wire:click.prevent="add({{$i}})"><i class="fas fa-plus"></i>  Add Maintenance</a>
            </div>
        </div>
    </div>
</section>
<!-- END OF Maintenance SECTION -->

{{-- @foreach($inputs as $key => $value)

    <div class="col-md-6 mb-3">
        <label for="RoleFunc" class="form-label">Role Function</label>
        <input type="text" wire:model="role_function.{{ $value }}" class="form-control" id="RoleFunc" placeholder="Role Function">
        @error('role_function.'.$value)
        <div class="alert alert-danger mt-2 error">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-2">
        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
    </div>


@endforeach --}}







<!-- START OF Reports SECTION -->
<section id="reports pt-5 mt-5" class="{{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Reports</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId3" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId3" placeholder="Role ID">
            </div>
            <div class="col-md-6 mb-3">
                <label for="RoleFuncReport" class="form-label">Role Function</label>
                <input type="text" wire:model="role_function_report" class="form-control" id="RoleFuncReport" placeholder="Role Function">
                @error('role_function_report')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="MainMenuReport" class="form-label">Main Menu</label>
                <input type="text" wire:model="main_menu_report" class="form-control" id="MainMenuReport" placeholder="Main Menu">
                @error('main_menu_report')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu1Report" class="form-label">Sub Menu 1</label>
                <input type="text" wire:model="sub_menu1_report" class="form-control" id="SubMenu1Report" placeholder="Sub Menu 1">
                @error('sub_menu1_report')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu2Report" class="form-label">Sub Menu 2</label>
                <input type="text" wire:model="sub_menu2_report" class="form-control" id="SubMenu2Report" placeholder="Sub Menu 2">
                @error('sub_menu2_report')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="ReportDesc" class="form-label">Description</label>
                <textarea class="form-control" wire:model="report_description" id="ReportDesc" rows="3"></textarea>
                @error('report_description')
                <div class="alert alert-danger mt-2 error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="PrintReport" class="form-label">Print</label>
                <select class="form-select" wire:model="print_report" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="generateReport" class="form-label">Generate</label>
                <select class="form-select" wire:model="generate_report" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="report" type="button" >Next</button>
                <button class="btn btn-success btn-lg pull-right" wire:click.prevent="submitForm()" type="button">Finish!</button>

            {{-- <a href="{{url('/NewAccessMatrix')}}" class="btn btn-info mx-3 text-white"><i class="fas fa-backward"></i>   Back</a>
               <a href="{{url('/Reports')}}" class="btn btn-primary mx-3">Next   <i class="fas fa-forward"></i></a> --}}
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Reports</a>
            </div>
        </div>
    </div>
</section>
<!-- END OF Reports SECTION -->

<!-- START OF batch SECTION -->
{{-- <section id="batch pt-5 mt-5" class="{{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">batch</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId4" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId4" placeholder="Role ID">
            </div>
            <div class="col-md-6 mb-3">
                <label for="RoleFuncBatch" class="form-label">Role Function</label>
                <input type="text" wire:model="role_function_batch" class="form-control" id="RoleFuncBatch" placeholder="Role Function">
            </div>
            <div class="col-md-6 mb-3">
                <label for="MainMenuBatch" class="form-label">Main Menu</label>
                <input type="text" wire:model="main_menu_batch" class="form-control" id="MainMenuBatch" placeholder="Main Menu">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu1Batch" class="form-label">Sub Menu 1</label>
                <input type="text" wire:model="sub_menu1_batch" class="form-control" id="SubMenu1batch" placeholder="Sub Menu 1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu2Batch" class="form-label">Sub Menu 2</label>
                <input type="text" wire:model="sub_menu2_batch" class="form-control" id="SubMenu2Batch" placeholder="Sub Menu 2">
            </div>
            <div class="col-12 mb-3">
                <label for="BatchDesc" class="form-label">Description</label>
                <textarea class="form-control" wire:model="batch_description" id="BatchDesc" rows="3"></textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for="NewBatch" class="form-label">New</label>
                <select class="form-select" wire:model="new_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="CopyBatch" class="form-label">Copy</label>
                <select class="form-select" wire:model="copy_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="DeleteBatch" class="form-label">Delete</label>
                <select class="form-select" wire:model="delete_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="CloseBatch" class="form-label">Close</label>
                <select class="form-select" wire:model="close_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="UnlockBatch" class="form-label">Unlock</label>
                <select class="form-select" wire:model="unlock_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ReopenBatch" class="form-label">Reopen</label>
                <select class="form-select" wire:model="reopen_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="PrintBatch" class="form-label">Print</label>
                <select class="form-select" wire:model="print_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="AuthBatch" class="form-label">Auth</label>
                <select class="form-select" wire:model="auth_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ReverseBatch" class="form-label">Reverse</label>
                <select class="form-select" wire:model="reverse_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>             
            <div class="col-md-6 mb-3">
                <label for="rolloverBatch" class="form-label">RollOver</label>
                <select class="form-select" wire:model="rollover_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ConfirmBatch" class="form-label">Confirm</label>
                <select class="form-select" wire:model="confirm_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="LiquidateBatch" class="form-label">Liquidate</label>
                <select class="form-select" wire:model="liquidate_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>          
            <div class="col-md-6 mb-3">
                <label for="HoldBatch" class="form-label">Hold</label>
                <select class="form-select" wire:model="hold_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="TemplateBatch" class="form-label">Template</label>
                <select class="form-select" wire:model="template_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ViewBatch" class="form-label">View</label>
                <select class="form-select" wire:model="view_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="GenerateBatch" class="form-label">Generate</label>
                <select class="form-select" wire:model="generate_batch" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="batch" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Batch</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF batch SECTION -->

<!-- START OF Online SECTION -->
{{-- <section id="online pt-5 mt-5" class="{{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Online</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId5" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId5" placeholder="Role ID">
            </div>
            <div class="col-md-6 mb-3">
                <label for="RoleFuncOnline" class="form-label">Role Function</label>
                <input type="text" wire:model="role_function_online" class="form-control" id="RoleFuncBatch" placeholder="Role Function">
            </div>
            <div class="col-md-6 mb-3">
                <label for="MainMenuOnline" class="form-label">Main Menu</label>
                <input type="text" wire:model="main_menu_online" class="form-control" id="MainMenuBatch" placeholder="Main Menu">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu1Online" class="form-label">Sub Menu 1</label>
                <input type="text" wire:model="sub_menu1_online" class="form-control" id="SubMenu1batch" placeholder="Sub Menu 1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu2Online" class="form-label">Sub Menu 2</label>
                <input type="text" wire:model="sub_menu2_online" class="form-control" id="SubMenu2Batch" placeholder="Sub Menu 2">
            </div>
            <div class="col-12 mb-3">
                <label for="OnlineDesc" class="form-label">Description</label>
                <textarea class="form-control" wire:model="online_description" id="MantBatch" rows="3"></textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for="NewOnline" class="form-label">New</label>
                <select class="form-select" wire:model="new_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="CopyOnline" class="form-label">Copy</label>
                <select class="form-select" wire:model="copy_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="DeleteOnline" class="form-label">Delete</label>
                <select class="form-select" wire:model="delete_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="CloseOnline" class="form-label">Close</label>
                <select class="form-select" wire:model="close_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="UnlockOnline" class="form-label">Unlock</label>
                <select class="form-select" wire:model="unlock_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ReopenOnline" class="form-label">Reopen</label>
                <select class="form-select" wire:model="reopen_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="PrintOnline" class="form-label">Print</label>
                <select class="form-select" wire:model="print_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="AuthOnline" class="form-label">Auth</label>
                <select class="form-select" wire:model="auth_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ReverseOnline" class="form-label">Reverse</label>
                <select class="form-select" wire:model="reverse_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>             
            <div class="col-md-6 mb-3">
                <label for="rolloverOnline" class="form-label">RollOver</label>
                <select class="form-select" wire:model="rollover_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ConfirmOnline" class="form-label">Confirm</label>
                <select class="form-select" wire:model="confirm_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="LiquidateOnline" class="form-label">Liquidate</label>
                <select class="form-select" wire:model="liquidate_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>          
            <div class="col-md-6 mb-3">
                <label for="HoldOnline" class="form-label">Hold</label>
                <select class="form-select" wire:model="hold_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="TemplateOnline" class="form-label">Template</label>
                <select class="form-select" wire:model="template_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ViewOnline" class="form-label">View</label>
                <select class="form-select" wire:model="view_online" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="online" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Online</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Online SECTION -->

<!-- START OF Branch Restriction SECTION -->
{{-- <section id="Branch pt-5 mt-5" class="{{ $currentStep != 6 ? 'displayNone' : '' }}" id="step-6">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Branch Restriction</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId6" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId6" placeholder="Role ID">
            </div>
            <div class="col-md-6 mb-3">
                <label for="BranchRestriction" class="form-label">Branch Restiction</label>
                <select class="form-select" wire:model="branch_restriction" aria-label="Default select example">
                    <option selected value="0">Disallowed</option>
                    <option value="1">Allowed</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Branch" class="form-label">Branch</label>
                <input type="text" wire:model="branch" class="form-control" id="Branch" placeholder="Role Function">
            </div>
            <div class="col-md-6 mb-3">
                <label for="BranchName" class="form-label">Branch Name</label>
                <input type="text" wire:model="branch_name" class="form-control" id="BranchName" placeholder="Role Function">
            </div>

          
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(5)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="branchRestriction" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Branch Restriction</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Branch Restriction SECTION -->

<!-- START OF Account Class Restriction SECTION -->
{{-- <section id="AccountClass pt-5 mt-5" class="{{ $currentStep != 7 ? 'displayNone' : '' }}" id="step-7">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Account Class Restriction</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId6" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId6" placeholder="Role ID">
            </div>
            <div class="col-md-6 mb-3">
                <label for="AccountClassRestriction" class="form-label">Account Class Restiction</label>
                <select class="form-select" wire:model="acc_class_restriction" aria-label="Default select example">
                    <option selected value="0">Disallowed</option>
                    <option value="1">Allowed</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="AccountClass" class="form-label">Account Class</label>
                <input type="text" wire:model="acc_class" class="form-control" id="AccountClass" placeholder="Role Function">
            </div>
            <div class="col-12 mb-3">
                <label for="AccClassDesc" class="form-label">Description</label>
                <textarea class="form-control" wire:model="acc_class_description" id="AccClassDesc" rows="3"></textarea>
            </div>
          
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(6)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="accClassRestriction" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Account Class Restriction</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Account Class Restriction SECTION -->

<!-- START OF Grant Rights SECTION -->
{{-- <section id="GrantRights pt-5 mt-5" class="{{ $currentStep != 8 ? 'displayNone' : '' }}" id="step-8">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Grant Rights</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId7" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId7" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="Cancel" class="form-label">Cancel</label>
                <select class="form-select" wire:model="cancel" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeNode" class="form-label">Change Node</label>
                <select class="form-select" wire:model="change_node" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="Release" class="form-label">Release</label>
                <select class="form-select" wire:model="release" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="changeMedia" class="form-label">Change Media</label>
                <select class="form-select" wire:model="change_media" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="BranchMove" class="form-label">Branch Move</label>
                <select class="form-select" wire:model="branch_move" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="HoldBranchRights" class="form-label">Hold</label>
                <select class="form-select" wire:model="hold_branch_rights" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="TestInput" class="form-label">Test Input</label>
                <select class="form-select" wire:model="test_input" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeAddress" class="form-label">Change Address</label>
                <select class="form-select" wire:model="change_address" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="reinstate" class="form-label">Reinstate</label>
                <select class="form-select" wire:model="reinstate" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangePriority" class="form-label">Change Priority</label>
                <select class="form-select" wire:model="change_priority" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="AuthCancel" class="form-label">Auth Cancel</label>
                <select class="form-select" wire:model="auth_cancel" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="AuthChangeNode" class="form-label">Auth Change Node</label>
                <select class="form-select" wire:model="auth_change_node" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="Release2" class="form-label">Release</label>
                <select class="form-select" wire:model="release2" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeMedia2" class="form-label">Change Media</label>
                <select class="form-select" wire:model="change_media2" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="AuthBranchMove" class="form-label">Auth Branch Move</label>
                <select class="form-select" wire:model="auth_branch_move" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="HoldBranchRights2" class="form-label">Hold</label>
                <select class="form-select" wire:model="hold_branch_rights2" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="AuthTestInput" class="form-label">Auth Test Input</label>
                <select class="form-select" wire:model="auth_test_input" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeAddress2" class="form-label">Change Address</label>
                <select class="form-select" wire:model="change_address2" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
     
            <div class="col-md-6 mb-3">
                <label for="AuthReinstate" class="form-label">Auth Reinstate</label>
                <select class="form-select" wire:model="auth_reinstate" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
     
            <div class="col-md-6 mb-3">
                <label for="ChangePriority2" class="form-label">Change Priority</label>
                <select class="form-select" wire:model="change_priority2" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
     
            <div class="col-md-6 mb-3">
                <label for="Install" class="form-label">Install</label>
                <select class="form-select" wire:model="install" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
     
            <div class="col-md-6 mb-3">
                <label for="TestCheck" class="form-label">Test Check</label>
                <select class="form-select" wire:model="test_check" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="LinkContract" class="form-label">Link Contract</label>
                <select class="form-select" wire:model="link_contract" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
     
            <div class="col-md-6 mb-3">
                <label for="ChangeBranchIn" class="form-label">Change Branch In</label>
                <select class="form-select" wire:model="change_branch_in" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeMessage" class="form-label">Change Message</label>
                <select class="form-select" wire:model="change_message" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeForceReleaseFund" class="form-label">Change Force Release Fund</label>
                <select class="form-select" wire:model="change_force_release_fund" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="Suppress" class="form-label">Suppress</label>
                <select class="form-select" wire:model="suppress" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="DeleteBranchRights" class="form-label">Delete Branch Rights</label>
                <select class="form-select" wire:model="delete_branch_rights" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="PrintBranchRights" class="form-label">Print Branch Rights</label>
                <select class="form-select" wire:model="print_branch_rights" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="FtUpload" class="form-label">Ft Upload</label>
                <select class="form-select" wire:model="ft_upload" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="MoveToQueue" class="form-label">Move To Queue</label>
                <select class="form-select" wire:model="move_to_queue" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeAddressIn" class="form-label">Change Address In</label>
                <select class="form-select" wire:model="change_address_in" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="AuthChangeMessage" class="form-label">Auth Change Message</label>
                <select class="form-select" wire:model="auth_change_message" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="AuthRights" class="form-label">Auth Rights</label>
                <select class="form-select" wire:model="auth_rights" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ChangeForceCoverMatch" class="form-label">Change Force Cover Match</label>
                <select class="form-select" wire:model="change_force_cover_match" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
          
          


            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(7)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="grantRights" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Account Class Restriction</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Grant Rights SECTION -->

<!-- START OF Queue Rights SECTION -->
{{-- <section id="QueueRights pt-5 mt-5" class="{{ $currentStep != 9 ? 'displayNone' : '' }}" id="step-9">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Queue Rights</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId8" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId8" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="QueueRights" class="form-label">Queue Rights</label>
                <input type="text" wire:model="queue_rights" class="form-control" id="QueueRights" placeholder="Role Function">
            </div>
          

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(8)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="queueRights" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Account Class Restriction</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Queue Rights SECTION -->

<!-- START OF Password Restriction SECTION -->
{{-- <section id="passwordRestriction pt-5 mt-5" class="{{ $currentStep != 10 ? 'displayNone' : '' }}" id="step-10">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Password Restriction</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId9" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId9" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="PasswordRestriction" class="form-label">Password Restriction</label>
                <input type="text" wire:model="password_restriction" class="form-control" id="PasswordRestriction" placeholder="Role Function">
            </div>
          

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(9)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="passwordRestriction" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Account Class Restriction</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Password Restriction SECTION -->

<!-- START OF Branch Limits SECTION -->
{{-- <section id="BranchLimits pt-5 mt-5" class="{{ $currentStep != 11 ? 'displayNone' : '' }}" id="step-11">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Branch Limits</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId10" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId10" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="AuthorizerRole" class="form-label">Authorizer Role</label>
                <select class="form-select" wire:model="authorizer_role" aria-label="Default select example">
                    <option selected value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="LimitCurrency" class="form-label">Limit Currency</label>
                <input type="text" wire:model="limit_currency" class="form-control" id="LimitCurrency" placeholder="Role Function">
            </div>
            <div class="col-md-6 mb-3">
                <label for="UserLimit" class="form-label">User Limit</label>
                <input type="text" wire:model="user_limit" class="form-control" id="UserLimit" placeholder="Role Function">
            </div>
          

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(10)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="branchLimit" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Branch Limit</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Branch Limits SECTION -->

<!-- START OF Process Stage Rights SECTION -->
{{-- <section id="ProcessStageRights pt-5 mt-5" class="{{ $currentStep != 12 ? 'displayNone' : '' }}" id="step-12">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Process Stage Rights </h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId11" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId11" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="RoleFuncProcessStage" class="form-label">Role Function</label>
                <input type="text" wire:model="role_function_Process_stage" class="form-control" id="RoleFuncProcessStage" placeholder="Role Function">
            </div>
            <div class="col-md-6 mb-3">
                <label for="MainMenuProcesStage" class="form-label">Main Menu</label>
                <input type="text" wire:model="main_menu_Process_stage" class="form-control" id="MainMenuProcesStage" placeholder="Main Menu">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu1ProcessStage" class="form-label">Sub Menu 1</label>
                <input type="text" wire:model="sub_menu1_Process_stage" class="form-control" id="SubMenu1ProcessStage" placeholder="Sub Menu 1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu2ProcessStage" class="form-label">Sub Menu 2</label>
                <input type="text" wire:model="sub_menu2_Process_stage" class="form-control" id="SubMenu2ProcessStage" placeholder="Sub Menu 2">
            </div>
            <div class="col-12 mb-3">
                <label for="ProcessStageDesc" class="form-label">Description</label>
                <textarea class="form-control" wire:model="Process_stage_description" id="ProcessStageDesc" rows="3"></textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Editable" class="form-label">Editable</label>
                <select class="form-select" wire:model="editable" aria-label="Default select example">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>

            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(11)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="processStageRights" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Process Stage Rights </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Process Stage Rights SECTION -->

<!-- START OF Web Branch SECTION -->
{{-- <section id="webBranch pt-5 mt-5" class="{{ $currentStep != 13 ? 'displayNone' : '' }}" id="step-13">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Web Branch</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId12" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId12" placeholder="Role ID">
            </div>
            <div class="col-md-6 mb-3">
                <label for="RoleFuncWebBranch" class="form-label">Role Function</label>
                <input type="text" wire:model="role_function_web_branch" class="form-control" id="RoleFuncWebBranch placeholder="Role Function">
            </div>
            <div class="col-md-6 mb-3">
                <label for="MainMenuWebBranch" class="form-label">Main Menu</label>
                <input type="text" wire:model="main_menu_web_branch" class="form-control" id="MainMenuWebBranch" placeholder="Main Menu">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu1WebBranch" class="form-label">Sub Menu 1</label>
                <input type="text" wire:model="sub_menu1_web_branch" class="form-control" id="SubMenu1WebBranch" placeholder="Sub Menu 1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="SubMenu2WebBranch" class="form-label">Sub Menu 2</label>
                <input type="text" wire:model="sub_menu2_web_branch" class="form-control" id="SubMenu2WebBranch" placeholder="Sub Menu 2">
            </div>
            <div class="col-12 mb-3">
                <label for="WebBranchDesc" class="form-label">Description</label>
                <textarea class="form-control" wire:model="web_branch_description" id="WebBranchDesc" rows="3"></textarea>
            </div>
    
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(12)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="webBranch" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Web Branch </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Web Branch SECTION -->

<!-- START OF Product Posting Allowed SECTION -->
{{-- <section id="productPostingAllowed pt-5 mt-5" class="{{ $currentStep != 14 ? 'displayNone' : '' }}" id="step-14">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Product Posting Allowed</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId13" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId13" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="ProductAllowed" class="form-label">Product Allowed</label>
                <select class="form-select" wire:model="product_allowed" aria-label="Default select example">
                    <option value="0">Disallowed</option>
                    <option value="1">Allowed</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ProductCodePosting" class="form-label">product Code</label>
                <input type="text" wire:model="product_code_posting" class="form-control" id="ProductCodePosting" placeholder="Main Menu">
            </div>
        
            <div class="col-12 mb-3">
                <label for="ProductDescPosting" class="form-label">Product Description</label>
                <textarea class="form-control" wire:model="product_desc_posting" id="ProductDescPosting" rows="3"></textarea>
            </div>
    
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(13)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="productPostingAllowed" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Product Posting Allowed </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Product Posting Allowed SECTION -->

<!-- START OF Product Access Allowed SECTION -->
{{-- <section id="productAccessAllowed pt-5 mt-5" class="{{ $currentStep != 15 ? 'displayNone' : '' }}" id="step-15">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Product Access Allowed</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId14" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId14" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="ProductAccess" class="form-label">Product Access</label>
                <select class="form-select" wire:model="product_access" aria-label="Default select example">
                    <option value="0">Disallowed</option>
                    <option value="1">Allowed</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ProductCodeAccess" class="form-label">product Code</label>
                <input type="text" wire:model="product_code_access" class="form-control" id="ProductCodeAccess" placeholder="Main Menu">
            </div>
        
            <div class="col-12 mb-3">
                <label for="ProductDescAccess" class="form-label">Product Description</label>
                <textarea class="form-control" wire:model="product_desc_access" id="ProductDescAccess" rows="3"></textarea>
            </div>
    
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(14)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="productAccessAllowed" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Product Posting Allowed </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Product Access Allowed SECTION -->

<!-- START OF Group Restriction SECTION -->
{{-- <section id="groupRestriction pt-5 mt-5" class="{{ $currentStep != 16 ? 'displayNone' : '' }}" id="step-16">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">Product Restriction</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId15" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId15" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="GroupCodeAllowed" class="form-label">Group Code Allowed</label>
                <select class="form-select" wire:model="group_code_allowed" aria-label="Default select example">
                    <option value="0">Disallowed</option>
                    <option value="1">Allowed</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="GroupCode" class="form-label">Group Code</label>
                <input type="text" wire:model="group_code" class="form-control" id="GroupCode" placeholder="Main Menu">
            </div>
        
            <div class="col-12 mb-3">
                <label for="GroupDescription" class="form-label">Group Description</label>
                <textarea class="form-control" wire:model="group_descripion" id="GroupDescription" rows="3"></textarea>
            </div>
    
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(15)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="groupRestriction" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Group Restriction </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Group Restriction SECTION -->

<!-- START OF Gl Restriction/Node GL's SECTION -->
{{-- <section id="glRestrictionNode pt-5 mt-5" class="{{ $currentStep != 17 ? 'displayNone' : '' }}" id="step-17">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">GL Restriction/Node GL's</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId16" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId16" placeholder="Role ID">
            </div>

            <div class="col-md-6 mb-3">
                <label for="GlAllowedNode" class="form-label">GL Allowed</label>
                <select class="form-select" wire:model="gl_allowed_node" aria-label="Default select example">
                    <option value="0">Disallowed</option>
                    <option value="1">Allowed</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label for="NodeGlNode" class="form-label">Node GL</label>
                <input type="text" wire:model="node_gl_node" class="form-control" id="NodeGlNode" placeholder="Main Menu">
            </div>
        
            <div class="col-12 mb-3">
                <label for="NodeGlDescriptionEnNode" class="form-label">Node Gl Description EN</label>
                <textarea class="form-control" wire:model="node_gl_descripion_en_node" id="NodeGlDescriptionEnNode" rows="3"></textarea>
            </div>

            <div class="col-12 mb-3">
                <label for="NodeGlDescriptionArNode" class="form-label">Node Gl Description AR</label>
                <textarea class="form-control" wire:model="node_gl_descripion_ar_node" id="NodeGlDescriptionArNode" rows="3"></textarea>
            </div>
    
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(16)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="nodeGlRestriction" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Group Restriction </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Gl Restriction/Node GL's SECTION -->

<!-- START OF Gl Restriction/Exceptional Leaf GL's SECTION -->
{{-- <section id="glRestrictionExceptional pt-5 mt-5" class="{{ $currentStep != 18 ? 'displayNone' : '' }}" id="step-18">
    <div class="container pt-5">
        <div class="row px-5">
            <div class="col-md-12 text-start mb-3">
                <h1 class="text-start py-3">GL Restriction/Exceptional Leaf GL's</h1>
            </div>
   
            <div class="col-md-6 mb-3">
                <label for="RoleId17" class="form-label">Role ID</label>
                <input type="text" disabled wire:model="role_id" class="form-control" id="RoleId17" placeholder="Role ID">
            </div>
            <div class="col-md-6 mb-3">
                <label for="GlAllowedExceptional" class="form-label">GL Allowed</label>
                <select class="form-select" wire:model="gl_allowed_exceptional" aria-label="Default select example">
                    <option value="0">Disallowed</option>
                    <option value="1">Allowed</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="NodeGlExceptional" class="form-label">Node GL</label>
                <input type="text" wire:model="node_gl_exceptional" class="form-control" id="NodeGlExceptional" placeholder="Main Menu">
            </div>
            <div class="col-12 mb-3">
                <label for="NodeGlDescriptionEnExceptional" class="form-label">Node Gl Description EN</label>
                <textarea class="form-control" wire:model="node_gl_descripion_en_exceptional" id="NodeGlDescriptionEnExceptional" rows="3"></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="NodeGlDescriptionArExceptional" class="form-label">Node Gl Description AR</label>
                <textarea class="form-control" wire:model="node_gl_descripion_ar_exceptional" id="NodeGlDescriptionArExceptional" rows="3"></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="ExceptionalLeafGl" class="form-label">Exceptional Leaf GL</label>
                <textarea class="form-control" wire:model="exceptional_leaf_gl" id="ExceptionalLeafGl" rows="3"></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="LeafGlDescEn" class="form-label">Leaf Gl Description EN</label>
                <input type="text" class="form-control" wire:model="leaf_gl_description_en_exceptional" id="LeafGlDescEn" rows="3">
            </div>
            <div class="col-12 mb-3">
                <label for="LeafGlDescAr" class="form-label">Leaf Gl Description AR</label>
                <textarea class="form-control" wire:model="leaf_gl_description_ar_exceptional" id="LeafGlDescAr" rows="3"></textarea>
            </div>

    
            <div class="col-12 text-center my-4">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(17)">Back</button>
                <button class="btn btn-primary mx-3" wire:click="submitForm" type="button" >Next</button>
            </div>
            <div class="col-md-12 text-end mb-3">
                <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Group Restriction </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- END OF Gl Restriction/Exceptional Leaf GL's SECTION -->




<div class="row setup-content {{ $currentStep != 19 ? 'displayNone' : '' }}" id="step-19">
    <div class="col-xs-12">
        <div class="col-md-12">

            <h3> Access Matrix </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">group_name</th>
                    <th scope="col">role_id</th>
                    <th scope="col">role_description</th>
                    <th scope="col">centralizaton_role</th>
                    <th scope="col">status</th>
                    <th scope="col">home_branch_no</th>
                    <th scope="col">version_no</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$group_name}}</td>
                    <td>{{$role_id}}</td>
                    <td>{{$role_description}}</td>
                    <td>{{$centralizaton_role}}</td>
                    <td>{{$status}}</td>
                    <td>{{$home_branch_no}}</td>
                    <td>{{$version_no}}</td>
                  </tr>
                </tbody>
            </table>

            <h3> Maintenance </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">role_function</th>
                    <th scope="col">main_menu</th>
                    <th scope="col">sub_menu1</th>
                    <th scope="col">sub_menu2</th>
                    <th scope="col">maint_description</th>
                    <th scope="col">new</th>
                    <th scope="col">copy</th>
                    <th scope="col">delete</th>
                    <th scope="col">close</th>
                    <th scope="col">unlock</th>
                    <th scope="col">reopen</th>
                    <th scope="col">print</th>
                    <th scope="col">auth</th>
                    <th scope="col">reverse</th>
                    <th scope="col">rollover</th>
                    <th scope="col">confirm</th>
                    <th scope="col">liquidate</th>
                    <th scope="col">hold</th>
                    <th scope="col">template</th>
                    <th scope="col">view</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    {{-- <td>{{$role_function}}</td> --}}
                    <td>{{$main_menu}}</td>
                    <td>{{$sub_menu1}}</td>
                    <td>{{$sub_menu2}}</td>
                    <td>{{$maint_description}}</td>
                    <td>{{$new}}</td>
                    <td>{{$copy}}</td>
                    <td>{{$delete}}</td>
                    <td>{{$close}}</td>
                    <td>{{$unlock}}</td>
                    <td>{{$reopen}}</td>
                    <td>{{$print}}</td>
                    <td>{{$auth}}</td>
                    <td>{{$reverse}}</td>
                    <td>{{$rollover}}</td>
                    <td>{{$confirm}}</td>
                    <td>{{$liquidate}}</td>
                    <td>{{$hold}}</td>
                    <td>{{$template}}</td>
                    <td>{{$view}}</td>
                  </tr>
                </tbody>
            </table>

            <h3> Reports </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">role_function_report</th>
                    <th scope="col">main_menu_report</th>
                    <th scope="col">sub_menu1_report</th>
                    <th scope="col">sub_menu2_report</th>
                    <th scope="col">report_description</th>
                    <th scope="col">print_report</th>
                    <th scope="col">generate_report</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$role_function_report}}</td>
                    <td>{{$main_menu_report}}</td>
                    <td>{{$sub_menu1_report}}</td>
                    <td>{{$sub_menu2_report}}</td>
                    <td>{{$report_description}}</td>
                    <td>{{$print_report}}</td>
                    <td>{{$generate_report}}</td>
                  </tr>
                </tbody>
            </table>

            {{-- <h3> Batch </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">role_function_batch</th>
                    <th scope="col">main_menu_batch</th>
                    <th scope="col">sub_menu1_batch</th>
                    <th scope="col">sub_menu2_batch</th>
                    <th scope="col">batch_description</th>
                    <th scope="col">new_batch</th>
                    <th scope="col">copy_batch</th>
                    <th scope="col">delete_batch</th>
                    <th scope="col">close_batch</th>
                    <th scope="col">unlock_batch</th>
                    <th scope="col">reopen_batch</th>
                    <th scope="col">print_batch</th>
                    <th scope="col">auth_batch</th>
                    <th scope="col">reverse_batch</th>
                    <th scope="col">rollover_batch</th>
                    <th scope="col">confirm_batch</th>
                    <th scope="col">liquidate_batch</th>
                    <th scope="col">hold_batch</th>
                    <th scope="col">template_batch</th>
                    <th scope="col">view_batch</th>
                    <th scope="col">generate_batch</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$role_function_batch}}</td>
                    <td>{{$main_menu_batch}}</td>
                    <td>{{$sub_menu1_batch}}</td>
                    <td>{{$sub_menu2_batch}}</td>
                    <td>{{$batch_description}}</td>
                    <td>{{$new_batch}}</td>
                    <td>{{$copy_batch}}</td>
                    <td>{{$delete_batch}}</td>
                    <td>{{$close_batch}}</td>
                    <td>{{$unlock_batch}}</td>
                    <td>{{$reopen_batch}}</td>
                    <td>{{$print_batch}}</td>
                    <td>{{$auth_batch}}</td>
                    <td>{{$reverse_batch}}</td>
                    <td>{{$rollover_batch}}</td>
                    <td>{{$confirm_batch}}</td>
                    <td>{{$liquidate_batch}}</td>
                    <td>{{$hold_batch}}</td>
                    <td>{{$template_batch}}</td>
                    <td>{{$view_batch}}</td>
                    <td>{{$generate_batch}}</td>
                  </tr>
                </tbody>
            </table> --}}

            {{-- <h3> Online </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">role_function_online</th>
                    <th scope="col">main_menu_online</th>
                    <th scope="col">sub_menu1_online</th>
                    <th scope="col">sub_menu2_online</th>
                    <th scope="col">online_description</th>
                    <th scope="col">new_online</th>
                    <th scope="col">copy_online</th>
                    <th scope="col">delete_online</th>
                    <th scope="col">close_online</th>
                    <th scope="col">unlock_online</th>
                    <th scope="col">reopen_online</th>
                    <th scope="col">print_online</th>
                    <th scope="col">auth_online</th>
                    <th scope="col">reverse_online</th>
                    <th scope="col">rollover_online</th>
                    <th scope="col">confirm_online</th>
                    <th scope="col">liquidate_online</th>
                    <th scope="col">hold_online</th>
                    <th scope="col">template_online</th>
                    <th scope="col">view_online</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$role_function_online}}</td>
                    <td>{{$main_menu_online}}</td>
                    <td>{{$sub_menu1_online}}</td>
                    <td>{{$sub_menu2_online}}</td>
                    <td>{{$online_description}}</td>
                    <td>{{$new_online}}</td>
                    <td>{{$copy_online}}</td>
                    <td>{{$delete_online}}</td>
                    <td>{{$close_online}}</td>
                    <td>{{$unlock_online}}</td>
                    <td>{{$reopen_online}}</td>
                    <td>{{$print_online}}</td>
                    <td>{{$auth_online}}</td>
                    <td>{{$reverse_online}}</td>
                    <td>{{$rollover_online}}</td>
                    <td>{{$confirm_online}}</td>
                    <td>{{$liquidate_online}}</td>
                    <td>{{$hold_online}}</td>
                    <td>{{$template_online}}</td>
                    <td>{{$view_online}}</td>
                  </tr>
                </tbody>
            </table> --}}

            {{-- <h3> Branch Restriction </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">branch_restriction</th>
                    <th scope="col">branch</th>
                    <th scope="col">branch_name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$branch_restriction}}</td>
                    <td>{{$branch}}</td>
                    <td>{{$branch_name}}</td>
                  </tr>
                </tbody>
            </table> --}}

            {{-- <h3> Account Class Restriction </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">acc_class_restriction</th>
                    <th scope="col">acc_class</th>
                    <th scope="col">acc_class_description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$acc_class_restriction}}</td>
                    <td>{{$acc_class}}</td>
                    <td>{{$acc_class_description}}</td>
                  </tr>
                </tbody>
            </table> --}}

            {{-- <h3> Grant Rights </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">cancel</th>
                    <th scope="col">change_node</th>
                    <th scope="col">release</th>
                    <th scope="col">change_media</th>
                    <th scope="col">branch_move</th>
                    <th scope="col">hold_branch_rights</th>
                    <th scope="col">test_input</th>
                    <th scope="col">change_address</th>
                    <th scope="col">reinstate</th>
                    <th scope="col">change_priority</th>
                    <th scope="col">auth_cancel</th>
                    <th scope="col">auth_change_node</th>
                    <th scope="col">release2</th>
                    <th scope="col">change_media2</th>
                    <th scope="col">auth_branch_move</th>
                    <th scope="col">hold_branch_rights2</th>
                    <th scope="col">auth_test_input</th>
                    <th scope="col">change_address2</th>
                    <th scope="col">auth_reinstate</th>
                    <th scope="col">change_priority2</th>
                    <th scope="col">install</th>
                    <th scope="col">test_check</th>
                    <th scope="col">link_contract</th>
                    <th scope="col">change_branch_in</th>
                    <th scope="col">change_message</th>
                    <th scope="col">change_force_release_fund</th>
                    <th scope="col">suppress</th>
                    <th scope="col">delete_branch_rights</th>
                    <th scope="col">print_branch_rights</th>
                    <th scope="col">ft_upload</th>
                    <th scope="col">move_to_queue</th>
                    <th scope="col">change_address_in</th>
                    <th scope="col">auth_change_message</th>
                    <th scope="col">auth_rights</th>
                    <th scope="col">change_force_cover_match</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$cancel}}</td>
                    <td>{{$change_node}}</td>
                    <td>{{$release}}</td>
                    <td>{{$change_media}}</td>
                    <td>{{$branch_move}}</td>
                    <td>{{$hold_branch_rights}}</td>
                    <td>{{$test_input}}</td>
                    <td>{{$change_address}}</td>
                    <td>{{$reinstate}}</td>
                    <td>{{$change_priority}}</td>
                    <td>{{$auth_cancel}}</td>
                    <td>{{$auth_change_node}}</td>
                    <td>{{$release2}}</td>
                    <td>{{$change_media2}}</td>
                    <td>{{$auth_branch_move}}</td>
                    <td>{{$hold_branch_rights2}}</td>
                    <td>{{$auth_test_input}}</td>
                    <td>{{$change_address2}}</td>
                    <td>{{$auth_reinstate}}</td>
                    <td>{{$change_priority2}}</td>
                    <td>{{$install}}</td>
                    <td>{{$test_check}}</td>
                    <td>{{$link_contract}}</td>
                    <td>{{$change_branch_in}}</td>
                    <td>{{$change_message}}</td>
                    <td>{{$change_force_release_fund}}</td>
                    <td>{{$suppress}}</td>
                    <td>{{$delete_branch_rights}}</td>
                    <td>{{$print_branch_rights}}</td>
                    <td>{{$ft_upload}}</td>
                    <td>{{$move_to_queue}}</td>
                    <td>{{$change_address_in}}</td>
                    <td>{{$auth_change_message}}</td>
                    <td>{{$auth_rights}}</td>
                    <td>{{$change_force_cover_match}}</td>


                  </tr>
                </tbody>
            </table> --}}

            {{-- <h3> Queue Rights </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">queue_rights</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$queue_rights}}</td>
                  </tr>
                </tbody>
            </table> --}}

            {{-- <h3> Password Restriction </h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">role_id</th>
                    <th scope="col">password_restriction</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$role_id}}</td>
                    <td>{{$password_restriction}}</td>
                  </tr>
                </tbody>
            </table> --}}





            <table class="table">
                <h3> New Access Matrix</h3>

                <tr>
                    <td>group_name:</td>
                    <td><strong>{{$group_name}}</strong></td>
                </tr>
                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr>
                <tr>
                    <td>role_description:</td>
                    <td><strong>{{$role_description}}</strong></td>
                </tr>
                <tr>
                    <td>status:</td>
                    <td><strong>{{$status}}</strong></td>
                </tr>
                <tr>
                    <td>home_branch_no:</td>
                    <td><strong>{{$home_branch_no}}</strong></td>
                </tr>
                <tr>
                    <td>version_no:</td>
                    <td><strong>{{$version_no}}</strong></td>
                </tr>
        
                <h3> Maintenance</h3>

                <tr>
                    <td>role_id :</td>
                    <td><strong>{{$role_id }}</strong></td>
                </tr>
                <tr>
                    <td>role_function:</td>
                    <td><strong>{{$role_function}}</strong></td>
                </tr>
                <tr>
                    <td>main_menu:</td>
                    <td><strong>{{$main_menu}}</strong></td>
                </tr>
                <tr>
                    <td>sub_menu1:</td>
                    <td><strong>{{$sub_menu1}}</strong></td>
                </tr>
                <tr>
                    <td>sub_menu2:</td>
                    <td><strong>{{$sub_menu2}}</strong></td>
                </tr>
                <tr>
                    <td>maint_description:</td>
                    <td><strong>{{$maint_description}}</strong></td>
                </tr>
                <tr>
                    <td>new:</td>
                    <td><strong>{{$new}}</strong></td>
                </tr>
                <tr>
                    <td>copy:</td>
                    <td><strong>{{$copy}}</strong></td>
                </tr>
                <tr>
                    <td>delete:</td>
                    <td><strong>{{$delete}}</strong></td>
                </tr>
                <tr>
                    <td>close:</td>
                    <td><strong>{{$close}}</strong></td>
                </tr>
                <tr>
                    <td>unlock:</td>
                    <td><strong>{{$unlock}}</strong></td>
                </tr>
                <tr>
                    <td>reopen:</td>
                    <td><strong>{{$reopen}}</strong></td>
                </tr>
                <tr>
                    <td>print:</td>
                    <td><strong>{{$print}}</strong></td>
                </tr>       
                <tr>
                    <td>auth:</td>
                    <td><strong>{{$auth}}</strong></td>
                </tr>       
                <tr>
                    <td>reverse:</td>
                    <td><strong>{{$reverse}}</strong></td>
                </tr>
                <tr>
                    <td>rollover:</td>
                    <td><strong>{{$rollover}}</strong></td>
                </tr> 
                <tr>
                    <td>confirm:</td>
                    <td><strong>{{$confirm}}</strong></td>
                </tr> 
                <tr>
                    <td>liquidate:</td>
                    <td><strong>{{$liquidate}}</strong></td>
                </tr> 
                <tr>
                    <td>hold:</td>
                    <td><strong>{{$hold}}</strong></td>
                </tr> 
                <tr>
                    <td>template:</td>
                    <td><strong>{{$template}}</strong></td>
                </tr> 
                <tr>
                    <td>view:</td>
                    <td><strong>{{$view}}</strong></td>
                </tr> 

                <h3> Reports</h3>

                <tr>
                    <td>role_id :</td>
                    <td><strong>{{$role_id }}</strong></td>
                </tr>
                <tr>
                    <td>FUNCTION_ID:</td>
                    <td><strong>{{$role_function_report}}</strong></td>
                </tr> 
                <tr>
                    <td>MAIN_MENU:</td>
                    <td><strong>{{$main_menu_report}}</strong></td>
                </tr> 
                <tr>
                    <td>SUB_MENU_1:</td>
                    <td><strong>{{$sub_menu1_report}}</strong></td>
                </tr> 
                <tr>
                    <td>SUB_MENU_2:</td>
                    <td><strong>{{$sub_menu2_report}}</strong></td>
                </tr> 
                <tr>
                    <td>DESCRIPTION:</td>
                    <td><strong>{{$report_description}}</strong></td>
                </tr> 
                <tr>
                    <td>print_report:</td>
                    <td><strong>{{$print_report}}</strong></td>
                </tr> 
                <tr>
                    <td>generate_report:</td>
                    <td><strong>{{$generate_report}}</strong></td>
                </tr> 

                {{-- <h3> Batch</h3> --}}
       
                {{-- <tr>
                    <td>role_id :</td>
                    <td><strong>{{$role_id }}</strong></td>
                </tr>
                <tr>
                    <td>role_function_batch:</td>
                    <td><strong>{{$role_function_batch}}</strong></td>
                </tr>
                <tr>
                    <td>main_menu_batch:</td>
                    <td><strong>{{$main_menu_batch}}</strong></td>
                </tr>
                <tr>
                    <td>sub_menu1_batch:</td>
                    <td><strong>{{$sub_menu1_batch}}</strong></td>
                </tr>
                <tr>
                    <td>sub_menu2_batch:</td>
                    <td><strong>{{$sub_menu2_batch}}</strong></td>
                </tr>
                <tr>
                    <td>batch_description:</td>
                    <td><strong>{{$batch_description}}</strong></td>
                </tr>
                <tr>
                    <td>new_batch:</td>
                    <td><strong>{{$new_batch}}</strong></td>
                </tr>
                <tr>
                    <td>copy_batch:</td>
                    <td><strong>{{$copy_batch}}</strong></td>
                </tr>
                <tr>
                    <td>delete_batch:</td>
                    <td><strong>{{$delete_batch}}</strong></td>
                </tr>
                <tr>
                    <td>close_batch:</td>
                    <td><strong>{{$close_batch}}</strong></td>
                </tr>
                <tr>
                    <td>unlock_batch:</td>
                    <td><strong>{{$unlock_batch}}</strong></td>
                </tr>
                <tr>
                    <td>reopen_batch:</td>
                    <td><strong>{{$reopen_batch}}</strong></td>
                </tr>
                <tr>
                    <td>print_batch:</td>
                    <td><strong>{{$print_batch}}</strong></td>
                </tr>       
                <tr>
                    <td>auth_batch:</td>
                    <td><strong>{{$auth_batch}}</strong></td>
                </tr>       
                <tr>
                    <td>reverse_batch:</td>
                    <td><strong>{{$reverse_batch}}</strong></td>
                </tr>
                <tr>
                    <td>rollover_batch:</td>
                    <td><strong>{{$rollover_batch}}</strong></td>
                </tr> 
                <tr>
                    <td>confirm_batch:</td>
                    <td><strong>{{$confirm_batch}}</strong></td>
                </tr> 
                <tr>
                    <td>liquidate_batch:</td>
                    <td><strong>{{$liquidate_batch}}</strong></td>
                </tr> 
                <tr>
                    <td>hold_batch:</td>
                    <td><strong>{{$hold_batch}}</strong></td>
                </tr> 
                <tr>
                    <td>template_batch:</td>
                    <td><strong>{{$template_batch}}</strong></td>
                </tr> 
                <tr>
                    <td>view_batch:</td>
                    <td><strong>{{$view_batch}}</strong></td>
                </tr> 
                <tr>
                    <td>generate_batch:</td>
                    <td><strong>{{$generate_batch}}</strong></td>
                </tr>  --}}

                {{-- <h3> Online</h3> --}}
       
                {{-- <tr>
                    <td>role_id :</td>
                    <td><strong>{{$role_id }}</strong></td>
                </tr>
                <tr>
                    <td>role_function_online:</td>
                    <td><strong>{{$role_function_online}}</strong></td>
                </tr>
                <tr>
                    <td>main_menu_online:</td>
                    <td><strong>{{$main_menu_online}}</strong></td>
                </tr>
                <tr>
                    <td>sub_menu1_online:</td>
                    <td><strong>{{$sub_menu1_online}}</strong></td>
                </tr>
                <tr>
                    <td>sub_menu2_online:</td>
                    <td><strong>{{$sub_menu2_online}}</strong></td>
                </tr>
                <tr>
                    <td>online_description:</td>
                    <td><strong>{{$online_description}}</strong></td>
                </tr>
                <tr>
                    <td>new_online:</td>
                    <td><strong>{{$new_online}}</strong></td>
                </tr>
                <tr>
                    <td>copy_online:</td>
                    <td><strong>{{$copy_online}}</strong></td>
                </tr>
                <tr>
                    <td>delete_online:</td>
                    <td><strong>{{$delete_online}}</strong></td>
                </tr>
                <tr>
                    <td>close_online:</td>
                    <td><strong>{{$close_online}}</strong></td>
                </tr>
                <tr>
                    <td>unlock_online:</td>
                    <td><strong>{{$unlock_online}}</strong></td>
                </tr>
                <tr>
                    <td>reopen_online:</td>
                    <td><strong>{{$reopen_online}}</strong></td>
                </tr>
                <tr>
                    <td>print_online:</td>
                    <td><strong>{{$print_online}}</strong></td>
                </tr>       
                <tr>
                    <td>auth_online:</td>
                    <td><strong>{{$auth_online}}</strong></td>
                </tr>       
                <tr>
                    <td>reverse_online:</td>
                    <td><strong>{{$reverse_online}}</strong></td>
                </tr>
                <tr>
                    <td>rollover_online:</td>
                    <td><strong>{{$rollover_online}}</strong></td>
                </tr> 
                <tr>
                    <td>confirm_online:</td>
                    <td><strong>{{$confirm_online}}</strong></td>
                </tr> 
                <tr>
                    <td>liquidate_online:</td>
                    <td><strong>{{$liquidate_online}}</strong></td>
                </tr> 
                <tr>
                    <td>hold_online:</td>
                    <td><strong>{{$hold_online}}</strong></td>
                </tr> 
                <tr>
                    <td>template_online:</td>
                    <td><strong>{{$template_online}}</strong></td>
                </tr> 
                <tr>
                    <td>view_online:</td>
                    <td><strong>{{$view_online}}</strong></td>
                </tr>  --}}

                {{-- <h3> Branch Restriction</h3> --}}

                {{-- <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>branch_restriction:</td>
                    <td><strong>{{$branch_restriction}}</strong></td>
                </tr> 
                <tr>
                    <td>branch:</td>
                    <td><strong>{{$branch}}</strong></td>
                </tr> 
                <tr>
                    <td>branch_name:</td>
                    <td><strong>{{$branch_name}}</strong></td>
                </tr>  --}}

                {{-- <h3> Account Restriction</h3> --}}

                {{-- <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>acc_class_restriction:</td>
                    <td><strong>{{$acc_class_restriction}}</strong></td>
                </tr> 
                <tr>
                    <td>acc_class:</td>
                    <td><strong>{{$acc_class}}</strong></td>
                </tr> 
                <tr>
                    <td>acc_class_description:</td>
                    <td><strong>{{$acc_class_description}}</strong></td>
                </tr>  --}}

                {{-- <h3> Grant Rights</h3> --}}

                {{-- <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>cancel:</td>
                    <td><strong>{{$cancel}}</strong></td>
                </tr> 
                <tr>
                    <td>change_node:</td>
                    <td><strong>{{$change_node}}</strong></td>
                </tr> 
                <tr>
                    <td>release:</td>
                    <td><strong>{{$release}}</strong></td>
                </tr> 
                <tr>
                    <td>change_media:</td>
                    <td><strong>{{$change_media}}</strong></td>
                </tr> 
                <tr>
                    <td>branch_move:</td>
                    <td><strong>{{$branch_move}}</strong></td>
                </tr> 
                <tr>
                    <td>hold_branch_rights:</td>
                    <td><strong>{{$hold_branch_rights}}</strong></td>
                </tr> 
                <tr>
                    <td>test_input:</td>
                    <td><strong>{{$test_input}}</strong></td>
                </tr> 
                <tr>
                    <td>change_address:</td>
                    <td><strong>{{$change_address}}</strong></td>
                </tr> 
                <tr>
                    <td>reinstate:</td>
                    <td><strong>{{$reinstate}}</strong></td>
                </tr>  --}}
                {{-- <tr>
                    <td>change_priority:</td>
                    <td><strong>{{$change_priority}}</strong></td>
                </tr> 
                <tr>
                    <td>auth_cancel:</td>
                    <td><strong>{{$auth_cancel}}</strong></td>
                </tr> 
                <tr>
                    <td>auth_change_node:</td>
                    <td><strong>{{$auth_change_node}}</strong></td>
                </tr> 
                <tr>
                    <td>release2:</td>
                    <td><strong>{{$release2}}</strong></td>
                </tr> 
                <tr>
                    <td>change_media2:</td>
                    <td><strong>{{$change_media2}}</strong></td>
                </tr> 
                <tr>
                    <td>auth_branch_move:</td>
                    <td><strong>{{$auth_branch_move}}</strong></td>
                </tr> 
                <tr>
                    <td>hold_branch_rights2:</td>
                    <td><strong>{{$hold_branch_rights2}}</strong></td>
                </tr> 
                <tr>
                    <td>auth_test_input:</td>
                    <td><strong>{{$auth_test_input}}</strong></td>
                </tr> 
                <tr>
                    <td>change_address2:</td>
                    <td><strong>{{$change_address2}}</strong></td>
                </tr> 
                <tr>
                    <td>auth_reinstate:</td>
                    <td><strong>{{$auth_reinstate}}</strong></td>
                </tr>  --}}
                {{-- <tr>
                    <td>change_priority2:</td>
                    <td><strong>{{$change_priority2}}</strong></td>
                </tr> 
                <tr>
                    <td>install:</td>
                    <td><strong>{{$install}}</strong></td>
                </tr> 
                <tr>
                    <td>test_check:</td>
                    <td><strong>{{$test_check}}</strong></td>
                </tr> 
                <tr>
                    <td>link_contract:</td>
                    <td><strong>{{$link_contract}}</strong></td>
                </tr> 
                <tr>
                    <td>change_branch_in:</td>
                    <td><strong>{{$change_branch_in}}</strong></td>
                </tr> 
                <tr>
                    <td>change_message:</td>
                    <td><strong>{{$change_message}}</strong></td>
                </tr> 
                <tr>
                    <td>change_force_release_fund:</td>
                    <td><strong>{{$change_force_release_fund}}</strong></td>
                </tr>  --}}
                {{-- <tr>
                    <td>suppress:</td>
                    <td><strong>{{$suppress}}</strong></td>
                </tr> 
                <tr>
                    <td>delete_branch_rights:</td>
                    <td><strong>{{$delete_branch_rights}}</strong></td>
                </tr> 
                <tr>
                    <td>print_branch_rights:</td>
                    <td><strong>{{$print_branch_rights}}</strong></td>
                </tr> 
                <tr>
                    <td>ft_upload:</td>
                    <td><strong>{{$ft_upload}}</strong></td>
                </tr> 
                <tr>
                    <td>move_to_queue:</td>
                    <td><strong>{{$move_to_queue}}</strong></td>
                </tr> 
                <tr>
                    <td>change_address_in:</td>
                    <td><strong>{{$change_address_in}}</strong></td>
                </tr> 
                <tr>
                    <td>auth_change_message:</td>
                    <td><strong>{{$auth_change_message}}</strong></td>
                </tr> 
                <tr>
                    <td>auth_rights:</td>
                    <td><strong>{{$auth_rights}}</strong></td>
                </tr> 
                <tr>
                    <td>ft_upload:</td>
                    <td><strong>{{$change_force_cover_match}}</strong></td>
                </tr>  --}}

                {{-- <h3> Queue Rights</h3> --}}
{{-- 
                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>queue_rights:</td>
                    <td><strong>{{$queue_rights}}</strong></td>
                </tr> 

                <h3> Queue Rights</h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>password_restriction:</td>
                    <td><strong>{{$password_restriction}}</strong></td>
                </tr>  --}}

                {{-- <h3> Branch Limit</h3> --}}

                {{-- <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>authorizer_role:</td>
                    <td><strong>{{$authorizer_role}}</strong></td>
                </tr> 
                <tr>
                    <td>limit_currency:</td>
                    <td><strong>{{$limit_currency}}</strong></td>
                </tr> 
                <tr>
                    <td>user_limit:</td>
                    <td><strong>{{$user_limit}}</strong></td>
                </tr> 

                <h3> Process Stage Rights</h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>role_function_Process_stage:</td>
                    <td><strong>{{$role_function_Process_stage}}</strong></td>
                </tr> 
                <tr>
                    <td>main_menu_Process_stage:</td>
                    <td><strong>{{$main_menu_Process_stage}}</strong></td>
                </tr> 
                <tr>
                    <td>sub_menu1_Process_stage:</td>
                    <td><strong>{{$sub_menu1_Process_stage}}</strong></td>
                </tr> 
                <tr>
                    <td>sub_menu2_Process_stage:</td>
                    <td><strong>{{$sub_menu2_Process_stage}}</strong></td>
                </tr> 
                <tr>
                    <td>Process_stage_description:</td>
                    <td><strong>{{$Process_stage_description}}</strong></td>
                </tr> 
                <tr>
                    <td>editable:</td>
                    <td><strong>{{$editable}}</strong></td>
                </tr>  --}}

                {{-- <h3> Web Branch </h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>role_function_web_branch:</td>
                    <td><strong>{{$role_function_web_branch}}</strong></td>
                </tr> 
                <tr>
                    <td>main_menu_web_branch:</td>
                    <td><strong>{{$main_menu_web_branch}}</strong></td>
                </tr> 
                <tr>
                    <td>sub_menu1_web_branch:</td>
                    <td><strong>{{$sub_menu1_web_branch}}</strong></td>
                </tr> 
                <tr>
                    <td>sub_menu2_web_branch:</td>
                    <td><strong>{{$sub_menu2_web_branch}}</strong></td>
                </tr> 
                <tr>
                    <td>web_branch_description:</td>
                    <td><strong>{{$web_branch_description}}</strong></td>
                </tr>  --}}

                {{-- <h3> Product Posting Allowed </h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>product_allowed:</td>
                    <td><strong>{{$product_allowed}}</strong></td>
                </tr> 
                <tr>
                    <td>product_code_posting:</td>
                    <td><strong>{{$product_code_posting}}</strong></td>
                </tr> 
                <tr>
                    <td>product_desc_posting:</td>
                    <td><strong>{{$product_desc_posting}}</strong></td>
                </tr>  --}}
          
                {{-- <h3> Product Access Allowed </h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>product_access:</td>
                    <td><strong>{{$product_access}}</strong></td>
                </tr> 
                <tr>
                    <td>product_code_access:</td>
                    <td><strong>{{$product_code_access}}</strong></td>
                </tr> 
                <tr>
                    <td>product_desc_access:</td>
                    <td><strong>{{$product_desc_access}}</strong></td>
                </tr> 

                <h3> Group Restriction </h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>group_code_allowed:</td>
                    <td><strong>{{$group_code_allowed}}</strong></td>
                </tr> 
                <tr>
                    <td>group_code:</td>
                    <td><strong>{{$group_code}}</strong></td>
                </tr> 
                <tr>
                    <td>group_descripion:</td>
                    <td><strong>{{$group_descripion}}</strong></td>
                </tr>  --}}

                {{-- <h3> GL Restriction / Node GL's </h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>gl_allowed_node:</td>
                    <td><strong>{{$gl_allowed_node}}</strong></td>
                </tr> 
                <tr>
                    <td>node_gl_node:</td>
                    <td><strong>{{$node_gl_node}}</strong></td>
                </tr> 
                <tr>
                    <td>node_gl_descripion_en_node:</td>
                    <td><strong>{{$node_gl_descripion_en_node}}</strong></td>
                </tr> 
                <tr>
                    <td>node_gl_descripion_ar_node:</td>
                    <td><strong>{{$node_gl_descripion_ar_node}}</strong></td>
                </tr>  --}}

                
                {{-- <h3> GL Restriction / Exceptional Leaf GL's </h3>

                <tr>
                    <td>role_id:</td>
                    <td><strong>{{$role_id}}</strong></td>
                </tr> 
                <tr>
                    <td>gl_allowed_exceptional:</td>
                    <td><strong>{{$gl_allowed_exceptional}}</strong></td>
                </tr> 
                <tr>
                    <td>node_gl_exceptional:</td>
                    <td><strong>{{$node_gl_exceptional}}</strong></td>
                </tr> 
                <tr>
                    <td>node_gl_descripion_en_exceptional:</td>
                    <td><strong>{{$node_gl_descripion_en_exceptional}}</strong></td>
                </tr> 
                <tr>
                    <td>node_gl_descripion_ar_exceptional:</td>
                    <td><strong>{{$node_gl_descripion_ar_exceptional}}</strong></td>
                </tr> 
                <tr>
                    <td>exceptional_leaf_gl:</td>
                    <td><strong>{{$exceptional_leaf_gl}}</strong></td>
                </tr> 
                <tr>
                    <td>leaf_gl_description_en_exceptional:</td>
                    <td><strong>{{$leaf_gl_description_en_exceptional}}</strong></td>
                </tr> 
                <tr>
                    <td>leaf_gl_description_ar_exceptional:</td>
                    <td><strong>{{$leaf_gl_description_ar_exceptional}}</strong></td>
                </tr>  --}}
            
            


            </table>

            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
        </div>
    </div>








</div>

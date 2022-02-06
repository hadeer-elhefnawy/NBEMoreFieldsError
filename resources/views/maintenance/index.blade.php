<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">

    <link rel="stylesheet" href="css/style.css?v=2">
    <script src="js/jquery-3.6.0.js"></script>


   
</head>
<body>
<div class="container my-5">
    {{-- Maintenance --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Maintenance</h1>
            <a class="float-end mb-2 btn btn-warning" href="{{ url('export') }}">Export Maintenance</a>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Role Function</th>  
                <th >Main Menu</th>  
                <th >Sub Menu 1</th>  
                <th >Sub Menu 2</th>  
                <th >Description</th> 
                <th >New</th> 
                <th >Copy</th> 
                <th >Delete</th> 
                <th >Close</th> 
                <th >Unlock</th> 
                <th >Reopen</th> 
                <th >Print</th> 
                <th >Auth</th> 
                <th >Reverse</th> 
                <th >Rollover</th> 
                <th >Confirm</th> 
                <th >Liquidate</th> 
                <th >Hold</th> 
                <th >Template</th> 
                <th >View</th> 
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($maintenances as $maintenance)
            <tr>
                <td>{{$maintenance->id }}</td>
                <td>{{$maintenance->role_id }}</td>
                <td>{{$maintenance->role_function}}</td>
                <td>{{$maintenance->main_menu}}</td>
                <td>{{$maintenance->sub_menu1}}</td>
                <td>{{$maintenance->sub_menu2}}</td>
                <td>{{$maintenance->maint_description}}</td>
                <td>{{$maintenance->new}}</td>
                <td>{{$maintenance->copy}}</td>
                <td>{{$maintenance->delete}}</td>
                <td>{{$maintenance->close}}</td>
                <td>{{$maintenance->unlock}}</td>
                <td>{{$maintenance->reopen}}</td>
                <td>{{$maintenance->print}}</td>
                <td>{{$maintenance->auth}}</td>
                <td>{{$maintenance->reverse}}</td>
                <td>{{$maintenance->rollover}}</td>
                <td>{{$maintenance->confirm}}</td>
                <td>{{$maintenance->liquidate}}</td>
                <td>{{$maintenance->hold}}</td>
                <td>{{$maintenance->template}}</td>
                <td>{{$maintenance->view}}</td>

                <form action="{{ route('Maintenance.destroy',$maintenance->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="Maintenance/{{$maintenance->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Reports --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">reports</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >id</th>  
                <th >Role ID</th>  
                <th >Role Function</th>  
                <th >Main Menu</th>  
                <th >Sub Menu 1</th>  
                <th >Sub Menu 2</th>  
                <th >Description</th>  
                <th >print</th> 
                <th >Generate</th> 
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($reports as $report)
            <tr>
                <td>{{$report->id }}</td>
                <td>{{$report->role_id }}</td>
                <td>{{$report->role_function_report}}</td>
                <td>{{$report->main_menu_report}}</td>
                <td>{{$report->sub_menu1_report}}</td>
                <td>{{$report->sub_menu2_report}}</td>
                <td>{{$report->report_description}}</td>
                <td>{{$report->print_report}}</td>
                <td>{{$report->generate_report}}</td>
               
                <form action="{{ route('Reports.destroy',$report->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="Reports/{{$report->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div>  

    {{-- Batch --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Batch</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Role Function</th>  
                <th >Main Menu</th>  
                <th >Sub Menu 1</th>  
                <th >Sub Menu 2</th>  
                <th >Description</th> 
                <th >New</th> 
                <th >Copy</th> 
                <th >Delete</th> 
                <th >Close</th> 
                <th >Unlock</th> 
                <th >Reopen</th> 
                <th >Print</th> 
                <th >Auth</th> 
                <th >Reverse</th> 
                <th >Rollover</th> 
                <th >Confirm</th> 
                <th >Liquidate</th> 
                <th >Hold</th> 
                <th >Template</th> 
                <th >View</th> 
                <th >Generate</th> 
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($batchs as $batch)
            <tr>
                <td>{{$batch->id }}</td>
                <td>{{$batch->role_id }}</td>
                <td>{{$batch->role_function_batch}}</td>
                <td>{{$batch->main_menu_batch}}</td>
                <td>{{$batch->sub_menu1_batch}}</td>
                <td>{{$batch->sub_menu2_batch}}</td>
                <td>{{$batch->batch_description}}</td>
                <td>{{$batch->new_batch}}</td>
                <td>{{$batch->copy_batch}}</td>
                <td>{{$batch->delete_batch}}</td>
                <td>{{$batch->close_batch}}</td>
                <td>{{$batch->unlock_batch}}</td>
                <td>{{$batch->reopen_batch}}</td>
                <td>{{$batch->print_batch}}</td>
                <td>{{$batch->auth_batch}}</td>
                <td>{{$batch->reverse_batch}}</td>
                <td>{{$batch->rollover_batch}}</td>
                <td>{{$batch->confirm_batch}}</td>
                <td>{{$batch->liquidate_batch}}</td>
                <td>{{$batch->hold_batch}}</td>
                <td>{{$batch->template_batch}}</td>
                <td>{{$batch->view_batch}}</td>
                <td>{{$batch->generate_batch}}</td>


                <form action="{{ route('Batch.destroy',$batch->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="Batch/{{$batch->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Online --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Online</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Role Function</th>  
                <th >Main Menu</th>  
                <th >Sub Menu 1</th>  
                <th >Sub Menu 2</th>  
                <th >Description</th> 
                <th >New</th> 
                <th >Copy</th> 
                <th >Delete</th> 
                <th >Close</th> 
                <th >Unlock</th> 
                <th >Reopen</th> 
                <th >Print</th> 
                <th >Auth</th> 
                <th >Reverse</th> 
                <th >Rollover</th> 
                <th >Confirm</th> 
                <th >Liquidate</th> 
                <th >Hold</th> 
                <th >Template</th> 
                <th >View</th> 
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($onlines as $online)
            <tr>
                <td>{{$online->id }}</td>
                <td>{{$online->role_id }}</td>
                <td>{{$online->role_function_online}}</td>
                <td>{{$online->main_menu_online}}</td>
                <td>{{$online->sub_menu1_online}}</td>
                <td>{{$online->sub_menu2_online}}</td>
                <td>{{$online->online_description}}</td>
                <td>{{$online->new_online}}</td>
                <td>{{$online->copy_online}}</td>
                <td>{{$online->delete_online}}</td>
                <td>{{$online->close_online}}</td>
                <td>{{$online->unlock_online}}</td>
                <td>{{$online->reopen_online}}</td>
                <td>{{$online->print_online}}</td>
                <td>{{$online->auth_online}}</td>
                <td>{{$online->reverse_online}}</td>
                <td>{{$online->rollover_online}}</td>
                <td>{{$online->confirm_online}}</td>
                <td>{{$online->liquidate_online}}</td>
                <td>{{$online->hold_online}}</td>
                <td>{{$online->template_online}}</td>
                <td>{{$online->view_online}}</td>
                <td>{{$online->generate_online}}</td>


                <form action="{{ route('Online.destroy',$online->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="Online/{{$online->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Branch Restriction --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Branch Restriction</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Branch Restriction</th>  
                <th >Branch</th>  
                <th >Branch Name</th>  
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($branchRestriction as $branch)
            <tr>
                <td>{{$branch->id }}</td>
                <td>{{$branch->role_id }}</td>
                <td>{{$branch->branch_restriction}}</td>
                <td>{{$branch->branch}}</td>
                <td>{{$branch->branch_name}}</td>

                <form action="{{ route('BranchRestriction.destroy',$branch->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="BranchRestriction/{{$branch->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Acc Class Restriction --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Account Class Restriction</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Account Class Restriction</th>  
                <th >Account Class</th>  
                <th >Description</th>  
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($accClassRestriction as $AccClass)
            <tr>
                <td>{{$AccClass->id }}</td>
                <td>{{$AccClass->role_id }}</td>
                <td>{{$AccClass->acc_class_restriction}}</td>
                <td>{{$AccClass->acc_class}}</td>
                <td>{{$AccClass->acc_class_description}}</td>

                <form action="{{ route('AccClassRestriction.destroy',$AccClass->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="AccClassRestriction/{{$AccClass->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Grant Rights --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Grant Rights</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Cancel</th>  
                <th >Change Node</th>  
                <th >Release</th>
                <th >Change Media</th>
                <th >Branch Move</th>
                <th >Hold</th>
                <th >Test Input</th>
                <th >Change Address</th>
                <th >Reinstate</th>
                <th >Change Priority</th>
                <th >Auth Cancel</th>
                <th >Auth Change Node</th>
                <th >Release</th>
                <th >Change Media</th>
                <th >Auth Branch Move</th>
                <th >Hold</th>
                <th >Auth Test Input</th>
                <th >Change Address</th>
                <th >Auth Reinstate</th>
                <th >Change Priority</th>
                <th >install</th>
                <th >Test Check</th>
                <th >Link Contract</th>
                <th >Change Branch In</th>
                <th >Change Message</th>
                <th >Change Force Release</th>
                <th >Suppress</th>
                <th >Delete</th>
                <th >print</th>
                <th >FT Upload</th>
                <th >Move To Queue</th>
                <th >Change Address In</th>
                <th >Auth Change Message</th>
                <th >Auth Rights</th>
                <th >Change Force Cover Match</th>
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($grantRights as $grant)
            <tr>
                <td>{{$grant->id }}</td>
                <td>{{$grant->role_id }}</td>
                <td>{{$grant->cancel}}</td>
                <td>{{$grant->change_node}}</td>
                <td>{{$grant->release}}</td>
                <td>{{$grant->change_media}}</td>
                <td>{{$grant->branch_move}}</td>
                <td>{{$grant->hold_branch_rights}}</td>
                <td>{{$grant->test_input}}</td>
                <td>{{$grant->change_address}}</td>
                <td>{{$grant->reinstate}}</td>
                <td>{{$grant->change_priority}}</td>
                <td>{{$grant->auth_cancel}}</td>
                <td>{{$grant->auth_change_node}}</td>
                <td>{{$grant->release2}}</td>
                <td>{{$grant->change_media2}}</td>
                <td>{{$grant->auth_branch_move}}</td>
                <td>{{$grant->hold_branch_rights2}}</td>
                <td>{{$grant->auth_test_input}}</td>
                <td>{{$grant->change_address2}}</td>
                <td>{{$grant->auth_reinstate}}</td>
                <td>{{$grant->change_priority2}}</td>
                <td>{{$grant->install}}</td>
                <td>{{$grant->test_check}}</td>
                <td>{{$grant->link_contract}}</td>
                <td>{{$grant->change_branch_in}}</td>
                <td>{{$grant->change_message}}</td>
                <td>{{$grant->change_force_release_fund}}</td>
                <td>{{$grant->suppress}}</td>
                <td>{{$grant->delete_branch_rights}}</td>
                <td>{{$grant->print_branch_rights}}</td>
                <td>{{$grant->ft_upload}}</td>
                <td>{{$grant->move_to_queue}}</td>
                <td>{{$grant->change_address_in}}</td>
                <td>{{$grant->auth_change_message}}</td>
                <td>{{$grant->auth_rights}}</td>
                <td>{{$grant->change_force_cover_match}}</td>
           
                <form action="{{ route('GrantRights.destroy',$grant->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="GrantRights/{{$grant->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Queue Rights --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Queue Rights</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Queue</th>   
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($queueRights as $queue)
            <tr>
                <td>{{$queue->id }}</td>
                <td>{{$queue->role_id }}</td>
                <td>{{$queue->queue_rights}}</td>

                <form action="{{ route('QueueRights.destroy',$queue->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="QueueRights/{{$queue->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Password Restriction --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Password Restriction</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Password</th>   
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($passwordRestriction as $PassRes)
            <tr>
                <td>{{$PassRes->id }}</td>
                <td>{{$PassRes->role_id }}</td>
                <td>{{$PassRes->password_restriction}}</td>

                <form action="{{ route('PasswordRestriction.destroy',$PassRes->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="PasswordRestriction/{{$PassRes->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Branch Limit --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Branch Limit</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Authorizer Role</th>  
                <th >Limit Currency</th>   
                <th >User Limit</th>   
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($branchLimits as $branchLimit)
            <tr>
                <td>{{$branchLimit->id }}</td>
                <td>{{$branchLimit->role_id }}</td>
                <td>{{$branchLimit->authorizer_role}}</td>
                <td>{{$branchLimit->limit_currency}}</td>
                <td>{{$branchLimit->user_limit}}</td>

                <form action="{{ route('BranchLimit.destroy',$branchLimit->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="BranchLimit/{{$branchLimit->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Process Stage Rights --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Process Stage Rights</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID Name</th>  
                <th >Role Function</th>  
                <th >Main Menu</th>   
                <th >Sub Menu 1</th>   
                <th >Sub Menu 2</th>   
                <th >Description</th>  
                <th >Editable</th>  
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($processStageRights as $processRights)
            <tr>
                <td>{{$processRights->id }}</td>
                <td>{{$processRights->role_id }}</td>
                <td>{{$processRights->role_function_Process_stage}}</td>
                <td>{{$processRights->main_menu_Process_stage}}</td>
                <td>{{$processRights->sub_menu1_Process_stage}}</td>
                <td>{{$processRights->sub_menu2_Process_stage}}</td>
                <td>{{$processRights->Process_stage_description}}</td>
                <td>{{$processRights->editable}}</td>

                <form action="{{ route('ProcessStageRights.destroy',$processRights->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="ProcessStageRights/{{$processRights->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Web Branch --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Web Branch</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Role Function</th>  
                <th >Main Menu</th>   
                <th >Sub Menu 1</th>   
                <th >Sub Menu 2</th>   
                <th >Description</th>   
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  
    
            @foreach($webBranchs as $webBranch)
            <tr>
                <td>{{$webBranch->id }}</td>
                <td>{{$webBranch->role_id }}</td>
                <td>{{$webBranch->role_function_web_branch}}</td>
                <td>{{$webBranch->main_menu_web_branch}}</td>
                <td>{{$webBranch->sub_menu1_web_branch}}</td>
                <td>{{$webBranch->sub_menu2_web_branch}}</td>
                <td>{{$webBranch->web_branch_description}}</td>

                <form action="{{ route('WebBranch.destroy',$webBranch->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="WebBranch/{{$webBranch->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

   {{-- Product Posting Allowed --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Product Posting Allowed</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Product Allowed</th>  
                <th >Product Code</th>   
                <th >Product Description</th>     
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  

            @foreach($productPostingAllowed as $productPosting)
            <tr>
                <td>{{$productPosting->id }}</td>
                <td>{{$productPosting->role_id }}</td>
                <td>{{$productPosting->product_allowed}}</td>
                <td>{{$productPosting->product_code_posting}}</td>
                <td>{{$productPosting->product_desc_posting}}</td>

                <form action="{{ route('ProductPostingAllowed.destroy',$productPosting->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="ProductPostingAllowed/{{$productPosting->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Product Access Allowed --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Product Access Allowed</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Product Allowed</th>  
                <th >Product Code</th>   
                <th >Product Description</th>     
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  

            @foreach($productAccessAllowed as $productAccess)
            <tr>
                <td>{{$productAccess->id }}</td>
                <td>{{$productAccess->role_id }}</td>
                <td>{{$productAccess->product_access}}</td>
                <td>{{$productAccess->product_code_access}}</td>
                <td>{{$productAccess->product_desc_access}}</td>

                <form action="{{ route('ProductPostingAllowed.destroy',$productAccess->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="ProductPostingAllowed/{{$productAccess->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

   {{-- Group Restriction --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Group Restriction</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Group Code Allowed</th>  
                <th >Group Code</th>   
                <th >Group Description</th>     
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  

            @foreach($groupRestriction as $groupRest)
            <tr>
                <td>{{$groupRest->id }}</td>
                <td>{{$groupRest->role_id }}</td>
                <td>{{$groupRest->group_code_allowed}}</td>
                <td>{{$groupRest->group_code}}</td>
                <td>{{$groupRest->group_descripion}}</td>

                <form action="{{ route('GroupRestriction.destroy',$groupRest->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="GroupRestriction/{{$groupRest->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Gl Restriction/Node GL's --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Gl Restriction/Node GL's</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >GL Allowed</th>  
                <th >Node GL</th>   
                <th >Node GL Description -EN</th>  
                <th >Node GL Description -AR</th>     
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  

            @foreach($nodeGls as $nodeGl)
            <tr>
                <td>{{$nodeGl->id }}</td>
                <td>{{$nodeGl->role_id }}</td>
                <td>{{$nodeGl->gl_allowed_node}}</td>
                <td>{{$nodeGl->node_gl_node}}</td>
                <td>{{$nodeGl->node_gl_descripion_en_node}}</td>
                <td>{{$nodeGl->node_gl_descripion_ar_node}}</td>


                <form action="{{ route('NodeGl.destroy',$nodeGl->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="NodeGl/{{$nodeGl->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 

    {{-- Gl Restriction/Exceptional Leaf GL's --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Gl Restriction/Exceptional Leaf GL's</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >GL Allowed</th>  
                <th >Node GL</th>   
                <th >Node GL Description -EN</th>  
                <th >Node GL Description -AR</th>   
                <th >Exceptional Leaf GL</th> 
                <th >Leaf GL Description -EN</th> 
                <th >Leaf GL Description -AR</th>   

                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  

            @foreach($exceptionalLeafGl as $exceptLeaf)
            <tr>
                <td>{{$exceptLeaf->id }}</td>
                <td>{{$exceptLeaf->role_id }}</td>
                <td>{{$exceptLeaf->gl_allowed_exceptional}}</td>
                <td>{{$exceptLeaf->node_gl_exceptional}}</td>
                <td>{{$exceptLeaf->node_gl_descripion_en_exceptional}}</td>
                <td>{{$exceptLeaf->node_gl_descripion_ar_exceptional}}</td>
                <td>{{$exceptLeaf->exceptional_leaf_gl}}</td>
                <td>{{$exceptLeaf->leaf_gl_description_en_exceptional}}</td>
                <td>{{$exceptLeaf->leaf_gl_description_ar_exceptional}}</td>

                <form action="{{ route('ExceptionalLeafGl.destroy',$exceptLeaf->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="ExceptionalLeafGl/{{$exceptLeaf->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 



   






</div>



<script src="js/main.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
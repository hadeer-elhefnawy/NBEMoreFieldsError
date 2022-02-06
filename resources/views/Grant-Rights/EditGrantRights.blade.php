<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Grant Rights</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">
    <link rel="stylesheet" href="css/style.css?v=2">
    <script src="js/jquery-3.6.0.js"></script>


   
</head>
<body>
    
<div class="container mt-2">

    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('GrantRights.update',$grantRights->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="batch pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Grant Rights</h1>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="RoleId7" class="form-label">Role ID</label>
                        <input type="text" disabled name="role_id" class="form-control" id="RoleId7" placeholder="Role ID">
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="Cancel" class="form-label">Cancel</label>
                        <select class="form-select" name="cancel" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ChangeNode" class="form-label">Change Node</label>
                        <select class="form-select" name="change_node" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="Release" class="form-label">Release</label>
                        <select class="form-select" name="release" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="changeMedia" class="form-label">Change Media</label>
                        <select class="form-select" name="change_media" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="BranchMove" class="form-label">Branch Move</label>
                        <select class="form-select" name="branch_move" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="HoldBranchRights" class="form-label">Hold</label>
                        <select class="form-select" name="hold_branch_rights" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="TestInput" class="form-label">Test Input</label>
                        <select class="form-select" name="test_input" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ChangeAddress" class="form-label">Change Address</label>
                        <select class="form-select" name="change_address" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="reinstate" class="form-label">Reinstate</label>
                        <select class="form-select" name="reinstate" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ChangePriority" class="form-label">Change Priority</label>
                        <select class="form-select" name="change_priority" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="AuthCancel" class="form-label">Auth Cancel</label>
                        <select class="form-select" name="auth_cancel" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="AuthChangeNode" class="form-label">Auth Change Node</label>
                        <select class="form-select" name="auth_change_node" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="Release2" class="form-label">Release</label>
                        <select class="form-select" name="release2" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ChangeMedia2" class="form-label">Change Media</label>
                        <select class="form-select" name="change_media2" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="AuthBranchMove" class="form-label">Auth Branch Move</label>
                        <select class="form-select" name="auth_branch_move" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="HoldBranchRights2" class="form-label">Hold</label>
                        <select class="form-select" name="hold_branch_rights2" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="AuthTestInput" class="form-label">Auth Test Input</label>
                        <select class="form-select" name="auth_test_input" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ChangeAddress2" class="form-label">Change Address</label>
                        <select class="form-select" name="change_address2" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
             
                    <div class="col-md-6 mb-3">
                        <label for="AuthReinstate" class="form-label">Auth Reinstate</label>
                        <select class="form-select" name="auth_reinstate" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ChangePriority2" class="form-label">Change Priority</label>
                        <select class="form-select" name="change_priority2" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
             
                    <div class="col-md-6 mb-3">
                        <label for="Install" class="form-label">Install</label>
                        <select class="form-select" name="install" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
             
                    <div class="col-md-6 mb-3">
                        <label for="TestCheck" class="form-label">Test Check</label>
                        <select class="form-select" name="test_check" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="LinkContract" class="form-label">Link Contract</label>
                        <select class="form-select" name="link_contract" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ChangeBranchIn" class="form-label">Change Branch In</label>
                        <select class="form-select" name="change_branch_in" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ChangeMessage" class="form-label">Change Message</label>
                        <select class="form-select" name="change_message" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ChangeForceReleaseFund" class="form-label">Change Force Release Fund</label>
                        <select class="form-select" name="change_force_release_fund" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="Suppress" class="form-label">Suppress</label>
                        <select class="form-select" name="suppress" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="DeleteBranchRights" class="form-label">Delete Branch Rights</label>
                        <select class="form-select" name="delete_branch_rights" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="PrintBranchRights" class="form-label">Print Branch Rights</label>
                        <select class="form-select" name="print_branch_rights" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="FtUpload" class="form-label">Ft Upload</label>
                        <select class="form-select" name="ft_upload" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="MoveToQueue" class="form-label">Move To Queue</label>
                        <select class="form-select" name="move_to_queue" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ChangeAddressIn" class="form-label">Change Address In</label>
                        <select class="form-select" name="change_address_in" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="AuthChangeMessage" class="form-label">Auth Change Message</label>
                        <select class="form-select" name="auth_change_message" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="AuthRights" class="form-label">Auth Rights</label>
                        <select class="form-select" name="auth_rights" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ChangeForceCoverMatch" class="form-label">Change Force Cover Match</label>
                        <select class="form-select" name="change_force_cover_match" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
               
           
                    <div class="col-12 text-center my-4">
                        <a href="{{ route('Maintenance.index') }}" class="btn btn-danger nextBtn pull-right">Back</a>
                        <button class="btn btn-primary mx-3" type="submit" >Next</button>
                    </div>
                        {{-- <div class="col-md-12 text-end mb-3">
                            <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Maintenance</a>
                        </div> --}}
                </div>
            </div>
        </section>
    </form>
</div>

</body>
</html>
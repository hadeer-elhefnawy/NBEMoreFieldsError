<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Batch</title>
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
    <form action="{{ route('Batch.update',$batch->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="batch pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Queue</h1>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="RoleId4" class="form-label">Role ID</label>
                        <input type="text" disabled name="role_id" value="{{$batch->role_id}}" class="form-control" id="RoleId4" placeholder="Role ID">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="RoleFuncBatch" class="form-label">Role Function</label>
                        <input type="text" name="role_function_batch" value="{{$batch->role_function_batch}}" class="form-control" id="RoleFuncBatch" placeholder="Role Function">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="MainMenuBatch" class="form-label">Main Menu</label>
                        <input type="text" name="main_menu_batch" value="{{$batch->main_menu_batch}}" class="form-control" id="MainMenuBatch" placeholder="Main Menu">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu1Batch" class="form-label">Sub Menu 1</label>
                        <input type="text" name="sub_menu1_batch" value="{{$batch->sub_menu1_batch}}" class="form-control" id="SubMenu1batch" placeholder="Sub Menu 1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu2Batch" class="form-label">Sub Menu 2</label>
                        <input type="text" name="sub_menu2_batch" value="{{$batch->sub_menu2_batch}}" class="form-control" id="SubMenu2Batch" placeholder="Sub Menu 2">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="BatchDesc" class="form-label">Description</label>
                        <textarea class="form-control" name="batch_description" id="BatchDesc" rows="3">{{$batch->batch_description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="NewBatch" class="form-label">New</label>
                        <select class="form-select" name="new_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="CopyBatch" class="form-label">Copy</label>
                        <select class="form-select" name="copy_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="DeleteBatch" class="form-label">Delete</label>
                        <select class="form-select" name="delete_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="CloseBatch" class="form-label">Close</label>
                        <select class="form-select" name="close_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="UnlockBatch" class="form-label">Unlock</label>
                        <select class="form-select" name="unlock_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ReopenBatch" class="form-label">Reopen</label>
                        <select class="form-select" name="reopen_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="PrintBatch" class="form-label">Print</label>
                        <select class="form-select" name="print_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="AuthBatch" class="form-label">Auth</label>
                        <select class="form-select" name="auth_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ReverseBatch" class="form-label">Reverse</label>
                        <select class="form-select" name="reverse_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>             
                    <div class="col-md-6 mb-3">
                        <label for="rolloverBatch" class="form-label">RollOver</label>
                        <select class="form-select" name="rollover_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ConfirmBatch" class="form-label">Confirm</label>
                        <select class="form-select" name="confirm_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="LiquidateBatch" class="form-label">Liquidate</label>
                        <select class="form-select" name="liquidate_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>          
                    <div class="col-md-6 mb-3">
                        <label for="HoldBatch" class="form-label">Hold</label>
                        <select class="form-select" name="hold_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="TemplateBatch" class="form-label">Template</label>
                        <select class="form-select" name="template_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ViewBatch" class="form-label">View</label>
                        <select class="form-select" name="view_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="GenerateBatch" class="form-label">Generate</label>
                        <select class="form-select" name="generate_batch" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Online</title>
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
    <form action="{{ route('Online.update',$online->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="batch pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Online</h1>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="RoleId5" class="form-label">Role ID</label>
                        <input type="text" disabled name="role_id" value="{{$online->role_id}}" class="form-control" id="RoleId5" placeholder="Role ID">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="RoleFuncOnline" class="form-label">Role Function</label>
                        <input type="text" name="role_function_online" value="{{$online->role_function_online}}" class="form-control" id="RoleFuncBatch" placeholder="Role Function">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="MainMenuOnline" class="form-label">Main Menu</label>
                        <input type="text" name="main_menu_online" value="{{$online->main_menu_online}}" class="form-control" id="MainMenuBatch" placeholder="Main Menu">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu1Online" class="form-label">Sub Menu 1</label>
                        <input type="text" name="sub_menu1_online" value="{{$online->sub_menu1_online}}" class="form-control" id="SubMenu1batch" placeholder="Sub Menu 1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu2Online" class="form-label">Sub Menu 2</label>
                        <input type="text" name="sub_menu2_online" value="{{$online->sub_menu2_online}}" class="form-control" id="SubMenu2Batch" placeholder="Sub Menu 2">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="OnlineDesc" class="form-label">Description</label>
                        <textarea class="form-control" name="online_description" id="MantBatch" rows="3">{{$online->online_description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="NewOnline" class="form-label">New</label>
                        <select class="form-select" name="new_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="CopyOnline" class="form-label">Copy</label>
                        <select class="form-select" name="copy_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="DeleteOnline" class="form-label">Delete</label>
                        <select class="form-select" name="delete_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="CloseOnline" class="form-label">Close</label>
                        <select class="form-select" name="close_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="UnlockOnline" class="form-label">Unlock</label>
                        <select class="form-select" name="unlock_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ReopenOnline" class="form-label">Reopen</label>
                        <select class="form-select" name="reopen_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="PrintOnline" class="form-label">Print</label>
                        <select class="form-select" name="print_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="AuthOnline" class="form-label">Auth</label>
                        <select class="form-select" name="auth_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ReverseOnline" class="form-label">Reverse</label>
                        <select class="form-select" name="reverse_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>             
                    <div class="col-md-6 mb-3">
                        <label for="rolloverOnline" class="form-label">RollOver</label>
                        <select class="form-select" name="rollover_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ConfirmOnline" class="form-label">Confirm</label>
                        <select class="form-select" name="confirm_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="LiquidateOnline" class="form-label">Liquidate</label>
                        <select class="form-select" name="liquidate_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>          
                    <div class="col-md-6 mb-3">
                        <label for="HoldOnline" class="form-label">Hold</label>
                        <select class="form-select" name="hold_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="TemplateOnline" class="form-label">Template</label>
                        <select class="form-select" name="template_online" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ViewOnline" class="form-label">View</label>
                        <select class="form-select" name="view_online" aria-label="Default select example">
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
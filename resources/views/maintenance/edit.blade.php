<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Maintenance</title>
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

    <form action="{{ route('Maintenance.update',$maintenance->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="maintenance pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Maintenance</h1>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="RoleId2" class="form-label">Role ID</label>
                        <input type="text" name="role_id" value="{{$maintenance->role_id}}" class="form-control" id="RoleId2" placeholder="Role ID" disabled>
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="RoleFunc" class="form-label">Role Function</label>
                        <input type="text" name="role_function" value="{{$maintenance->role_function}}" class="form-control" id="RoleFunc" placeholder="Role Function">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="MainMenu" class="form-label">Main Menu</label>
                        <input type="text" name="main_menu" value="{{$maintenance->main_menu}}" class="form-control" id="MainMenu" placeholder="Main Menu">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu1" class="form-label">Sub Menu 1</label>
                        <input type="text" name="sub_menu1" value="{{$maintenance->sub_menu1}}" class="form-control" id="SubMenu1" placeholder="Sub Menu 1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu2" class="form-label">Sub Menu 2</label>
                        <input type="text" name="sub_menu2" value="{{$maintenance->sub_menu2}}" class="form-control" id="SubMenu2" placeholder="Sub Menu 2">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="MantDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="maint_description" id="MantDescription" rows="3">{{$maintenance->maint_description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="New" class="form-label">New</label>
                        <select class="form-select" name="new" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Copy" class="form-label">Copy</label>
                        <select class="form-select" name="copy" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Delete" class="form-label">Delete</label>
                        <select class="form-select" name="delete" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Close" class="form-label">Close</label>
                        <select class="form-select" name="close" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Unlock" class="form-label">Unlock</label>
                        <select class="form-select" name="unlock" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Reopen" class="form-label">Reopen</label>
                        <select class="form-select" name="reopen" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Print" class="form-label">Print</label>
                        <select class="form-select" name="print" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Auth" class="form-label">Auth</label>
                        <select class="form-select" name="auth" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Reverse" class="form-label">Reverse</label>
                        <select class="form-select" name="reverse" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>             
                    <div class="col-md-6 mb-3">
                        <label for="rollover" class="form-label">RollOver</label>
                        <select class="form-select" name="rollover" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Confirm" class="form-label">Confirm</label>
                        <select class="form-select" name="confirm" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Liquidate" class="form-label">Liquidate</label>
                        <select class="form-select" name="liquidate" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>          
                    <div class="col-md-6 mb-3">
                        <label for="Hold" class="form-label">Hold</label>
                        <select class="form-select" name="hold" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Template" class="form-label">Template</label>
                        <select class="form-select" name="template" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="View" class="form-label">View</label>
                        <select class="form-select" name="view" aria-label="Default select example">
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
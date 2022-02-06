<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Process Stage Rights</title>
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
    <form action="{{ route('ProcessStageRights.update',$processStageRights->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="maintenance pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Process Stage Rights</h1>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="RoleId11" class="form-label">Role ID</label>
                        <input type="text" disabled name="role_id" value="{{$processStageRights->role_id}}" class="form-control" id="RoleId11" placeholder="Role ID">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="RoleFuncProcessStage" class="form-label">Role Function</label>
                        <input type="text" name="role_function_Process_stage" value="{{$processStageRights->role_function_Process_stage}}" class="form-control" id="RoleFuncProcessStage" placeholder="Role Function">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="MainMenuProcesStage" class="form-label">Main Menu</label>
                        <input type="text" name="main_menu_Process_stage" value="{{$processStageRights->main_menu_Process_stage}}" class="form-control" id="MainMenuProcesStage" placeholder="Main Menu">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu1ProcessStage" class="form-label">Sub Menu 1</label>
                        <input type="text" name="sub_menu1_Process_stage" value="{{$processStageRights->sub_menu1_Process_stage}}" class="form-control" id="SubMenu1ProcessStage" placeholder="Sub Menu 1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu2ProcessStage" class="form-label">Sub Menu 2</label>
                        <input type="text" name="sub_menu2_Process_stage" value="{{$processStageRights->sub_menu2_Process_stage}}" class="form-control" id="SubMenu2ProcessStage" placeholder="Sub Menu 2">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="ProcessStageDesc" class="form-label">Description</label>
                        <textarea class="form-control" name="Process_stage_description" id="ProcessStageDesc" rows="3">{{$processStageRights->Process_stage_description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Editable" class="form-label">Editable</label>
                        <select class="form-select" name="editable" aria-label="Default select example">
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
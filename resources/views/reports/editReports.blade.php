<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reports</title>
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

    <form action="{{ route('Reports.update',$reports->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="reports pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Reports</h1>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="RoleId3" class="form-label">Role ID</label>
                        <input type="text" wire:model="role_id" class="form-control" id="RoleId3" placeholder="Role ID" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="RoleFuncReport" class="form-label">Role Function</label>
                        <input type="text" name="role_function_report" value="{{$reports->role_function_report}}" class="form-control" id="RoleFuncReport" placeholder="Role Function">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="MainMenuReport" class="form-label">Main Menu</label>
                        <input type="text" name="main_menu_report" value="{{$reports->main_menu_report}}" class="form-control" id="MainMenuReport" placeholder="Main Menu">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu1Report" class="form-label">Sub Menu 1</label>
                        <input type="text" name="sub_menu1_report" value="{{$reports->sub_menu1_report}}" class="form-control" id="SubMenu1Report" placeholder="Sub Menu 1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="SubMenu2Report" class="form-label">Sub Menu 2</label>
                        <input type="text" name="sub_menu2_report" value="{{$reports->sub_menu2_report}}" class="form-control" id="SubMenu2Report" placeholder="Sub Menu 2">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="ReportDesc" class="form-label">Description</label>
                        <textarea class="form-control" name="report_description" id="ReportDesc" rows="3">{{$reports->report_description}}"</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="PrintReport" class="form-label">Print</label>
                        <select class="form-select" name="print_report" aria-label="Default select example">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="generateReport" class="form-label">Generate</label>
                        <select class="form-select" name="generate_report" aria-label="Default select example">
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
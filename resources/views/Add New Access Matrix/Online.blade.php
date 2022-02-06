<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Batch</title>

          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>
   
          <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

</head>

<body>

    <!-- START OF HEADER SECTION -->
    <section id="header pt-5 mt-5">
        <div class="container pt-5">
            <div class="row px-5">
                <div class="col-md-12 text-start mb-3">
                    <h1 class="text-start py-3">Online</h1>
                </div>
             
                <div class="col-md-6 mb-3">
                    <label for="RoleId" class="form-label">Role ID</label>
                    <input type="text" class="form-control" id="RoleId" placeholder="Role ID">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="RoleFunc" class="form-label">Role Function</label>
                    <input type="text" class="form-control" id="RoleFunc" placeholder="Role Function">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="MainMenu" class="form-label">Main Menu</label>
                    <input type="text" class="form-control" id="MainMenu" placeholder="Main Menu">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="SubMenu1" class="form-label">Sub Menu 1</label>
                    <input type="text" class="form-control" id="SubMenu1" placeholder="Sub Menu 1">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="SubMenu2" class="form-label">Sub Menu 2</label>
                    <input type="text" class="form-control" id="SubMenu2" placeholder="Sub Menu 2">
                </div>
                <div class="col-12 mb-3">
                    <label for="MantDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="MantDescription" rows="3"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="New" class="form-label">New</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Copy" class="form-label">Copy</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Delete" class="form-label">Delete</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Close" class="form-label">Close</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Unlock" class="form-label">Unlock</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Reopen" class="form-label">Reopen</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Print" class="form-label">Print</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Auth" class="form-label">Auth</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Reverse" class="form-label">Reverse</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>             
                <div class="col-md-6 mb-3">
                    <label for="RollOver" class="form-label">RollOver</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Confirm" class="form-label">Confirm</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Liquidate" class="form-label">Liquidate</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>          
                <div class="col-md-6 mb-3">
                    <label for="Hold" class="form-label">Hold</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Template" class="form-label">Template</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="View" class="form-label">View</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>0</option>
                        <option value="1">1</option>
                    </select>
                </div>

                <div class="col-12 text-center my-4">
                   <a href="{{url('/Batch')}}" class="btn btn-info mx-3 text-white"><i class="fas fa-backward"></i>   Back</a>
                   <a href="{{url('/BranchRestriction')}}" class="btn btn-primary mx-3">Next   <i class="fas fa-forward"></i></a>
                </div>
                <div class="col-md-12 text-end mb-3">
                    <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i>  Add Online</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HEADER SECTION -->

  

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
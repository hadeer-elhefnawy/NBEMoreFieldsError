<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Access Matrix</title>
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> --}}
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <!-- START OF HEADER SECTION -->
    <section id="header pt-5 mt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h1>Add New Access Matrix</h1>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="groupName" class="form-label">Group Name</label>
                    <input type="text" class="form-control" id="groupName" placeholder="Enter Group Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="RoleId" class="form-label">Role ID</label>
                    <input type="text" class="form-control" id="RoleId" placeholder="Enter Role ID">
                </div>
                <div class="col-12 mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea class="form-control" id="Description" rows="3"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="CentralizationRole" class="form-label">Centralization Role</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Open</option>
                        <option value="2">Close</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="branchNo" class="form-label">Home Branch No</label>
                    <input type="text" class="form-control" id="branchNo" placeholder="Enter Branch No">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="versionNo" class="form-label">version No</label>
                    <input type="text" class="form-control" id="versionNo" placeholder="Enter Version No">
                </div>
                <div class="col-12 text-center my-4">
                   <a href="{{url('/Maintenance')}}" class="btn btn-primary mx-3"> Continue</a>
                   <a href="{{url('/home')}}" class="btn btn-danger mx-3"> Exit</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HEADER SECTION -->

  

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
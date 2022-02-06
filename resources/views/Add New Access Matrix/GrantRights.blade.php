<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Matrix</title>
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
                    <h1 class="text-start py-3">Grant Rights</h1>
                </div>
           
                <div class="col-md-6 mb-3">
                    <label for="RoleId" class="form-label">Role ID</label>
                    <input type="text" class="form-control" id="RoleId" placeholder="Role ID">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Cancel" class="form-label">Cancel</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">Y</option>
                        <option value="2">N</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeNode" class="form-label">Change Node</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Release" class="form-label">Release</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeMedia" class="form-label">Change Media</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="BranchMove" class="form-label">Branch Move</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Hold" class="form-label">Hold</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="TestInput" class="form-label">Test Input</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeAddress" class="form-label">Change Address</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Reinstate" class="form-label">Reinstate</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div> 
                <div class="col-md-6 mb-3">
                    <label for="ChangePriority" class="form-label">Change Priority</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AuthCancel" class="form-label">Auth Cancel</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AuthChangeNode" class="form-label">Auth Change Node</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>          
                <div class="col-md-6 mb-3">
                    <label for="Release" class="form-label">Release</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeMedia" class="form-label">Change Media</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AuthBranchMove" class="form-label">Auth Branch Move</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Hold" class="form-label">Hold</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AuthTestInput" class="form-label">Auth Test Input</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeAddress" class="form-label">Change Address</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AuthReinstate" class="form-label">Auth Reinstate</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangePriority" class="form-label">Change Priority</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Install" class="form-label">Install</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="testCheck" class="form-label">test Check</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="LinkContract" class="form-label">Link Contract</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeBranchIn" class="form-label">Change Branch In</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeMessage" class="form-label">Change Message</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeForceReleaseFund" class="form-label">Change Force Release Fund</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Suppress" class="form-label">Suppress</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Delete" class="form-label">Delete</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Print" class="form-label">Print</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="FTUpload" class="form-label">FT Upload</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="MoveToQueue" class="form-label">Move To Queue</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeAddressIn" class="form-label">Change Address In</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AuthChangeMessage" class="form-label">Auth Change Message</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AuthRights" class="form-label">Auth Rights</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ChangeForceCoverMatch" class="form-label">Change Force Cover Match</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">N</option>
                        <option value="2">Y</option>
                    </select>
                </div>

                <div class="col-12 text-center my-4">
                    <a href="{{url('/AccClassRestriction')}}" class="btn btn-info mx-3 text-white"><i class="fas fa-backward"></i>   Back</a>
                    <a href="{{url('/QueueRights')}}" class="btn btn-primary mx-3">Next   <i class="fas fa-forward"></i></a>
                 </div>
                 <div class="col-md-12 text-end mb-3">
                    <a href="" class="btn btn-success float-end my-3"><i class="fas fa-plus"></i> Add Grant Right</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HEADER SECTION -->

  

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
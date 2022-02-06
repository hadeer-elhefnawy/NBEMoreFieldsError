<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Branch Limit</title>
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
    <form action="{{ route('BranchLimit.update',$branchLimit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="batch pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Branch Limit</h1>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="RoleId10" class="form-label">Role ID</label>
                        <input type="text" disabled name="role_id" value="{{$branchLimit->role_id}}" class="form-control" id="RoleId10" placeholder="Role ID">
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="AuthorizerRole" class="form-label">Authorizer Role</label>
                        <select class="form-select" name="authorizer_role" aria-label="Default select example">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="LimitCurrency" class="form-label">Limit Currency</label>
                        <input type="text" name="limit_currency" value="{{$branchLimit->limit_currency}}" class="form-control" id="LimitCurrency" placeholder="Role Function">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="UserLimit" class="form-label">User Limit</label>
                        <input type="text" name="user_limit" value="{{$branchLimit->user_limit}}" class="form-control" id="UserLimit" placeholder="Role Function">
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
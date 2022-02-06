<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Access Allowed</title>
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

    <form action="{{ route('ProductAccessAllowed.update',$productAccessAllowed->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="reports pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Product Access Allowed</h1>
                    </div>
          
                    <div class="col-md-6 mb-3">
                        <label for="RoleId14" class="form-label">Role ID</label>
                        <input type="text" disabled name="role_id" value="{{$productAccessAllowed->role_id}}" class="form-control" id="RoleId14" placeholder="Role ID">
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ProductAccess" class="form-label">Product Access</label>
                        <select class="form-select" name="product_access" aria-label="Default select example">
                            <option value="0">Disallowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="ProductCodeAccess" class="form-label">product Code</label>
                        <input type="text" name="product_code_access" value="{{$productAccessAllowed->product_code_access}}" class="form-control" id="ProductCodeAccess" placeholder="Main Menu">
                    </div>
                
                    <div class="col-12 mb-3">
                        <label for="ProductDescAccess" class="form-label">Product Description</label>
                        <textarea class="form-control" name="product_desc_access" id="ProductDescAccess" rows="3">{{$productAccessAllowed->product_desc_access}}</textarea>
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
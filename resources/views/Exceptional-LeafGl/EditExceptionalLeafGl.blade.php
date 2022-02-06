<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gl Restriction/Exceptional Leaf GL's</title>
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
    <form action="{{ route('ExceptionalLeafGl.update',$exceptionalLeafGl->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section id="batch pt-5 mt-5">
            <div class="container pt-5">
                <div class="row px-5">
                    <div class="col-md-12 text-start mb-3">
                        <h1 class="text-start py-3">Edit Gl Restriction/Exceptional Leaf GL's</h1>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="RoleId17" class="form-label">Role ID</label>
                        <input type="text" disabled name="role_id" value="{{$exceptionalLeafGl->role_id}}" class="form-control" id="RoleId17" placeholder="Role ID">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="GlAllowedExceptional" class="form-label">GL Allowed</label>
                        <select class="form-select" name="gl_allowed_exceptional" aria-label="Default select example">
                            <option value="0">Disallowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="NodeGlExceptional" class="form-label">Node GL</label>
                        <input type="text" name="node_gl_exceptional" value="{{$exceptionalLeafGl->node_gl_exceptional}}" class="form-control" id="NodeGlExceptional" placeholder="Main Menu">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="NodeGlDescriptionEnExceptional" class="form-label">Node Gl Description EN</label>
                        <textarea class="form-control" name="node_gl_descripion_en_exceptional" id="NodeGlDescriptionEnExceptional" rows="3">{{$exceptionalLeafGl->node_gl_descripion_en_exceptional}}</textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="NodeGlDescriptionArExceptional" class="form-label">Node Gl Description AR</label>
                        <textarea class="form-control" name="node_gl_descripion_ar_exceptional" id="NodeGlDescriptionArExceptional" rows="3">{{$exceptionalLeafGl->NodeGlDescriptionArExceptional}}</textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="ExceptionalLeafGl" class="form-label">Exceptional Leaf GL</label>
                        <textarea class="form-control" name="exceptional_leaf_gl" id="ExceptionalLeafGl" rows="3">{{$exceptionalLeafGl->exceptional_leaf_gl}}</textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="LeafGlDescEn" class="form-label">Leaf Gl Description EN</label>
                        <input type="text" value="{{$exceptionalLeafGl->leaf_gl_description_en_exceptional}}" class="form-control" name="leaf_gl_description_en_exceptional" id="LeafGlDescEn" rows="3">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="LeafGlDescAr" class="form-label">Leaf Gl Description AR</label>
                        <textarea class="form-control" name="leaf_gl_description_ar_exceptional" id="LeafGlDescAr" rows="3">{{$exceptionalLeafGl->leaf_gl_description_ar_exceptional}}</textarea>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">

    <link rel="stylesheet" href="css/style.css?v=2">
    <script src="js/jquery-3.6.0.js"></script>


   
</head>
<body>
<div class="container my-5">
  
  
    {{-- Queue Rights --}}
    <div class="table-responsive">  
        <div class="col-md-12 text-start mb-3">
            <h1 class="text-start py-3">Queue Rights</h1>
        </div>
        <table class="table table-bordered" >  
            <tr>  
                <th >ID</th>  
                <th >Role ID</th>  
                <th >Queue</th>   
                <th >Edit</th> 
                <th >Delete</th> 
            </tr>  

            @foreach($queueRights as $queue)
            <tr>
                <td>{{$queue->id }}</td>
                <td>{{$queue->role_id }}</td>
                <td>{{$queue->queue_rights}}</td>

                <form action="{{ route('QueueRights.destroy',$queue->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('DELETE')
                    <td><a href="QueueRights/{{$queue->id}}/edit"><span class="text-danger">Edit</span></a></td>  
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                
                </form>
            </tr>
            @endforeach

        </table>  
    </div> 
</div>



<script src="js/main.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
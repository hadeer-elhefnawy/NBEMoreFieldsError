<!DOCTYPE html>
<html>
<head>
    <title>Acces Matrix</title>
    @livewireStyles
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
    <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    
<div class="container">
    
    <div class="card">
      <div class="card-header">
        {{-- Laravel Livewire Wizard Form Example - ItSolutionStuff.com --}}
      </div>
      <div class="card-body">
        <livewire:wizard />
      </div>

      {{-- <h1>hadeer</h1> --}}
    </div>
        
</div>
    
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
 
@livewireScripts
  
</html>
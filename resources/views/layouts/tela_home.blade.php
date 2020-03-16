<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token()}}">
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link href="{{asset('css/home.css')}}" rel="stylesheet">



    <title> Seja bem vindo ! </title>
</head>
<body>
    <div class="topo"> 
    <div class="container">
        <div class="logo"></div>
        <div class="sair">
            <a href="{{url('logout')}}">Sair</a> de
            {{ Auth::user () ->email }}
            
        

    </div>
</div><br>
<div class="container">
<main role="main">
    @hasSection('body')
        @yield('body')
    @endif    
</main>
</div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
<script src="{{asset('js/home.js')}}" charset="utf-8"></script>
<link rel="stylesheet" href="{{asset('air-datepicker\dist\css\datepicker.css')}}">
<script src="{{asset('air-datepicker\dist\js\datepicker.js')}}"></script>



</body>
</html>
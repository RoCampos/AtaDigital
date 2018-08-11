<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">        
        <div class="row">            
            <div class="col-12">
                @yield('conteudo')    
            </div>
        </div>
    </div>


    <!-- Bootstrap Core JavaScript -->
    <script src="{{mix('/js/app.js')}}"></script>

</body>

</html>

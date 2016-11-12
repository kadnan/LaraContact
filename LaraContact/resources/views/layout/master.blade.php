<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraContact:: Contact Management System</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="stylish-color-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="teal-text">LaraContact</h1>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
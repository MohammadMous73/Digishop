<!doctype html>
<html long="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        پنل مدیریت
    </title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('admin.top.header')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 " style="min-height: 625px">
            @include('admin.sidebar.sidebar')
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>

@include('admin.footer.footer')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="../css/app.css"> --}}
</head>
<body>
    <a href="{{url('home')}}">Home</a> |
    <a href="{{url('about')}}">About</a> |
    <a href=" {{url('contact')}}">Contact</a>
    <a href="{{url('customer/help/service')}}">Service</a>
    <hr>
    @yield('myContent')
    <h2 style="background-color:teal">This is end of myContent</h2>
    @yield('footer')
    <h1 style="background-color: violet">There's no way to continue</h1>
</body>
<script src="{{asset('js/app.js')}}"></script>
@stack('myJs') <!--can also use yield method-->
</html>

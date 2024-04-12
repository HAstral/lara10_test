
@extends('layout.important')


@section('myContent')
{{url('home')}} |
{{url('about')}} |
{{url('contact')}}
<h1 style="color:tomato ">This is Home Page</h1>
<a href="{{url('postMe')}}">Post method test</a> <br>
<h3>{{ $name }}</h3>
{!! $year !!}
<hr>

<a href="{{url('result/20/30')}}">Click me to transfer</a>
<a href="{{route('myCalculate',[50,20])}}">Second Click </a>
{{-- <a href="{{url('paraPass/Koji')}}">Passing the Parameter</a> --}}
<a href="{{route('nahe')}}">Passing the Parameter</a>
<br> <br>
<img src="{{asset("image/1144916.png")}}" width="800px">
@endsection
@section('footer')
 <h1>Testing.....</h1>
@endsection
{{-- @push('myJs') <!--java script so script tag use-->
    <script>
        alert("hello the world ");
    </script>
@endpush <!--because of stack method we use push instead of section--> --}}

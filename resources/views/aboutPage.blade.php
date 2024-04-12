@extends('layout.important')

@section('myContent')
<h1 style="color:coral ">This is About Page</h1>
    {{-- {{$message}} <br> --}}
    {{$num1}}+{{$num2}}= {{$num1+$num2}}
    {{-- <h3>{{$res}}</h3> --}}
    <hr>
    @php
        echo "<h1>motatraka</h1> .<br>";
    @endphp
    @if (true)
        <h1>This is Mona Linsa</h1>
        @else
        <h1>This is Leonado Dadickkyi</h1>
    @endif
    <hr>
    @for ($i=0;$i<count($fruits);$i++)
       <h1>
        this is fbi {{$fruits[$i]}} open up
       </h1>
    @endfor
    <hr>
    @foreach ($fruits as $f)
       <h3>{{$f}}</h3>
    @endforeach
    <hr>
    @isset($name) <!--if there is $name  -->
       <h1 style="color: palevioletred">{{$name}}</h1>
    @endisset
    <hr>

    @empty($bird)
       <h3 style="color: blueviolet">There is no birds</h3>
    @endempty
    <hr>
    {{date("d/m/Y")}}
    @endsection

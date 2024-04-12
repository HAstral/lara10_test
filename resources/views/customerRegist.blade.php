<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1>Customer Register Page is here</h1>
  <hr>
  {{-- <form action="{{url('postMe')}}" method="POST"> --}}
    {{-- <form action="{{route('customerPT')}}" method="POST"> <!--because of name--> --}}
        {{-- <form action="{{url('postMe/arara')}}" method="POST"> --}}
    {{-- <form action="{{route('customerPT',["oisu",22])}}" method="POST">
    @csrf <!--not to get 419 error -->
    <button>Click here</button>
  </form> --}}
  <form action="{{route('customerPT',20)}}" method="POST">
    @csrf
    Name: <input type="text" name="userName" id=""> <br> <br>
    Age: <input type="number" name="userAge" id=""> <br> <br>
    Address: <input type="text" name="userAddress" id=""> <br> <br>
    Gender: <select name="userGender" id="">
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select> <br> <br>
    <button>Click Here</button>
  </form>
</body>
</html>

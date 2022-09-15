<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- @if(Session::has('k'))
    {{Session::get('k')}}
    <!-- <div class="alert alert-success">{{session()->get('message')}}</div> -->
    @endif -->
    
<form action="/Edit/{{$selectedrecord->id}}" method="post">
    @csrf
  <label for="name">name:</label><br>
  <input type="text" name="name" value="{{$selectedrecord->name}}"><br><br>
  <label for="email">email:</label><br>
  <input type="text" name="email" value="{{$selectedrecord->email}}"><br><br>
  <label for="address">address:</label><br>
  <input type="text" name="address" value="{{$selectedrecord->address}}"><br><br>
  <label for="image">image:</label><br>
  <input type="text" name="image" value="{{$selectedrecord->image}}"><br><br>
  <img src="/images/{{$selectedrecord->image}}">
  <input type="submit" value="Submit">
</body>
</html>
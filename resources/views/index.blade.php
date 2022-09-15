<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(Session::has('msg'))
    {{Session::get('msg')}}
@endif
    <br>
    <a href="view">View</a>
    <!-- @if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @endif -->
<form action="/insert1" method="post" enctype="multipart/form-data">
    @csrf
  <label for="name">name:</label><br>
  <input type="text" id="name" name="name"><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email"><br><br>
  <label for="address">address:</label><br>
  <input type="text" id="address" name="address"><br><br>
  <input type="file" name="image"/><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html> 
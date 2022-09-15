@if(Session::has('view'))
{{Session::get('view')}}
@endif
<form action="/taskview" method="post">
    @csrf
    <input type="task" name="task"><br><br>
  <input type="submit" value="Submit">
</form>
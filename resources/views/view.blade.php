<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Laravel Project</h1>
    
    <a href="insert">Insert</a>    
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Image</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
      
    @foreach($data as $customers)
             <tr>
                <td>{{$customers->id}}</td>
                <td>{{$customers->name}}</td>
                <td>{{$customers->email}}</td>
                <td>{{$customers->address}}</td>
                <td><a href="/pic/{{$customers->id}}">{{$customers->image}}</a></td>
                <th><button><a href="/EditPage/{{$customers->id}}" >Update</a></button></th>
               <th><button><a href="/delete/{{$customers->id}}">Delete</a></button></th>
               
            </tr>
    @endforeach
    </table>

</body>
</html>
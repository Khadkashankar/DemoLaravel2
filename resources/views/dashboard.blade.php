<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"></head>

</head>
<body>
   <div class="container">
    <div class="row">
<div class="col-md-6 col-md-offset-3">
    <h4>Dashboard</h4><hr>
    <table class="table tabel-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$LoggedUserInfo['name']}}</td>
                <td>{{$LoggedUserInfo['email']}}</td>
                <td><a href="{{route('login')}}">Logout</a></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
   </div> 
</body>
</html>
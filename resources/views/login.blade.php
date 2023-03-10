<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"></head>
<body>
<div class="container-fluid">
    <div class="row" style="margin-top:46px">
<div class="col-md-4 col-md-offset-4">
    <h4>Login | Custom Auth</h4><hr> 
    <form action="{{url('/')}}/check" method="post">
    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif
        @csrf
<div class="form-group">
    <label for="" class="form-label">Email<label>
    <input type="text" class="form-control" name="email" placeholder="Enter email address" >
<span class="text-danger">@error('email') {{$message}}  @enderror</span>
</div>
<div class="form-group">
    <label for="">Password<label>
    <input type="password" class="form-control" name="password" placeholder="Enter password">
    <span class="text-danger">@error('password') {{$message}}  @enderror</span>

</div>
<button type="submit" class="btn btn-primary">Sign In</button><br>
<a href="{{route('register')}}">I don't have an account, Create New</a>
    </form>
</div>
</div>
</div>
 
</body>
</html>

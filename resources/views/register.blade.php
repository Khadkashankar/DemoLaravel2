<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"></head>
<body>
<div class="container-fluid">
    <div class="row" style="margin-top:46px">
<div class="col-md-4 col-md-offset-4">
    <h4>Register | Custom Auth</h4><hr> 
    <form action="{{route('save')}}" method="post">

    @if(Session::get('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    
    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif
        @csrf
    <div class="form-group">
    <label for="" class="form-label">Name<label>
    <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{old('name')}}">
<span class="text-danger">@error('name') {{$message}}  @enderror</span>
</div>
<div class="form-group">
    <label for="" class="form-label">Email<label>
    <input type="text" class="form-control" name="email" placeholder="Enter email address"  value="{{old('email')}}">
    <span class="text-danger">@error('email') {{$message}}  @enderror</span>

</div>
<div class="form-group">
    <label for="">Password<label>
    <input type="text" class="form-control" name="password" placeholder="Enter password">
    <span class="text-danger">@error('password') {{$message}}  @enderror</span>

</div>
<button type="submit" class="btn btn-primary">Sign Up</button><br><br>
<a href="{{route('login')}}">I already have account, Sign In</a>
    </form>
</div>
</div>
</div>
 
</body>
</html>

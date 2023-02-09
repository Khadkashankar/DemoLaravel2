@extends('master')
@section('content')
<div class="container">
    <div class="row" style="margin-top:46px">
<div class="col-md-4 col-md-offset-4">
    <h4>Login | Custom Auth</h4><hr>
    <form action="" method="post">
<div class="form-group">
    <label for="">Email<label>
    <input type="text" class="form-control" name="email" placeholder="Enter email address">
</div>
<div class="form-group">
    <label for="">Password<label>
    <input type="text" class="form-control" name="password" placeholder="Enter password">
</div>
<button type="submit" class="btn btn-primary">Sign In</button>
<a href="">I don't have an account, Create New</a>
    </form>
</div>
</div>
</div>
@endsection
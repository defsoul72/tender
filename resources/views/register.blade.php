@extends('master2')
<div class="jumbotron text-center">
    <h1>QuoTenFinder</h1>
    </div>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="register" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Username">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Register</button>
        </form>
        <p>No account?</p>
            <a href="register" target="_blank">Create an account</a>
            <br><a href="loginAdmin">Login Admin</a>                               
        </div>
    </div>
</div>
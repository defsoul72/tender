@extends('master2')
<div class="jumbotron text-center">
    <h1>QuoTenFinder</h1>
    </div>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="loginAdmin" method="POST">
            <div class="form-group">
                @csrf
            <p>LOGIN PAGE - admin - </p>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email_Admin" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password_Admin" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
        </div>
    </div>
</div>
<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
{
  $total= ProductController::cartItem();

}


?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">QuoTenFinder</a></li>
          <li class="active"><a href="/">Home</span></a></li>
          <li><a href="#">Annoucement</a></li>
          <li><a href="#">Result</a></li>
        </ul>
        <!--<form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          <button type="submit" class="btn btn-default">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
        </form> -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/about_us">About Us</a></li>
              <li><a href="#">Our Clients</a></li>
              {{-- <li class="divider"></li>
              <li><a href="/loginAdmin">Admin</a></li> --}}
            </ul>
           </li>
          </li>
          @if (Session::has('user'))
          <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{Session::get('user')['name']}}
           <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="/logout">Logout</a></li>
           </ul>
          </li>
          {{-- @elseif (Session::has('admin')) 
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{Session::get('admin')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
           </li>  --}}
          @else
          {{-- <li><a href="/login1">Login</a></li>   --}}
          <li><a href="/add_tender">Add Tender</a></li>
          <li><a href="/list_tender">List Tender</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">who You
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/login">User</a></li>
              <li><a href="/loginAdmin">Admin</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
           </li>
          <li><a href="/register">Create account</a></li>   
          @endif

        </ul>
        <!-- <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul> -->
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
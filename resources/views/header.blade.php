<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
    $total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light header">
    <a class="navbar-brand" href="/">ECom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/myorders">Orders</a>
            </li>

            <form action="/search" class="navbar-form navbar-left">

                <input name="query" class="form-control search-box" type="text" placeholder="Search" >
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </ul>
        <ul class="nav navbar-nav navbar-right ">
            <li class="nav-item active">
            <li> <a class="nav-link" href="/cartlist">Cart({{$total}})</a></li>
            @if(Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                  </a>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>

                </ul>
            </li>

            @else
                <li> <a class="nav-link" href="/login">Login</a></li>
                <li> <a class="nav-link" href="/register">Register</a></li>
            @endif


                </li>

        </ul>

    </div>
</nav>

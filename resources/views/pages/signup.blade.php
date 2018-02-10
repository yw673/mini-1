@extends('layouts.default')
@section('content')

    <div class="card col-8 mt-2" >
        <body class="text-center">
        <form class="form-signin">
            <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Register</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword" class="sr-only">Confirm</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Confirm" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Not robot
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        </body>
    </div>
@stop
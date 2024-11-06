@extends('layouts.auth')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="bg-pastel-pinkbtn card-header text-center  text-white">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center navbar-brand">
                                <a style="color: #6c757d;" href="{{ route('register') }}">Dont have account?</a>
                            </div>

                            <button type="submit" class=" bg-pastel-pinkbtn btn  btn-block">Login</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

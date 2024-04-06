@extends('template.main')
@section('content')
<style>
    body{
        font-family: sans-serif;
        width: 100%;
        height:95vh;
        overflow: hidden;
        background-image: linear-gradient(#432D77, #F9AF42);
    }

    .box {
        width: 1200px;
        height: 700px;
        background: #fff;
        color: rgb(55, 55, 55);
        margin: 70px auto;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 0px 0px 7px;
    }
    .left img {
        width: 700px;
        height: 700px;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
        border-radius: 10px 10px 10px 10px;
    }
    input {
        width: 400px;
        margin-left: 15%;
        border: none;
        margin-top: 10px;
        outline: none;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid gray;
        font-size: 16px;
    }
    form label{
        display: block;
        margin-top: 11px;
        margin-left: 15%;
        font-size: 16px;
        font-weight: 600;
        pad: 5px;
    }
    .box2 {
        width: 575.8px;
        height: 700px;
        background: #fff;
        color: rgb(55, 55, 55);
        margin: 70px auto;
        border-radius: 0px 10px 10px 0px;
        position: absolute;
        top: 0%;
        left: 51.5%;
    }
    form {
        width: 600px;
        margin: 60px auto;
    }
    .logo {
        margin: 20px;
        margin-top: 20%;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }
    button {
        margin: 90px;
        border: none;
        outline: none;
        padding: 8px;
        width: 417px;
        color: #f4f4f4;
        font-size: 20px;
        cursor: pointer;
        margin-top: 20px;
        border-radius: 5px;
        font-size: 16px;
        background: #8A80FF;
    }

    .box2 p{
        margin-left: 90px;
        font-size: 14px;
    }
    .box2 p .lupa{
        margin-left: 110px;
    }
</style>
<div class="box">
    <div class="login">
        <div class="left">
            <img src="{{ asset('assets/img/PTK.jpg') }}" alt="">
        </div>
        <div class="box2">
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('login.admin.load') }}">
                @csrf
                <div class="logo"><img src="{{ asset('assets/img/Logo.png') }}" alt=""></div>
                <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">Email: </label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </div>
            </form>
        </div>
    </div>
</div>
@endsection
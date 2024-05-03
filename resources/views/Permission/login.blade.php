@extends('template.main')
@section('content')
    <style>
        body {
            font-family: sans-serif;
            width: 100%;
            height: 100%;
            overflow: none;
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

        form label {
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
            display: flex;  
            margin-top: 20%;
            justify-content: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        button {
            margin: 90px;
            border: none;
            outline: none;
            padding: 8px;
            width: 401px;
            color: #f4f4f4;
            font-size: 20px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 16px;
            background: #8A80FF;
        }
        
        .box2 p {
            margin-left: 90px;
            font-size: 14px;
        }
        .content {
            width: fit-content;
            height: fit-content;
            margin-left: 15%;
            border: none;
            margin-top: 10px;
            outline: none;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .content .password {
            width: 400px;
            margin-top: 0%;
            margin-left: 0%;
            border: none;
            outline: none;
            border-radius: 5px;
            border: 1px solid gray;
            font-size: 16px;
        }

        .show-hide {
            position: absolute;
            margin-top: 22px;
            right: 15%;
            cursor: pointer;
            transform: translateY(-50%);
            padding-right: 10px; 
        }
    </style>
    <div class="box">
        <div class="login">
            <div class="left">
                <img src="{{ asset('assets/img/PTK.jpg') }}" alt="">
            </div>
            <div class="box2">
                <form method="POST" action="{{ route('login.load') }}">
                    @csrf
                    <div class="logo"><img src="{{ asset('assets/img/Logo.png') }}" alt=""></div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email: </label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" required autofocus
                                placeholder="example@gmail.com" style="border-radius: 5px;">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                        <div class="col-md-6">
                            <div class="content">
                                <input class="password" type="password" placeholder="Password" name="password" id="password" required>
                                <span class="show-hide">
                                    <i class="fa-solid fa-eye" id="show-hide-password"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Belum Punya Akun? <a href="{{ route('register') }}" style="color: blue">Daftar</a>
                    </p>
                    <button type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

        const passwordInput = document.getElementById("password");
        const showHidePassword = document.getElementById("show-hide-password");

        showHidePassword.addEventListener("click", function() {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showHidePassword.classList.remove("fa-eye");
            showHidePassword.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            showHidePassword.classList.remove("fa-eye-slash");
            showHidePassword.classList.add("fa-eye");
        }
        });
    </script>
@endsection
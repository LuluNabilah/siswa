@extends('layouts.app')

@section('content')

<head>
	<title>Login Data Siswa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/img/login.png') }}">
    <style>
        body {
            background-color: #2d649b; /* Warna latar belakang */
            font-family: 'Nunito', sans-serif; /* Font yang digunakan */
        }

        .container {
            margin-top: 10; /* Margin atas untuk memberikan ruang */
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Latar belakang kartu */
            border-radius: 8px; /* Sudut melengkung */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Bayangan */
        }

        .card-header {
            background-color: #007bff; /* Warna latar belakang header kartu */
            color: white; /* Warna teks header */
            text-align: center; /* Pusatkan teks */
            border-top-left-radius: 7; /* Sudut melengkung kiri atas */
            border-top-right-radius: 7; /* Sudut melengkung kanan atas */
        }

        .btn-primary {
            background-color: #007bff; /* Warna tombol */
            border-color: #007bff; /* Warna border tombol */
            transition: background-color 0.3s, border-color 0.3s; /* Transisi saat hover */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna tombol saat hover */
            border-color: #0056b3; /* Warna border tombol saat hover */
        }

        .form-control {
            border-radius: 5px; /* Sudut melengkung untuk input */
        }

        .invalid-feedback {
            display: block; /* Tampilkan pesan kesalahan */
        }
    </style>

</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="logo text-center"><img src="{{ asset('admin/img/login.png') }}" width="50" alt="Klorofil Logo"></div>
                <div class="card-header">{{ __('Silahkan Login di Bawah') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

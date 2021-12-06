@extends('layouts.app')

@section('content')
<!-- DAFTAR -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <!-- start card -->
            <div class="card text-center">
                <div class="card-header">
                    <h1>Daftar</h1>
                </div>
                <div class="card-body py-5">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    autofocus placeholder="Nama Lengkap">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" required autocomplete="username"
                                    autofocus placeholder="Username">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                    autofocus placeholder="Phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    name="email" placeholder="Email" required="required">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password"
                                    placeholder="Kata Sandi">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation"
                                     required autocomplete="new-password" placeholder="Ulangi Kata Sandi">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label contact-bottom" for="exampleCheck1"><span
                                            class="d-inline-block mt-3">Dengan mendaftarkan diri, Anda setuju
                                            dengan <a href="#" class="text-primary">ketentuan yang berlaku.</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Daftar" class="btn btn-dark btn-bordered w-100 mt-3 mt-sm-4">
                                <div class="mt-3">
                                    <a href="{{route('google.login')}}" class="btn-light bg-danger text-light px-2 py-1"
                                        style="border-radius: 10px;">
                                        <i class="fab fa-google mr-2"></i>  Google</a>
                                    <a href="{{route('github.login')}}" class="btn-light bg-dark text-light px-2 py-1"
                                        style="border-radius: 10px;">
                                        <i class=" fab fa-github mr-2"></i> GitHub</a>
                                </div>
                                <div class="contact-bottom">
                                    <span class="d-inline-block mt-3">Belum punya akun? <a
                                            href="member-daftar.html" class=" text-primary">Daftar</a></span>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card-footer">
                    Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                </div>
            </div>
            <!-- endcard -->
        </div>
    </div>
</div>
<!-- END DAFTAR -->
@endsection

@extends('layouts.app')

@section('content')
<!-- MASUK -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <!-- start card -->
            <div class="card text-center">
                <div class="card-header">
                    <h1>Masuk</h1>
                    @if (session('status'))
                    <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>{{ session('status') }}!</strong>
                    </div>
                  @endif
                </div>
                <div class="card-body py-5">


                    <form method="POST" action="{{ route('masuk') }}">
                        @csrf
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Kata sandi" autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                </div>

                            </div>
                            <div class="col-12">
                                <input type="submit" value="Masuk" class="btn btn-dark btn-bordered w-100 mt-3 mt-sm-4">

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
<!-- END MASUK -->
@endsection

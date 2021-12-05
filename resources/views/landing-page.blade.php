@extends('layouts.app')

@section('content')
<!-- BERANDA -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <!-- start card -->
            <div class="card">
                <div class="card-header">
                    <h1>SaCode Sosialite Auth</h1>
                </div>
                <div class="card-body py-5">
                    <a href="{{ route('login') }}" class="btn btn-dark mx-5"><h1>Masuk</h1></a>
                    <a href="{{ route('register') }}" class="btn btn-dark bg-light text-dark mx-5"><h1>Daftar</h1></a>
                </div>
                <div class="card-footer">
                    Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                </div>
            </div>
            <!-- endcard -->
        </div>
    </div>
</div>
<!-- END BERANDA -->
@endsection
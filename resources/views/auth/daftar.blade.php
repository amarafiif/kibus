@extends('layouts.app')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 offset-md-4 p-4 shadow-md bg-light mt-4" style="border-radius: 20px;">
            <h1 class="text-center mb-5 mt-3 text-warning" id="brand">Zuppercode</h1>
            <form action="">
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control text-xs" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                  </div>
                  <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control text-xs" placeholder="Alamat Email" aria-label="Username" aria-describedby="addon-wrapping">
                  </div>
                  <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control text-xs" placeholder="Kata Sandi" aria-label="Kata Sandi" aria-describedby="addon-wrapping">
                  </div>
                  <div class="input-group flex-nowrap mb-4">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-redo"></i></span>
                    <input type="password" class="form-control text-xs" placeholder="Ulangi Kata Sandi" aria-label="Kata Sandi" aria-describedby="addon-wrapping">
                  </div>
                  <button href="" class="btn btn-warning btn-block fw-bold mb-4">DAFTAR</button>
                  <small class="text-warning text-muted text-center text-shadow-sm">
                    <p class="fw-bold">Klik <a href="{{ route('login') }}">Disini</a> Jika Anda sudah memiliki akun.</p>
                  </small>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 offset-md-4 p-4 shadow p-3 mb-5 bg-white rounded mt-4" style="border-radius: 20px;">
            <h1 class="text-center mb-5 mt-3 text-warning" id="brand">Zuppercode</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group flex mb-3">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                    <input type="email" id="email" name="email" class="form-control text-xs @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Alamat Email" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                  <div class="input-group flex mb-4">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                    <input type="password" id="password" name="password" class="form-control text-xs @error('password') is-invalid @enderror" placeholder="Kata Sandi" required autocomplete="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                  <div class="validation mb-3">
                      <button type="submit" class="btn btn-warning btn-block fw-bold mb-2">{{ __('Login') }}</button>
                  </div>
                  <small><p class="fw-bold text-muted mb-2 text-center">Belum memiliki akun ? <a href="{{ route('register') }}">Daftar</a></p></small>
                  <small class="text-warning text-muted text-center text-shadow-sm">
                    <p class="fw-bold">Silahkan login untuk mendapatkan akses manajemen. Jika tidak dapat masuk coba hubungi Muhammad Ammar Afif</p>
                  </small>
                </div>
            </form>
        </div>
</div>

@endsection
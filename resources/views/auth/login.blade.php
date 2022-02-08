@extends('layouts.app')

@section('content')
<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2 text-center">
        <h1>เข้าสู่ระบบ</h1>
        <h4>เข้าสู่ระบบ SMA Coin Wallet</h4>
    </div>
    <div class="section mb-5 p-2">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="card">
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email1">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="Your Email" autofocus>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password">รหัสผ่าน</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="Your Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-links mt-2">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div>
                    @if (Route::has('password.request'))
                    <a href="forgot-password" class="text-muted" href="{{ route('password.request') }}">ลืมรหัสผ่าน ?</a>
                    @endif
                </div>
            </div>

            <div class="container text-center my-4">
                <div class="row">
                    <div class="col">
                        <h2>หรือ</h2>
                        <p>เข้าสู่ระบบด้วย</p>

                        <div class="row">
                            <div class="col text-center">
                                <img src="{{ asset('img/logosocial/facebook.png') }}" style="width: 70%;" alt="">
                            </div>

                            <div class="col text-center">
                                <img src="{{ asset('img/logosocial/google.png') }}" style="width: 70%;" alt="">
                            </div>

                            <div class="col text-center">
                                <img src="{{ asset('img/logosocial/line.png') }}" style="width: 70%;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-button-group  transparent">
                <button type="submit" class="btn btn-primary btn-block btn-lg">เข้าสู่ระบบ</button>
            </div>

        </form>
    </div>

</div>
<!-- * App Capsule -->
@endsection
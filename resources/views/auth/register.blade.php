@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section id="entrance" class="account" style="height: 1100px">
    @if (session('success'))
<div class="alert alert-success text-center">
    <h1>Операция выполнена успешно!</h1>
</div>
@endif
        <div class="container-form-glass" id="app" style="display: flex; flex-direction: column;   font-family: sans-serif; font-weight: bold">
            
        <div class="container-form-glass">
  <form class="form-glass" style="height: 620px" method="POST" action="{{ route('register') }}">
  @csrf
    <p>Регистрация</p>
    <input  id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('ФИО*') }}" required autocomplete="name" autofocus><br>
    @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input  id="login" type="text" class="@error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" placeholder="{{ __('Логин*') }}" required autocomplete="login" autofocus><br>
                            @error('login')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="{{ __('Телефон*') }}" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Почта') }}" value="{{ old('email') }}" autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="{{ __('Пароль*') }}" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Повторите пароль*') }}" required autocomplete="new-password">

    
    <button class="button-glass" type="submit" value="Регистрация">Регистрация</button><br>
  </form>

  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>
        
        <!-- <div class="entrance__block">
                <form method="POST" action="{{ route('register') }}" style=" display: flex; flex-direction: column; justify-content: center; align-items: center">
                    @csrf

                    <div class="form-group row" style="display: flex; flex-direction: column">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ФИО*') }}</label>

                        <div class="">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row" style="display: flex; flex-direction: column">
                        <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Логин*') }}</label>

                        <div class="">
                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                            @error('login')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div> -->
                    <!-- <div class="form-group row" style="display: flex; flex-direction: column">
                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Телефон*') }}</label>

                        <div class="">
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>               -->
                    <!-- <div class="form-group row" style="display: flex; flex-direction: column">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Почта') }}</label>

                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div> -->

                    <!-- <div class="form-group row" style="display: flex; flex-direction: column">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль*') }}</label>

                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div> -->

                    <!-- <div class="form-group row" style="display: flex; flex-direction: column">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Повторите пароль*') }}</label>

                        <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="">
                            <button type="submit" class="form-btn" style=" border-radius: 10px; border: 1px solid #fff; font-family: sans-serif; font-weight: bold">
                                {{ __('Регистрация') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div> -->
        </div>
    </section>
    @include('partials.footer')
@endsection

@extends('layouts.app')

@section('content')
<div class="container b" style="direction: rtl">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-org">{{ __('فرم ثبت نام') }}</div>

                <div class="card-body p-3 bg-bw text-white">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group m-2 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control
                                        @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-2 row">
                            <label for="family" class="col-md-4 col-form-label text-md-right">{{ __('فامیل') }}</label>

                            <div class="col-md-6">
                                <input id="family" type="text" class="form-control @error('family') is-invalid
                                        @enderror" name="family" value="{{ old('family') }}"
                                       required autocomplete="family" autofocus>

                                @error('family')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-2 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-2 row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('موبایل') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control
                                    @error('mobile') is-invalid @enderror" name="mobile"
                                       value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-2 row">
                            <label for="n-code" class="col-md-4 col-form-label text-md-right">{{ __('کد ملی') }}</label>

                            <div class="col-md-6">
                                <input id="n-code" type="text" class="form-control
                                    @error('n-code') is-invalid @enderror" name="n-code"
                                       value="{{ old('n-code') }}" required autocomplete="n-code">

                                @error('n-code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-2 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-2 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تایید رمز عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group m-2 row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

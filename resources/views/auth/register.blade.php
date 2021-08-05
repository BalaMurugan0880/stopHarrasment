@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Consultent Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="sex">Sex</label>
                            <div class="col-md-6">
                                <select class="form-control" id="sex" name="sex" value="">
                                  <option placeholder="Select One"></option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="consultantType">Consultant Type</label>
                            <div class="col-md-6">
                                <select class="form-control" id="consultantType" name="consultantType" value="">
                                  <option placeholder="Select One"></option>
                                  <option value="NGO">NGO</option>
                                  <option value="Legal Advice">Legal Advice</option>
                                  <option value="Mental Health Professional">Mental Health Professional</option>
                                  <option value="24/7 Help Support">24/7 Help Support</option>
                                  <option value="Socially Concerned People">Socially Concerned People</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="aboutYourself" class="col-md-4 col-form-label text-md-right">{{ __('About yourself') }}</label>

                            <div class="col-md-6">
                                <textarea name="aboutYourself" class="form-control" rows="3" placeholder="Description About yourself"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contactNumber" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contactNumber" type="text" class="form-control" name="contactNumber" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control" name="role" value="Consultant" hidden>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

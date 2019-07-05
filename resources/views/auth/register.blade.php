@extends('layout')

@section('content')
    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #FF851B">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<span style="color:red">*</span></label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<span style="color:red">*</span></label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span style="color:red">*</span></label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<span style="color:red">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="checkbox col-md-4 col-form-label text-md-right">
                            <label style="cursor: pointer; border: 1px solid Orange; background-color: Orange; padding: 5px; border-radius: 5px;"><input type="checkbox" id="check" name="check" value="true" style="display: none;" class="check"><span id="checkLabel">I have a pizza company</span></label>
                        </div>
                        </div>


                        <div class="card-body" id="dummy" >


                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}<span style="color:red">*</span></label>

                            <div class="col-md-6">
                                <input type="text" id="company_name" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" autocomplete="company_name" autofocus>

                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                                <label for="contact_person_name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Name') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" id="contact_person_name" class="form-control @error('contact_person_name') is-invalid @enderror" name="contact_person_name" value="{{ old('contact_person_name') }}" autocomplete="contact_person_name" autofocus>

                                    @error('contact_person_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <textarea type="text" rows="2" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" id="address" autocomplete="address" autofocus>
                                    </textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" id="phone" autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_company" class="col-md-4 col-form-label text-md-right">{{ __('Company E-Mail') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email_company" id="email_company" autocomplete="email">

                                    @error('email_company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="url" class="form-control @error('url') is-invalid @enderror" name="website" value="{{ old('website') }}" id="website" autocomplete="website" autofocus>

                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="working_hours" class="col-md-4 col-form-label text-md-right">{{ __('Working Hours') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <textarea rows="9" type="text" class="form-control @error('working_hours') is-invalid @enderror" name="working_hours" value="{{ old('working_hours') }}" id="working_hours" autocomplete="working_hours" autofocus>
                                    </textarea>
                                    @error('working_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="file" accept="image/jpg, image/png, image/svg" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" id="logo" autocomplete="logo" autofocus>

                                    @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_description" class="col-md-4 col-form-label text-md-right">{{ __('Company Description') }}<span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control @error('company_description') is-invalid @enderror" name="company_description" maxlength="700" value="{{ old('company_description') }}" id="company_description" autocomplete="company_description" autofocus>
                                    </textarea>
                                    @error('company_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                                <p class="col-md-6 col-form-label text-md-right"><span style="color:red">*</span>All fields are required</p>
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
<br><br>
@endsection


@extends('layout')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FF851B">{{ __('Company Details') }}</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body" >


                                <div class="form-group row">
                                    <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                                    <div class="col-md-6">
                                        <input value='{{$company->company_name}}' type="text" id="company_name" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" autocomplete="company_name" autofocus>

                                        @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_person_name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Name') }}</label>

                                    <div class="col-md-6">
                                        <input value="{{$company->contact_person_name}}" type="text" id="contact_person_name" class="form-control @error('contact_person_name') is-invalid @enderror" name="contact_person_name" value="{{ old('contact_person_name') }}" autocomplete="contact_person_name" autofocus>

                                        @error('contact_person_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                    <div class="col-md-6">
                                    <textarea  type="text" rows="2" class="form-control @error('address') is-invalid @enderror" name="address"  id="address" autocomplete="address" autofocus>{{ $company->address }}
                                    </textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                    <div class="col-md-6">
                                        <input value = '{{$company->phone}}' type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" id="phone" autocomplete="phone" autofocus>

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_company" class="col-md-4 col-form-label text-md-right">{{ __('Company E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input value='{{$company->email}}' type="email" class="form-control @error('email') is-invalid @enderror" name="email_company" id="email_company" autocomplete="email">

                                        @error('email_company')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                                    <div class="col-md-6">
                                        <input value="{{$company->own_website}}" type="url" class="form-control @error('url') is-invalid @enderror" name="website" value="{{ old('website') }}" id="website" autocomplete="website" autofocus>

                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="working_hours" class="col-md-4 col-form-label text-md-right">{{ __('Working Hours') }}</label>

                                    <div class="col-md-6">
                                    <textarea rows="9" type="text" class="form-control @error('working_hours') is-invalid @enderror" name="working_hours" value="{{ old('working_hours') }}" id="working_hours" autocomplete="working_hours" autofocus>{{$company->working_hours}}
                                    </textarea>
                                        @error('working_hours')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

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
                                    <label for="company_description" class="col-md-4 col-form-label text-md-right">{{ __('Company Description') }}</label>

                                    <div class="col-md-6">
                                    <textarea type="text" class="form-control @error('company_description') is-invalid @enderror" name="company_description" value="{{ old('company_description') }}" id="company_description" autocomplete="company_description" autofocus>{{ $company->company_description }}
                                    </textarea>
                                        @error('company_description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                        {{ __('Update Company Details') }}
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



@extends('layout')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FF851B">{{ __('Add Menu Item') }}</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                                <div class="col-md-6">
                                    <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') ? old('product_name') : $product->name}}" required autocomplete="product_name" autofocus>

                                    @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="picture" type="file" accept="image/jpg, image/png, image/svg" class="form-control @error('picture') is-invalid @enderror" name="picture" value="{{ old('picture') }}" required autocomplete="picture">

                                    @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Product Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" rows="5" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ old('description') ?? $product->description }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" min="0" class="form-control" name="price" required autocomplete="price" value="{{ old('price') ? old('price') : $product->price }}">
                                </div>
                            </div>

                            <input type="hidden" name="currency" value="USD" />

                            <div class="form-group row">
                                <label for="gramaj" class="col-md-4 col-form-label text-md-right">{{ __('Gramaj') }}</label>

                                <div class="col-md-6">
                                    <input id="gramaj" value="{{ old('gramaj') ? old('gramaj') : $product->gramaj }}" type="number" min="0" class="form-control" name="gramaj" required autocomplete="price">
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Edit Menu Item') }}
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


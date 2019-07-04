@extends('layout')


@section('title','Company Menu')

@section('content')
    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mb-3 shadow" >
                    <img src="{{ asset($company->logo)}}" class="card-img-top" style=" height: 200px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <h3 class="card-title" id="company_name">{{$company->company_name}}</h3>
                        <p class="card-text">{{$company->company_description}}</p>
                        <p class="card-text">{{$company->address}}</p>
                        <p class="card-text">{{$company->working_hours}}</p>
                    </div>
                </div>
                <br><br>

                <br>


                <div class="row">
                    <div class="col-lg-6">

                        @foreach($products as $product)
                        <div class="card md-3 shadoww" >
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-2 itemimage" style="background-image: url({{ asset($product->photo) }}); min-width:150px; min-height:150px; height:auto">
                                    </div>
                                    <div class="col-12 col-sm-7">
                                    <div class="card-body">
                                        <h4 class="card-title" id="itemName">{{$product->name}}</h4>
                                        <p class="card-text" id="itemDescription">{{$product->description}}</p>
                                        <p class="card-text"><small class="text-muted">{{$product->price}} {{$product->currency}}</small></p>
                                        <a href="#" class="btn btn-primary">Add to cart</a>
                                        <a href="#" class="btn btn-danger">Remove from cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>
                        @endforeach()
                    </div>
                    <br>
                    <div class="col-lg-6">



                        <div class="col-md-8 col-6-sm order-md-6 mb-8 float-right">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Product name</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$12</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Second product</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$8</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Third item</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0">Promo code</h6>
                                        <small>EXAMPLECODE</small>
                                    </div>
                                    <span class="text-success">-$5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (USD)</span>
                                    <strong>$20</strong>
                                </li>
                            </ul>

                            <a class="btn ml-2 btn-primary text-white">Checkout</a>
                        </div>



                    </div>
                </div>







            </div></div></div>

    <br>

@endsection

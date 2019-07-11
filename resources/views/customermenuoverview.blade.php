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
                        <h3 class="card-title" id="company_name">{{$company->company_name}} <small class="ratestar">★</small><small style="font-size: 15px">4.46/5</small>  <a href="#reviews" class="btn btn-primary ratebutton">Reviews <span class="badge badge-light"> 2 </span></a></h3>
                        <p class="card-text"><i class="fas fa-sticky-note"></i> {{$company->company_description}}</p>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$company->address}}</p>
                        <p class="card-text"><i class="fas fa-clock"></i> {{$company->working_hours}}</p>
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
                                        <p class="card-text" id="itemDescription"><i class="fas fa-sticky-note"></i> {{$product->description}}</p>
                                        <p class="card-text"><small class="text-muted"><i class="fas fa-money-bill"></i> {{$product->price}} {{$product->currency}}</small></p>
                                        @auth
                                            <a href="/add-to-cart/{{ $company->id }}/{{ $product->id }}" class="btn btn-primary">Add to cart</a>
                                            @if($order && $order->orderItem()->where('product_id', $product->id)->first())
                                                <a href="/remove-from-cart/{{ $company->id }}/{{ $product->id }}" class="btn btn-danger">Remove from cart</a>
                                            @endif
                                        @else
                                            <a href="/login" class="btn btn-primary">Add to cart</a>
                                        @endauth
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
                                <span class="badge badge-secondary badge-pill">{{ $order ? $order->orderItem->count() : 0 }}</span>
                            </h4>
                            @php
                                $total = 0;
                            @endphp
                            <ul class="list-group mb-3">
                                @if($order)

                                    @foreach($order->orderItem as $item)
                                        @php
                                            $total+=$item->product->price * $item->quantity;
                                        @endphp
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div style="width: 90%">
                                                <h6 class="my-0">{{ $item->product->name }}</h6>
                                                <small class="text-muted">{{ $item->product->description }}</small>
                                            </div>
                                            <span class="text-muted">{{$item->quantity}} x {{ $item->product->price}} {{ $item->product->currency }}</span>
                                        </li>
                                    @endforeach
                                @endif
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (USD)</span>
                                    <strong>${{ $total }}</strong>
                                </li>
                            </ul>

                            @if($order)
                                <a href="/checkout/{{$order->id}}" class="btn ml-2 btn-primary text-white">Checkout</a>
                            @endif
                        </div>



                    </div>
                </div>







            </div></div></div>

    <br><br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-3 shadow" >
                    <div class="card-body" id="reviews">

                       <h3 class="card-title align-middle"><span class="badge badge-primary align-middle"> 2 </span>  Reviews <small class="ratestarbig">★</small><small style="font-size: 25px">4.46/5</small>  <a href="#reviews" id="open-review-box" class="btn btn-primary revbutton">Add a review</a></h3>

                        <div class="row" id="post-review-box" style="display:none;">
                            <div class="col-md-12">
                                <form accept-charset="UTF-8" action="" method="post">
                                    <input id="ratings-hidden" name="rating" type="hidden">
                                    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>

                                    <div class="text-right">


                                        <div class="starrating risingstar d-flex justify-content-left flex-row-reverse">
                                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                        </div>
                                    </div>




                                        <a class="btn btn-danger" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </form>
                            </div>

                        <hr/>
                        <div class="card-body" align="left">
                            <h5 class="card-title font-weight-bold">Damian <small class="ratestar">★</small><small style="font-size: 15px">4/5</small></h5>
                            <h6 class="card-title">11-07-2019</h6>
                            <p class="card-text" id="companyName">Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place </p>
                            <hr/>
                        </div>
                        <div class="card-body" align="left">
                            <h5 class="card-title font-weight-bold">Cristian <small class="ratestar">★</small><small style="font-size: 15px">5/5</small></h5>
                            <h6 class="card-title">10-07-2019</h6>
                            <p class="card-text" id="companyName">Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place Imi place </p>
                            <hr/>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@extends('layout')


@section('title','Company Menu')

@section('content')
    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mb-3" >
                    <img src="{{ asset('/img/pizza1.jpg') }}" class="card-img-top" style=" height: 200px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <h3 class="card-title" id="company_name">Pizza Bada Bing</h3>
                        <p class="card-text">Pizzeria Bada Bing a luat naștere în anul 2010 din dorința de a oferi brașovenilor gustul savuros al pizzei italiene la un preț accesibil oricui. Acestor două ingrediente li s-a adăugat un al treilea - dumneavoastră, clientul, care alegeți calitatea produselor noastre, astfel ne-am creat un renume într-un timp foarte scurt, în ciuda concurenței acerbe de pe piața brașoveană, prin calitatea și diversitatea preparatelor, prin profesionalismul de care dăm dovadă, și nu în ultimul rând datorită prețului corect al produselor noastre.</p>
                        <p class="card-text">Str. Carpatilor Nr.56</p>
                        <p class="card-text">L-V: 9-22  S-D: 10-20</p>
                    </div>
                </div>
                <br><br>

                <br>


                <div class="row">
                    <div class="col-lg-6">


                        <div class="card md-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-4 itemimage" style="background-image: url({{ asset('/img/pizza2.jpg') }})">

                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h4 class="card-title" id="itemName">Pizza Grasu</h4>
                                        <p class="card-text" id="itemDescription">Carne, Carne, Carne, Carne, Carne, Carne, Carne, Carne, Blat</p>
                                        <p class="card-text"><small class="text-muted">25 LEI</small></p>
                                        <a href="#" class="btn btn-primary">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>




                        <div class="card md-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-4 itemimage" style="background-image: url({{ asset('/img/pizza1.jpg') }})">

                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h4 class="card-title" id="itemName">Pizza Grasu</h4>
                                        <p class="card-text" id="itemDescription">Carne, Carne, Carne, Carne, Carne, Carne, Carne, Carne, Blat</p>
                                        <p class="card-text"><small class="text-muted">25 LEI</small></p>
                                        <a href="#" class="btn btn-primary">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">



                        <div class="col-md-8 order-md-6 mb-8 float-right">
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

                            <form class="card p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Promo code">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>







            </div></div></div>

    <br>

@endsection

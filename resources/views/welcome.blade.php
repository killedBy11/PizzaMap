@extends('layout')


@section('title','Welcome')

@section('content')

    <div class="card border-0">
        <div class="col-12 itemimage cover" style="background-image: url({{ asset('/img/pizzabg.jpg') }}); height:auto">

            <div class="my-auto mx-auto text-center text-white">
                <h2 class="card-title covertextbig" >Pizza Map</h2>
                @auth
                    <h4 class="card-title covertextsmall" >Welcome {{ Illuminate\Support\Facades\Auth::user()->name }}!</h4>
                @endauth
                <h4 class="card-text covertextsmall">Search for the best pizza in town!</h4>


                    <div class="d-flex justify-content-center size=2vw">
                                <div class="searchbar">
                            <input class="search_input" type="text" name="" placeholder="Search...">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
            </div>

            </div>
        </div>

<br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>See the popular places in Brasov!</h3>
                <br>

    @foreach($companies as $company)



                    <div class="card md-3 shadoww" >
                        <div class="row no-gutters ">
                            <div class="col-12 col-sm-2 itemimage" style="background-image: url({{ asset($company->logo) }}); min-width:150px; min-height:150px; height:auto">
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title" id="itemName">{{$company->company_name}}  <small class="ratestar">★</small><small style="font-size: 15px">4.46/5</small></h4>
                                    <p class="card-text" id="itemDescription"><i class="fas fa-sticky-note"></i> {{$company->company_description}}</p>
                                    <p class="card-text"><small class="text-muted"><i class="fas fa-clock"></i> {{$company->working_hours}}</small></p>
                                    <a href="/menuoverview/{{$company->id}}" class="btn btn-primary">See the menu</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
     @endforeach
     {{$companies->links()}}
            </div></div></div>


    <br><br><br><br><br><br><br>





@endsection

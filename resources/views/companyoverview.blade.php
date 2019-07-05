@extends('layout')


@section('title','Company Menu')

@section('content')

    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

    <div class="card text-center">
        <div class="card-header" style="background-color: #FF851B">
            <a href="/placed-orders/{{$company->id}}" class="btn btn-secondary float-right">Placed Orders</a>
            <div class="card-title text-left">Company Menu</div>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#comprof" id="cp">Company Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menuove" id="mo">Menu Overview</a>
                </li>
            </ul>
        </div>

        <div class="card-body" id="comprof" align="left">
            <h5 class="card-title"><i class="fas fa-building"></i> Company Name</h5>
            <p class="card-text" id="companyName">{{$company->company_name}}</p>
            <hr/>
            <h5 class="card-title"><i class="fas fa-id-badge"></i> Contact Person Name</h5>
            <p class="card-text" id="contactPersonName">{{$company->contact_person_name}}</p>
            <hr/>
            <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> Address</h5>
            <p class="card-text" id="address">{{$company->address}}</p>
            <hr/>
            <h5 class="card-title"><i class="fas fa-phone"></i> Phone Number</h5>
            <p class="card-text" id="phoneNumber">{{$company->phone}}</p>
            <hr/>
            <h5 class="card-title"><i class="fas fa-envelope"></i> E-mail</h5>
            <p class="card-text" id="email">{{$company->email}}</p>
            <hr/>
            <h5 class="card-title"><i class="fas fa-laptop"></i> Website</h5>
            <p class="card-text" id="website"><a class="NiceHrefLinks" href="{{$company->own_website}}">{{$company->company_name}}</a></p>
            <hr/>
            <h5 class="card-title"><i class="fas fa-clock"></i> Working Hours</h5>
            <p class="card-text" id="workingHours">{{$company->working_hours}}</p>
            <hr/>
            <h5 class="card-title"><i class="fas fa-image"></i> Logo</h5>
            <img class="img-fluid" id="logo" style="height:150px; margin-top:10px; overflow: hidden;" src="{{ asset($company->logo) }}" alt="Logo cannot be found">
            <hr/>
            <h5 class="card-title"><i class="fas fa-sticky-note"></i> Company Description</h5>
            <p class="card-text" id="companyDescription">{{$company->company_description}}</p>
            <hr/>
            <a href="/editcompany/{{$company->id}}" class="btn btn-primary" >Edit Profile</a>
        </div>

        <div class="card-body" id="menuove" align="left">
            <a href="/addmenu/{{$company->id}}" class="btn btn-primary">Add Menu Item</a>
            <br><br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
             @foreach($items as $item)
                        <div class="card md-3 shadoww" >
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-2 itemimage" style="background-image: url({{ asset($item->photo) }}); min-width:150px; min-height:150px; height:auto">
                                    </div>
                                    <div class="col-12 col-sm-7">
                                            <div class="card-body">
                                            <h4 class="card-title" id="itemName">{{$item->name}}</h4>
                                            <p class="card-text" id="itemDescription"><i class="fas fa-sticky-note"></i> {{$item->description}}</p>
                                            <p class="card-text"><small class="text-muted"><i class="fas fa-money-bill"></i> {{$item->price}} {{$item->currency}}</small></p>
                                            <a href="/editmenuitem/{{ $company->id }}/{{$item->id}}" class="btn btn-primary">Edit Item</a>
                                            <form method="POST" style="display: inline-block;" action="/delete-item/{{$company->id}}/{{$item->id}}">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete" />
                                                <input type="submit" class="btn btn-primary" value="Delete"/>
                                            </form>
                                            </div>
                                    </div>
                                </div>
                        </div>
                 <br>
                 @endforeach
                    </div>
            </div>
        </div>
                 
            <br>
        </div>
    </div>
            </div>
        </div>
    </div>



    <br><br>


@endsection

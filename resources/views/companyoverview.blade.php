@extends('layout')


@section('title','Company Menu')

@section('content')

    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

    <div class="card text-center">
        <div class="card-header" style="background-color: #FF851B">
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
            <h5 class="card-title">Company Name</h5>
            <p class="card-text" id="companyName">{{$company->company_name}}</p>
            <hr/>
            <h5 class="card-title">Contact Person Name</h5>
            <p class="card-text" id="contactPersonName">{{$company->contact_person_name}}</p>
            <hr/>
            <h5 class="card-title">Address</h5>
            <p class="card-text" id="address">{{$company->address}}</p>
            <hr/>
            <h5 class="card-title">Phone Number</h5>
            <p class="card-text" id="phoneNumber">{{$company->phone}}</p>
            <hr/>
            <h5 class="card-title">E-mail</h5>
            <p class="card-text" id="email">{{$company->email}}</p>
            <hr/>
            <h5 class="card-title">Website</h5>
            <p class="card-text" id="website"><a class="NiceHrefLinks" href="{{$company->own_website}}">{{$company->company_name}}</a></p>
            <hr/>
            <h5 class="card-title">Working Hours</h5>
            <p class="card-text" id="workingHours">{{$company->working_hours}}</p>
            <hr/>
            <h5 class="card-title">Logo</h5>
            <img class="img-fluid" id="logo" style="height:150px; margin-top:10px; overflow: hidden;" src="{{ asset($company->logo) }}" alt="Logo cannot be found">
            <hr/>
            <h5 class="card-title">Company Description</h5>
            <p class="card-text" id="companyDescription">{{$company->company_description}}</p>
            <hr/>
            <a href="#" class="btn btn-primary">Edit Profile</a>
        </div>

        <div class="card-body" id="menuove" align="left">
            <a href="/addmenu/{{$company->id}}" class="btn btn-primary">Add Menu Item</a>
            <br><br>
             @foreach($items as $item)
            <div class="card flex-row flex-wrap">
                <div class="card-header border-0" style=" width: 200px; height: 200px;">
                    <img src="{{ asset($item->photo) }}" style="width: 100%;height: 100%;" alt="">
                </div>
                <div class="card-block  p-3">
                    <h4 class="card-title" id="itemName">{{$item->name}}</h4>
                    <p class="card-text" id="itemDescription">{{$item->description}}</p>
                    <p class="card-text"><small class="text-muted">{{$item->price}}{{$item->currency}}</small></p>
                    <a href="#" class="btn btn-primary">Edit Item</a>
                    <a href="#" class="btn btn-primary">Delete Item</a>
                </div>
            </div>
            @endforeach
        </div>



    </div>
            </div></div></div>


    <br><br>


@endsection

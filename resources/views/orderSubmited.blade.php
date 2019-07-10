@extends('layout')

@section('content')
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order submitted!</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Your order is being processed by the pizza company. Check in "My Orders" to see the status.

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
@endsection

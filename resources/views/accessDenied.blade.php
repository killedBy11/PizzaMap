@extends('layout')

@section('content')
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Access denied!</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    Could not access this page.

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
@endsection

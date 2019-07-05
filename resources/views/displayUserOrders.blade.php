@extends('layout')

@section('content')
    <br><br><br><br>
    <div class="container" style="text-align: center;">
    @foreach($orders as $order)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="text-align: left">
                    <div class="card-header">Order id: {{ $order->id }}</div>

                    <div class="card-body" style="text-align: center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="col-md-8 col-6-sm order-md-6 mb-8" style="display: inline-block; text-align: left;">
                                <h6 class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted">Company: {{ \App\Company::find($order->company_id)->company_name  }}</span>
                                </h6>
                                <h6 class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted">Status: {{ $order->status }}</span>
                                </h6>
                                <h6 class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted">Delivery address: {{ $order->address }}</span>
                                </h6>
                                <h6 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Payment method: {{ $order->payment  }}</span>
                                </h6>
                                <h6 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Purchased Items</span>
                                    <span class="badge badge-secondary badge-pill">{{ $order ? $order->checkedOrderItems->count() : 0 }}</span>
                                </h6>
                                @php
                                    $total = 0;
                                @endphp
                                <ul class="list-group mb-3">
                                    @if($order)

                                        @foreach($order->checkedOrderItems as $item)
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
                            </div>

                    </div>
                </div>
            </div>
        </div>
    <br><br>
    @endforeach
    <div style="display: inline-block">{{ $orders->links() }}</div>
    </div>
    <br><br>
@endsection

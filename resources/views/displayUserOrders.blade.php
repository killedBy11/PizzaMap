@extends('layout')

@section('content')
    <br><br><br><br>
    @foreach($orders as $order)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order id: {{ $order->id }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                                    <span class="text-muted">Company: {{ \App\Company::find($order->company_id)->name  }}</span>
                                    <span class="text-muted">Status: {{ $order->status }}</span>
                                    <span class="text-muted">Delivery address: {{ $order->address }}</span>

                            <div class="col-md-8 col-6-sm order-md-6 mb-8">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Purchased Items</span>
                                    <span class="badge badge-secondary badge-pill">{{ $order ? $order->checkedOrderItems->count() : 0 }}</span>
                                </h4>
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
    </div>
    <br><br>
    @endforeach
    <div>{{ $orders->links() }}</div>
    <br><br>
@endsection

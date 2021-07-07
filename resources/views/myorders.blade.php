@extends('master')
@section('content')
    <div class=" container custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>

        <div class="trending-wrapper">
            <h3>Cart Items</h3>

            @foreach($orders as $item)

                <div class="search-item">
                    <div class="row cart-list-devider">
                        <div class="col-sm-5 "><br>
                            <div class="card">
                                <div class="card-block">
                                    <a href="detail/{{$item->id}}">
                                        <img class="trending-img" src="{{$item->gallery}}">
                                    </a>
                                </div>
                                    <div class="">
                                        <h2>Name : {{$item->name}}</h2>
                                        <h4>Delivery Status : {{$item->status}}</h4>
                                        <h4>Address : {{$item->address}}</h4>
                                        <h4>Payment Method : {{$item->payment_method}}</h4>
                                        <h4>Payment Status : {{$item->payment_status}}</h4>
                                    </div>


                            </div>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection

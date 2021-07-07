@extends('master')
@section('content')
    <div class=" container custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>

            <div class="trending-wrapper">
                <h3>Cart Items</h3>
                <a href="ordernow" class="btn btn-success">Oder Now</a>
                @foreach($products as $item)

                    <div class="search-item">
                        <div class="row cart-list-devider">
                        <div class="col-sm-5 "><br>
                            <div class="card">
                                <div class="card-block">
                                    <a href="detail/{{$item->id}}">
                                        <img class="trending-img" src="{{$item->gallery}}">
                                    </a>

                                    <div class="">
                                            <h2>{{$item->name}}</h2>
                                            <h4>{{$item->description}}</h4>
                                    </div>

                                </div>
                            </div>

                        </div>
                            <div class="col-sm-4">
                                <a class="btn btn-warning" href="/removecart/{{$item->cart_id}}">Remove To Cart</a>

                            </div>
                    </div>
            </div>
            @endforeach

        </div>

    </div>
@endsection

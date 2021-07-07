@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$products['gallery']}}">
            </div>

            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{$products['name']}}</h2>
                <h3 >Price: {{$products['price']}}</h3>
                <p>Detail: {{$products['description']}}</p>
                <h4>Category: {{$products['category']}}</h4><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$products['id']}}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form><br>

                <button class="btn btn-success">Buy now</button>
            </div>

        </div>

    </div>
@endsection

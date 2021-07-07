@extends('master')
@section('content')
    <div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
        <div class="col-sm-5">
            <div class="trending-wrapper">
                <h3>Result for Products</h3>

                @foreach($products as $item)

                    <div class="search-item">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-block">
                                    <a href="detail/{{$item['id']}}">
                                        <img class="trending-img" src="{{$item['gallery']}}">

                                        <div class="">
                                            <h2>{{$item['name']}}</h2>
                                            <h4>{{$item['description']}}</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                @endforeach

        </div>

    </div>
@endsection

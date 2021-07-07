@extends('master')
@section('content')
    <div class=" container custom-product">
        <div class="col-sm-4">
            <table class="table">

                <tbody>
                <tr>
                    <th>Amount</th>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <th>Tax</th>
                    <td>$0</td>
                </tr>
                <tr>
                    <th>Delivery</th>
                    <td>$10</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>${{$total+10}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <textarea name="address" class="form-control"  placeholder="Enter Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Payment Method</label><br>
                        <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br>
                        <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br>
                        <input type="radio" value="cash" name="payment"> <span>Case on delivery</span><br>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection

@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>quantity</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td><span class="amount">${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</span></td>
                </td>
                <td>
                <form action="{{route('cart.update', $item->id)}}" method="get">
                <input name="quantity" type="number" value={{ $item->quantity }}>
                    <input class="btn btn-info btn-sm" type="submit" value="save">
                </form>
            </td>
                <td><a href="{{route('cart.destroy', $item->id)}}" class="btn btn-danger btn-sm"> DELETE</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Total Price:
        ${{Cart::session(auth()->id())->getTotal()}}
    </h3>
    <a class="btn btn-primary" href="{{route('cart.checkout')}}" role="button">Proceed To Checkout</a>
@endsection

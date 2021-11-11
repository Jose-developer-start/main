@extends('layouts.app')
@section('content')
<section class="pay-area">
   <div class="container" style="margin-top: 60px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tecnlogy BOX</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pagar</li>
            </ol>
        </nav>
       @if(\Cart::getTotalQuantity() > 0)
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron py-4 d-flex flex-column justify-content-center align-items-center">
                    <img class="logo-paypal" src="./images/paypal.png" alt="">
                    <p class="lead">Estas a punto de pagar la cantidad de:</p>
                    <form method="POST" action="{{ route('create-payment') }}">
                        @csrf
                        <div class="m-2">
                        <input type="hidden" name="amount" placeholder="Amount" value="{{ \Cart::getTotal() }}">
                        @if ($errors->has('amount'))
                            <span class="error"> {{ $errors->first('amount') }} </span>
                        @endif
                        </div>
                    <h4 class="text-center"><b>${{ \Cart::getTotal() }}</b></h4>
                    <hr class="my-2">
                    <button class="btn btn-primary btn-lg">Pay Now</button>
                </form>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-4 offset-md-4 text-center">
                    <h1>Carrito vacio</h1>
                    <img class="cart" src="{{ asset('./images/cart-empty.png') }}" alt="cart-empty">
                    <hr>
                    <a href="{{ url('/productos') }}" class="btn btn-outline-info">Agregar productos</a>

                    @if(session('sale_id'))
                    <a href="{{ route('factura') }}" target="_blank" class="btn btn-success">Factura de compra #{{ session('sale_id') }}</a>
                    @endif

                </div>
            </div>
        @endif
  </div>
@endsection
@extends('layouts.app')
@section('content')
<section class="pay-area">
   <div class="container">
    @if (session('error') || session('success'))
    <p class="{{ session('error') ? 'error':'success' }}">
     {{ session('error') ?? session('success') }}
    </p>
    @endif
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
               
               
            <h4>{{ \Cart::getTotal() }}</h4>
            <hr class="my-2">
            <button class="btn btn-primary btn-lg">Pay Now</button>
        </form>
        </div>
    </div>
  </div>
@endsection
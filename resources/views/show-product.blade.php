@extends('layouts.app')

@section('content')
<div class="container mb-4">
    <nav aria-label="breadcrumb" style="margin-top: 60px">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Tecnlogy BOX</a></li>
            <li class="breadcrumb-item active" aria-current="page">Producto</li>
            <li class="breadcrumb-item active" aria-current="page">Ver</li>
        </ol>
    </nav>
    <div class="row">
        @foreach ($product as $item)    
        <div class="col-12 col-sm-12 col-md-6">
            <div class="d-flex justify-content-center">
                <img class="product-item-img" src="{{asset('images/mouse.png')}}" alt="">
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 product-details">

            <h1 class="product-item-title">{{ $item->name }}</h1>
            <h2 class="product-item-detail">{{ $item->description }}</h2>
            <p>Sock: </p>

            <span class="product-item-old-price">${{ $item->sale_price -10 }}</span>
            <h5 class="product-item-price">${{ $item->sale_price }}</h5>
            <form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                <input type="hidden" value="{{ $item->name }}" id="name" name="name">
                <input type="hidden" value="{{ $item->description }}" id="details" name="details">
                <input type="hidden" value="{{ $item->sale_price }}" id="price" name="price">
                <input type="hidden" value="{{ $item->image }}" id="image" name="image">
                <input type="hidden" value="1" id="quantity" name="quantity">
                <button class="btn btn-success btn-block my-3" class="tooltip-test" title="add to cart">
                    <i class="fa fa-shopping-cart"></i> Agregar
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
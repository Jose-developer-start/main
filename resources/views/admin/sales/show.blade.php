@extends('admin.layout')

@section('title','ver información de la venta')

@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Información del pago realizado</h1>
      <p>Gestiona las ventas y información</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Menu</li>
      <li class="breadcrumb-item active"><a href="#">ventas</a></li>
    </ul>
  </div>
  @include('admin.partials.notify')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
          @foreach ($result as $key)
          
          <div class="d-flex justify-content-between mb-4">
            <p class="text-lead"><h5 class="d-inline">Nombre completo de comprador: </h5>{{ $key->name ." ".$key->surname }}</p>
            <a href="{{ route('sales.sales_index') }}" class="btn btn-sm btn-success">Regresar</a>
          </div>
          @php
            $paypal = json_decode($key->paypal_data);
          
          @endphp
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="card mb-3">
                <div class="card-header">
                  <h4>Información de la venta</h4>
                </div>
                <div class="card-body">
    
                  <p><b>Id: </b> {{ $paypal->id }}</p>
                  <p><b>Estado: </b> {{ $paypal->state }}</p>
                  <p><b>Método de pago: </b> {{ $paypal->payer->payment_method}}</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="card mb-3">
                <div class="card-header">
                  <h4>Información del cliente:</h4>
                </div>
                <div class="card-body">
    
                  <p><b>Email de Paypal: </b> {{ $paypal->payer->payer_info->email }}</p>
                  <p><b>Nombre completo: </b> {{ $paypal->payer->payer_info->first_name. " ".$paypal->payer->payer_info->last_name }}</p>
                  <p><b>Ciudad: </b> {{ $paypal->payer->payer_info->shipping_address->city }}</p>

                  <p><b>Código postal: </b> {{ $paypal->payer->payer_info->shipping_address->postal_code }}</p>
                  <p><b>Código de pais: </b> {{ $paypal->payer->payer_info->shipping_address->country_code }}</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4>Transacción: </h4>
                </div>
                <div class="card-body">
                  
                  @foreach ($paypal->transactions as $transaction)
                  
                  <p><b>Total:$ </b> {{ $transaction->amount->total }}</p>
                  <p><b>Tipo de moneda: </b> {{ $transaction->amount->currency }}</p>
                  <p><b>SubTotal:$ </b> {{ $transaction->amount->details->subtotal }}</p>
                  <p><b>Descuento:$ </b> {{ $transaction->amount->details->discount }}</p>
                  @endforeach
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4>Detalle de la compra:</h4>
                </div>
                <div class="card-body">
    
                  <p><b>Descripción: </b> {{ $transaction->description }}</p>
                  @foreach ($transaction->item_list->items as $item)
                  <p><b>Cantidad: </b> {{ $item->quantity }}</p>
                  
                  @endforeach
                  <p><b>Inicio de la compra: </b> {{ $paypal->create_time }}</p>
                  <p><b>Finalización de la compra: </b> {{ $paypal->update_time }}</p>
                </div>
              </div>
            </div>
          </div>
          
          @endforeach 
      </div>
    </div>
  </div>
</main>
@endsection
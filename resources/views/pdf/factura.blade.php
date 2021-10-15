<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Factura de compra</title>
  </head>
  <body>
      <div class="container-fluid">
          <h1 style="color: #d35656;font-size: 30px">FACTURA # {{ session('sale_id') }}</h1>
          <hr>
            <div style="font-family: sans-serif; font-size: 15px; color: #3d3535">
                <h3>Tecnology Box</h3>
                <p>San Salvador</p>
                
                <p><b>Cliente: </b>{{ Auth::user()->name }}</p>
                <p><b>Email: </b> {{ Auth::user()->email }} </p>
            </div>
              
        @php
            $index = 0;
            $date= "";
            $total = 0;
        @endphp
          <table class="table table-striped">
            <thead class="bg-info">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Productos</th>
                <th scope="col">Precio n.</th>
                <th scope="col">Descuento</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $sale)
                    
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $sale->name }}</td>
                    <td>${{ $sale->sale_price }}</td>
                    <td>%{{ $sale->discount }}</td>
                    <td>{{ $sale->quanty }}</td>
                    <td>${{ $sale->quanty * $sale->unit_price }}</td>
                </tr>
                @php
                  
                  $date = date("d-m-Y", strtotime($sale->date));

                  $total = $sale->payment;
                @endphp
                @endforeach
            </tbody>
          </table>
          <div>
            <p tyle="margin: 0px; padding: 0px">Total a pagar:<b> ${{ $total}}</b></p>
            <p tyle="margin: 0px; padding: 0px">Fecha de compra: <b>{{ $date }}</b></p>
            <span>Método de pago: <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" alt="logo-paypal" width="50"></span>
          </div>
          <hr>
          <div style="float: bottom">
            <b>Gracias por su compra</b>
          <p>Las promociones aplican durante las fechas establecidas en nuestra tienda</p>
          </div>
      </div>
      
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

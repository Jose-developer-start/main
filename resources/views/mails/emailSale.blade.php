<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura de compra</title>
    <style>
        .container{
            background: #f1f1f1;
            padding: 10px 5px;
        }
        h3{
            color: rgb(72, 72, 88);
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        p{
            color: #1b1b1b;
            line-height: 1.5
        }
        .txt-compra{
            font-family: 'Times New Roman', Times, serif;
            font-size: 2rem;
            text-align: center;
            display: block;
            color: #738794
        }

    </style>
</head>
<body>

    <div class="container">
        <h3>Hola, {{ Auth::user()->name ." ".Auth::user()->surname }}!!</h3>
        <br>
        <span class="txt-compra">Número de compra: #{{ session('sale_id') }}</span>
        <br>
        <p>Gracias por tus compras, te esperamos en nuestras tiendas para entregarte tus productos</p>


        <b>Attentamente: @Tecnology Box</b>
        
    </div>

</body>
</html>
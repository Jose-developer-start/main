@extends('layouts.app')

@section('title', 'Nosotros')
@section('content')

    <!-- la cabecera de la pagina-->
    <header>
        <div class="card3">
            <div class="card3-imagen ">
                <h1 class="letrafondo  hero__title ">
                    Technoly <span class="
               ">box</span>
                </h1>
            </div>
            <img alt="" class="card-imagenredonda " src="{{ asset('images/tienda_virtual_images/banner1.jpg') }}">

        </div>
    </header>
    <!-- boton flotante de whatsapp-->
    <a class="float"
        href="https://api.whatsapp.com/send?phone=50371381006&text=Hola,%20bienvenidos%20a%20nuestro%20%20WhasatsApp,%20realiza%20tu%20consuta,%20te%20atenderemos%20rapidamente."
        target="_blank">
        <i class="fab fa-whatsapp my-float fa-1x">
        </i>
    </a>
    <!-- ceramos el  flotante de whatsapp-->
    <section class="section-desing" id="1">
        <div class="container">
            <div class="contenedor1">
                <div class="triangulo">
                    <div class="div1_1" id="mostrar">
                        <div>
                        </div>
                        <h2>
                            Historia
                        </h2>
                        <p>
                            La empresa “Technology Box” fue fundada el 21 de Junio del año 2010 por cuatro personas 3
                            jóvenes y una señorita decidieron montar una pequeña venta de dispositivos electrónicos
                        </p>
                        <button class="btn btn-info" id="mostrar">
                            Ver más
                        </button>
                    </div>
                    <div class="div1">
                        <div class="div1-1">
                            <div class="div2">
                                <img src="{{ asset('images/nosotros/nosotros-.jpg') }}">

                            </div>
                            <div class="div3">
                                <img src="{{ asset('images/nosotros/tienda.jpg') }}">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" id="target" style="display:none">
                <div class="row text-center">
                    <div class="text-center pb-3 pt-3 ">
                        <h2 class="text-center pb-2 pt-2 h3 size-letra">
                            Trayectoria
                        </h2>
                        <p class="size-parrafo ">
                            Los orígenes de nuestra empresa se remontan a 2001 cuando cuatro jovenes José Miguel Deodanes
                            Pérez, José Cruz Zabaleta Cerén, Hilda Isabel Amaya y Castro Raul Stanley Cortez López uniendo
                            sus ahorros decidieron montar una pequeña venta de dispositivos electrónicos como memorias usb
                            mouse, teclados, cargadores etc,

                        </p>
                        <p class="size-parrafo">

                            Pocos meses despues compraron como mayoristas, además de ampliar la diversidad de productos y
                            marcas.
                            Presentaron su startup de negocio, consiguiendo accionistas y así aumentando la diversidad de
                            marcas y productos.
                            Diez años de experiencia en la venta de dispositivos informáticos y artículos tecnológicos de
                            oficina, hogar, escolar, entretenimiento, satisfaciendo las necesidades de los clientes.
                        </p>
                        <h2 class="text-center pb-2 pt-2 h3 size-letra">Ubicación geográfica</h2>

                        <p class="size-parrafo">La empresa se ubica en la Avenida los Diplomáticos San Jacinto
                            departamento de San Salvador El Salvador.
                        </p>

                    </div>
                    <!-- TARJETA-1 -->
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center p-2">
                        <div class="card card-border boreder-radio " style="width: 18rem;">


                        </div>
                    </div>
                    <!-- TARJETA-2-->
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center p-3">
                        <div class="card card-border boreder-radio" style="width: 18rem;">


                        </div>
                    </div>
                    <!-- TARJETA-3 -->
                    <div class="col-12 col-md-12 col-lg-4 d-flex flex-column align-items-center p-3">
                        <div class="card card-border boreder-radio" style="width: 18rem;">

                        </div>
                    </div>
                </div>
                <div class="text-center pb-3 pt-3">
                    <a id="ocultar">
                        <i class="fas fa-arrow-alt-circle-left fa-2x">
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    </html>

    </html>
    <section class="section-desing" id="mision">
        <div class="container">
            <div class="contenedor1">
                <div class="div_imagen">
                    <div class="div-imagen">
                        <h2 class="size-letra">
                            Misión.
                        </h2>
                        <p>
                            Ser una empresa de comercialización de productos tecnológicos e innovadores, reconocida por su
                            seriedad, solvencia y ética de trabajo que atienda las necesidades y exigencias de artículos
                            tecnológicos de oficina, hogar, escolar, entretenimiento, en el mercado nacional e
                            internacional, ofreciendo productos diferenciados por su calidad, accesibles al consumidor y de
                            buenas marcas.
                        </p>
                    </div>
                    <div class="div-imagen">
                        <img src="{{ asset('images/nosotros/articulos.jpg') }}">

                    </div>
                </div>
            </div>
            <div class="contenedor1">
                <div class="div_imagen">
                    <div class="div-imagen">
                        <img src="{{ asset('images/nosotros/electronicos.jpg') }}">

                    </div>
                    <div class="div-imagen">
                        <h2 class="size-letra">
                            Visión.
                        </h2>
                        <p>
                            Ser una empresa de referencia, que camina con el cambio de la tecnología y la sociedad, dando a
                            conocer las posibilidades de innovadores productos para ayudar a resolver problemas. Lograr que
                            nuestros clientes confíen, esta labor se debe desempeñar de forma ética y satisfactoria para
                            nosotros, nuestros clientes y el resto de la sociedad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-desing">
        <!-- TARJETAS 1-->
        <div class="container p-3">
            <div class="text-center pb-3 pt-3 ">
                <h2 class="text-center pb-2 pt-2 h3 size-letra ">
                    Productos
                </h2>
                <p class="text-center size-parrafo">
                    Nuestro stock de productos es variado .
                </p>
            </div>
            <!-- contenedor de la imagenes gemelas-->
            <div class="contenedor1">
                <div class="triangulo">
                    <!-- tamaño del div de las imagenes-->
                    <div class="div1">
                        <div class="div1-1">
                            <!-- div para poner las imagenes a la par-->
                            <div class="div2">
                                <!-- div que contiene la imagen pequeña-->
                                <img src="{{ asset('images/nosotros/usb.jpg') }}">

                            </div>
                            <div class="div3">
                                <!-- div que contiene la imagen grande-->
                                <img src="{{ asset('images/nosotros/almacenamiento-.jpg') }}">

                            </div>
                        </div>
                    </div>
                    <div class="div1_1">
                        <div>
                        </div>
                        <h2 class="">
                            Dispositivos de almacenamiento
                        </h2>
                        <p>
                            Entre los dispositivos más utilizados en el dia a dia se encuentra los siquientes: Dispositivos
                            de almacenamiento por medios magneticos, almacenamiento por medio óptico y dispositivos de
                            almacenamiento por medio electronico.
                        </p>
                    </div>
                </div>
            </div>
            <!--  otra div contenido de materiales-->
            <div class="contenedor1 pt-2 ">
                <div class="triangulo">
                    <div class="div1_1">
                        <div>
                        </div>
                        <h2 class="">
                            Dispositivos de entrada
                        </h2>
                        <p>
                            Los dispositivos periféricos de entrada son todos aquellos dispositivos que permiten introducir
                            datos o información en una computadora para que ésta los procese tales como teclado, punteros o
                            ratones, Micrófonos, cámara etc.
                        </p>
                    </div>
                    <div class="div1">
                        <div class="div1-1">
                            <div class="div2">
                                <img src="{{ asset('images/nosotros/audifono.jpg') }}">

                            </div>
                            <div class="div3">
                                <img src="{{ asset('images/nosotros/dispositivoentrada.jpg') }}">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-desing">
        <div class="container">
            <div class="row">
                <div class="text-center pb-3 pt-3 ">
                    <h2 class="text-center pb-2 pt-2 h3 size-letra">
                        Las mesjores Marcas.
                    </h2>
                    <p class="size-parrafo">

                        La tecnología avanza muy rápido, por eso Los productos que ofrece Technology Box, tenemos las marcas
                        más reconocidas Y mejores en tecnología.

                    </p>
                </div>
                <!-- TARJETA-1 -->
                <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center p-2">
                    <div class="card card-border boreder-radio" style="width: 18rem;">
                        <img alt="..." class="card-img-top size-imagen" src="{{ asset('images/nosotros/Dell.png') }}">

                    </div>
                </div>
                <!-- TARJETA-3 -->
                <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center p-3">
                    <div class="card card-border boreder-radio" style="width: 18rem;">
                        <img alt="..." class="card-img-top size-imagen" src="{{ asset('images/nosotros/logo-HP.png') }}">

                    </div>
                </div>
                <!-- TARJETA-3 -->
                <div class="col-12 col-md-12 col-lg-4 d-flex flex-column align-items-center p-3">
                    <div class="card card-border boreder-radio" style="width: 18rem;">
                        <img alt="..." class="card-img-top size-imagen" src="{{ asset('images/nosotros/chiston.png') }}">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-desing" id="personas">
        <div class="container pt-2">
            <div class="contenedor1">
                <div class="triangulo">
                    <div class="div1_1">
                        <div>
                        </div>
                        <h2>
                            Personas.
                        </h2>
                        <p>
                            Nuestra tienda cuenta con vendedores capacitados en el área de tecnología le atenderan
                            amablemete le deran asesoramiento,ofreciendo todos los servicios necesarios para que la compra
                            sea toda una experiencia única, ademas tenemos personal para servicio a domicilio.
                        </p>

                    </div>
                    <div class="div1">
                        <div class="div1-1">
                            <div class="div2">
                                <img src="{{ asset('images/nosotros/persona.jpg') }}">

                            </div>
                            <div class="div3">
                                <img src="{{ asset('images/nosotros/persona2.jpg') }}">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

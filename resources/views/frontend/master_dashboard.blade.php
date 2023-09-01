<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/assets/img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    @include('frontend.body.header')

    <main class = "main">
        @yield('main')
    </main>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{asset('frontend/assets/img/lugarst.png')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="display-3 text-capitalize text-white mb-3">¡BIENVENIDOS A GOODLIFE SRL!</h3>
                            <p class="mx-md-5 px-5">En GOODLIFE nos dedicamos a cuidar de tu bienestar y asegurar tu futuro financiero.</p>
                            <p class="mx-md-5 px-5">Descubre nuestros servicios médicos y asesoría en la ley de pensiones para una vida plena y segura.</p>
                            <p class="mx-md-5 px-5">Explora nuestra página web y conoce más sobre nuestro equipo de profesionales apasionados y dedicados a tu atención</p>
                            <p class="mx-md-5 px-5">Estamos aquí para escucharte y responder a tus necesidades de manera personalizada. ¡Tu bienestar es nuestra prioridad!</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Leer Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h1 class="mb-5">¿Qué nos diferencia del resto?</h1>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="display-3 text-capitalize text-white mb-3">Visión</h3>
                            <p class="mx-md-5 px-5">Ser una de las principales empresas líderes en Bolivia en la mejora de la calidad de vida de los colaboradores, incremento de la eficiencia del potencial humano de las organizaciones y haber generado un compromiso social empresarial que se traduce en un impacto positivo para los trabajadores, empleadores y Bolivia.</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel Start -->
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="display-3 text-capitalize text-white mb-3">Misión</h3>
                            <p class="mx-md-5 px-5">Apoyar a las organizaciones en la búsqueda del mejoramiento continuo de la calidad de vida de los trabajadores, mediante la oferta de servicios eficientes en Salud Ocupacional, Medicina Ocupacional, Seguridad e Higiene Ocupacional, Prevención en Salud, Ergonomía y Psicosociología laboral, promoviendo un concepto integral y social de la salud, impactando positivamente en el bienestar y salud de los trabajadores, optimizando su desempeño, mejorando su eficiencia laboral y la productividad de sus organizaciones.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="display-3 text-capitalize text-white mb-3">Valores</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="row justify-content-center text-center">
        <div class="col-lg-6">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Nuestros servicios</h6>
            <h1 class="mb-5">Asesoramiento legal</h1>
        </div>
    </div>
    <div class="owl-carousel service-carousel">
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/asesoramiento/invalidez.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Pensión por invalidez</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="asesoramientolegal.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/asesoramiento/jubilacion.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Pensión por jubilacion</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="asesoramientolegal.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/asesoramiento/retiroaportes.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Retiro de aportes</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="asesoramientolegal.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/asesoramiento/pensionmuerte.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Pensión por muerte</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="asesoramientolegal.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/asesoramiento/masahereditaria.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Masa hereditaria</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="asesoramientolegal.html">Leer más</a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="row justify-content-center text-center">
        <div class="col-lg-6">
            <h1 class="mb-5">Medicina</h1>
        </div>
    </div>
    <div class="owl-carousel service-carousel">
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/medicinageneral.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Medicina general</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="#">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/campimetria.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Campimetría</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="medicina.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/audiometria.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Audiometría</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="medicina.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/ecografia.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Ecografía</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="medicina.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/psicologia.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Psicología</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="medicina.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/espirometria.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Espirometría</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="medicina.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/laboratoriosclinicos.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Laboratorios clínicos</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="medicina.html">Leer más</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/assets/img/medicina/rayosx.png')}}" alt="">
            <div class="service-text text-center">
                <!--<h4 class="text-white font-weight-medium px-3">Rayos x</h4>-->
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="medicina.html">Leer más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    @include('frontend.body.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
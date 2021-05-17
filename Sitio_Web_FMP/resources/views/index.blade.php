@extends('pagina/base')

@section('appcss')
<!-- App favicon -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- App css -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('container')
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="page-title-alt-bg color-top"></div>
        <div class="page-title-box color-boton py-2 rounded">
            <h2 class="page-title text-white">Facultad Multidisciplinaria Paracentral</h2>
        </div> 
        </br>
        <!-- end page title -->               

        <div class="row">
            <div class="col-xl-12">
                <div class="card-box">
                    <h1 class="header-title mb-3">Facultad Multidisciplinaria Paracentral</h1>
                    <div class="row">
                        <div id="carouselExampleCaptions" class="carousel slide rounded" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner text-center">
                              <div class="carousel-item active">
                                 <img src="images/carrusel/image-1.jpeg" alt="Chicago" width="1145" height="800">
                                 
                              </div>
                              <div class="carousel-item">
                                <img src="images/carrusel/image-2.jpeg" alt="Chicago" width="1145" height="800">
                                
                              </div>  
                              <div class="carousel-item">
                                <img src="images/carrusel/image-3.jpeg" alt="Chicago" width="1145" height="800">
                                
                              </div>  
                              <div class="carousel-item">
                                <img src="images/carrusel/image-4.jpeg" alt="Chicago" width="1145" height="800">
                                
                              </div>                                                     
                              <div class="carousel-item">
                                <img src="images/carrusel/image-5.jpeg" alt="Chicago" width="1145" height="800">
                                
                              </div>  
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Siguiente</span>
                            </a>
                        </div>    
                        <!-- end col -->
                    </div> <!-- end row-->
                </div>  <!-- end card-box-->
            </div> <!-- end col -->         
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-8">
                <div class="card-box"> 
                    <h1 class="header-title mb-3">Noticias</h1>      
                    
                    <div class="border rounded p-2 my-3 media">
                        <img class="mr-3 rounded bx-shadow-lg" src="images/ues_noticia.jpg" alt="Generic placeholder image" height="80">
                        <div class="media-body">
                            <h5 class="mt-0">UES exige traspaso al MINED</h5>
                            Facultad Multidisciplinaria Paracentral urge legalizar a su nombre un terreno donado por exministro de educación.
                        </div>
                        <a href="Noticia.html" class="btn btn-light mt-3">Leer mas...</a>
                    </div>
                    <div class="border rounded p-2 my-3 media">
                        <img class="mr-3 rounded-circle bx-shadow-lg" src="images/ues_noticia.jpg" alt="Generic placeholder image" height="80" width="80">
                        <div class="media-body">
                            <h5 class="mt-0">UES exige traspaso al MINED</h5>
                            Facultad Multidisciplinaria Paracentral urge legalizar a su nombre un terreno donado por exministro de educación.
                        </div>
                        <a href="Noticia.html" class="btn btn-light mt-3">Leer mas...</a>
                    </div>
                    </br>
                </div> <!-- end card-box -->
            </div><!-- end col -->
            <div class="col-xl-4">                        
                <div class="card-box "> 
                    <h1 class="header-title mb-3 text-center">Canales Digitales</h1>
                    <div class="col">
                        <a href="" class="btn btn-danger btn-block mt-3 text-left">Campus Virtual</a>
                        <a href="" class="btn btn-danger btn-block mt-3 text-left">Expediente en linea</a>                      
                        <a href="" class="btn btn-danger  btn-block mt-3 text-left">Correo institucional</a>                           
                        <a href="https://www.facebook.com/DistanciaFMP" class="btn btn-danger  btn-block mt-3 text-left">Universidad en linea / Cede Paracentral</a> 
                        <a href="https://www.facebook.com/celeues" class="btn btn-danger btn-block mt-3 text-left">CELEUES</a>
                    </div>                                                
                </div> <!-- end card-box-->                        
            </div> <!-- end col-->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xl-8">
                <div class="card-box"> 
                    <h1 class="header-title mb-3">Eventos</h1>                           
                    <div class="media p-2 border rounded media">
                        <img class="mr-3 rounded bx-shadow-lg" src="images/users/avatar-4.jpg" alt="Generic placeholder image" height="80">
                        <div class="media-body">
                            <h5 class="mt-0">Louis P. Wheeler</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, at, tempus viverra turpis.
                        </div>
                        <a href="" class="btn btn-light mt-3">Leer mas...</a>
                    </div>
                    </br>
                    <div class="media p-2 border rounded">
                        <img class="mr-3 rounded-circle bx-shadow-lg" src="images/users/avatar-4.jpg" alt="Generic placeholder image" height="80">
                        <div class="media-body">
                            <h5 class="mt-0">Louis P. Wheeler</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, at, tempus viverra turpis.
                        </div>
                        <a href="" class="btn btn-light mt-3">Leer mas...</a>
                    </div>
                    </br>
                    
                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card-box"> 
                    <h1 class="header-title mb-3 ">Sitios de interes</h1>                         
                    
                    <div class="row">
                        <div class="col order-first">
                            <p class="header-title">Facultades</p>                                   
                            <div class="p-1"><a href="https://humanidades.ues.edu.sv/">Facultad de Ciencias y Humanidades</a></div>
                            <div class="p-1"><a href="http://www.fmoues.edu.sv/">Facultad Multidisciplinaria de Oriente</a></div>
                            <div class="p-1"><a href="http://www.fia.ues.edu.sv/">Facultad de Ingeniería y Arquitectura</a></div>
                            <div class="p-1"><a href="https://www.agronomia.ues.edu.sv/">Facultad de Agronomía</a></div>
                            <div class="p-1"><a href="http://www.odontologia.ues.edu.sv/">Facultad de Odontología</a></div>
                            <div class="p-1"><a href="http://www.medicina.ues.edu.sv/">Facultad de Medicina</a></div>
                            <div class="p-1"><a href="https://humanidades.ues.edu.sv/">Facultad de Ciencias y Humanidades</a></div>
                            <div class="p-1"><a href="#">Facultad de Jurisprudencia y Ciencias Sociales</a></div>
                            <div class="p-1"><a href="#">Facultad de Química y Farmacia</a></div>
                            <div class="p-1"><a href="#">Facultad de Ciencias Naturales y Matemática</a></div>
                            <div class="p-1"><a href="#">Facultad Multidisciplinaria de Occidente</a></div>
                            <div class="p-1"><a href="#">Facultad de Ciencias Económicas</a></div>
                        </div>
                        <div class="col">
                            <p class="header-title">Secretarias</p>     
                            <div class="p-1"><a href="#">Secretaría General</a></div>
                            <div class="p-1"><a href="#">Secretaría de Proyección Social</a></div>
                            <div class="p-1"><a href="#">Secretaría de Comunicaciones</a></div>
                            <div class="p-1"><a href="#">Secretaría de Arte y Cultura</a></div>
                            <div class="p-1"><a href="#">Secretaría de Bienestar Universitario</a></div>
                            <div class="p-1"><a href="#">Secretaría de Relaciones</a></div>
                            <div class="p-1"><a href="#">Secretaría de Planificación</a></div>
                            <div class="p-1"><a href="#">Secretaría de Investigaciones Científicas</a></div>
                            <div class="p-1"><a href="#">Secretaría de Asuntos Académicos</a></div>
                        </div>
                        <div class="col order-last">
                            <p class="header-title">Instituciones</p>
                            <div class="p-1"><a href="#">Consejo Superior Universitario</a></div>
                            <div class="p-1"><a href="#">Asamblea General Universitaria</a></div>
                        </div>
                    </div>                            
                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- end container -->
</div>    
<!-- end wrapper -->
@endsection

@section('footerjs')
<!-- Vendor js -->
<script src="{{ asset('js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/app.min.js') }}"></script>
@endsection
@extends('base')

@section('content')

@if(!Request::ajax())

<!-- Slider -->
<section id="slider_wrapper" class="slider_wrapper full_page_photo">
     <div id="main_flexslider" class="flexslider">
          <ul class="slides">

               <li class="item" style="background-image: url(assets/images/1.jpg)">
                    <div class="container">
                         <div class="carousel-caption">
                              <h1>¡Bienvenidos a <strong>la primera red social {ambiental}!</strong><br></h1>
                              
                              <p class="lead skincolored">Jus<strong>{Think}</strong>Green es una red social <strong>ecológica</strong> e <strong>interactiva</strong>,  enfocada en compartir conocimientos, experiencias y diferentes saberes basados en el mundo ambiental y ecológico.</p>    
                    </div>
               </li>

               <li class="item" style="background-image: url(assets/images/2.jpg)">
                    <div class="container">
                         <div class="carousel-caption">
                              <h1>¡Ayúdanos a <strong>salvar</strong><br>
                                   nuestro planeta, a <strong>{pensar}</strong> más <strong style="color: #2d9c29">verde</strong>!</h1>
                             
                              <p class="lead skincolored">Encuentra todas las <strong>herramientas</strong> que necesitas para <strong>{salvar}</strong> nuestro hogar.</p>
                         </div>
                    </div>
               </li>

               <li class="item" style="background-image: url(assets/images/3.jpg)">
                    <div class="container">
                         <div class="carousel-caption">
                              <h1 class="skincolored" style=""><strong>¡Únete ahora</strong> es totalmente <strong>grátis!</strong><br>
                                   ¡Y comienza a <strong>{Salvar}</strong> nuestro <strong>hogar!</strong></h1>
                             @if (!Auth::check())
                              <p class="lead">Regístrarte no te tomará más de un momento <a href="{{ URL::to('Registrarse')}}"><strong> ¡Regístrate ahora!</strong></a> </p>
                              @else
                              <p class="lead">¡Y tú que ya te has únido <a href="services.html"><strong> Sigue pensando verde!</strong></a> </p>
                              @endif          
                         </div>
                    </div>
               </li>

          </ul>
     </div>
</section>

<!-- /Slider -->

<div class="main">
     <div class="container">
  
          <section class="portfolio_teasers_wrapper">
               <h2 class="section_header fancy centered">Últimas publicaciones<small>Encuentra temas de tu agrado</small></h2>
               <div class="portfolio_strict row">

                    <div class="col-sm-4 col-md-4">
                         <div class="portfolio_item wow animated flipInX"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(assets/images/portfolio/p4.jpg)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum....</p>
                                        <div class="view_button">View</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">The {re}start Project</a></h3>
                                   <p>Design</p>
                              </div>
                         </div>
                    </div>
                    
                    <div class="col-sm-4 col-md-4">
                         <div class="portfolio_item wow animated flipInX"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(assets/images/portfolio/a5.jpg)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum....</p>
                                        <div class="view_button">View</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Colorfull iOS Apps</a></h3>
                                   <p>Development</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                         <div class="portfolio_item wow animated flipInX"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(assets/images/portfolio/p1.jpg)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum....</p>
                                        <div class="view_button">View</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">POETIC Magazine</a></h3>
                                   <p>Illustrations</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

          <section class="clients_section wow animated fadeInUp">
               <h2 class="section_header elegant centered">Patrocinadores:<small> </small></h2>
               <div class="clients_list"> 
               <a href="#"><img src="assets/images/clients/exito.png" alt="client"></a> 
               <a href="#"><img src="assets/images/clients/auces.png" alt="client"></a> 
               <a href="#"><img src="assets/images/clients/health.png" alt="client"></a> 
               <a href="#"><img src="assets/images/clients/tienda.png" alt="client"></a> 
               <a href="#"><img src="assets/images/clients/eps.png" alt="client"></a> </div>
          </section>
     </div>
     
</div>
@endif
@stop
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Estilo CSS  Basico -->
      @include('home.homecss')
      
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')
         <!-- banner section start -->
      @include('home.banner')
         <!-- banner section end -->

      </div>
      <!-- header section end -->
       
      <!--Projects tittle-->

      <div class="services_section layout_padding">
        <div class="container">
           <h1 class="services_taital">Plumbing</h1>
           <p class="services_text">Este es el ejemplo de pagina galeria para Plumbing deje comentarios en el codigo recuerda que los estilos se ubican en el archivo style.css ubicado en la carpeta public/css/styles.css</p>
        </div>

           <!--Imagenes-->
           <!--cada div maneja una clase de estilo .css ubicada en el archivo style.css-->
            <!--como observas estas imagenes usan la clase "service_section_3  para centrar las imagenes automaticamnete " -->
           <div class="services_section_3">
            <div class="row">
               <div class="col-md-6">
                 <!--1er imagen-->
                 <!--ten cuidado con las direcciones de las imagenes-->
                  <!--como observas estas imagenes usan la clase "service_img2"  para centrar las imagenes automaticamnete " -->
                  <div><img src="images/projects/project-1.png" class="services_img2"></div>
                  <!--Si vas a acomodar imagenes de otras formas crea otra clase para esa configuracion para no alterar todas las demas -->
               </div>
               <!--2da imagen-->
               <div class="col-md-6">
                  <div><img src="images/projects/project-2.png" class="services_img2"></div>
                  
               </div>
               <!--3er imagen-->
               <div class="col-md-6">
                  <div><img src="images/projects/project-3.png" class="services_img2"></div>
                 
               </div>
               <!--4ta imagen-->
               <div class="col-md-6">
                  <div><img src="images/projects/project-4.png" class="services_img2"></div>
                 
               </div>
               <!--5ta imagen-->
               <div class="col-md-6">
                  <div><img src="images/projects/project-5.png" class="services_img2"></div>
                 
               </div>
               <!--6ta imagen-->
               <div class="col-md-6">
                  <div><img src="images/projects/project-6.png" class="services_img2"></div>
                 
               </div>
            </div>
         </div>
      
      

      

      

       <!-- request section start -->
       @include('home.request')
       <!-- request section end -->
 

     
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2025 All Rights Reserved. Design by <a href="https://html.design">EMS TECHNOLOGYC SOLUTIONS</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>
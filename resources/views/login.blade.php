<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>POS Dash | CleverCode</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/remixicon/fonts/remixicon.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/@icon/dripicons/dripicons.css')}}">
      
      <link rel='stylesheet' href="{{asset('vendor/fullcalendar/core/main.css')}}" />
      <link rel='stylesheet' href="{{asset('vendor/fullcalendar/daygrid/main.css')}}" />
      <link rel='stylesheet' href="{{asset('vendor/fullcalendar/timegrid/main.css')}}" />
      <link rel='stylesheet' href="{{asset('vendor/fullcalendar/list/main.css')}}" />
      <link rel="stylesheet" href="{{asset('vendor/mapbox/mapbox-gl.css')}}">  
    </head>
<body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-7 align-self-center">
                              <div class="p-3">
                                 <h2 class="mb-2">Iniciar sesión</h2>
                                 <!-- <p>Login to stay connected.</p> -->
                                 <form>
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="email" placeholder=" ">
                                             <label>Usuario</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" ">
                                             <label>Contraseña</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label control-label-1" for="customCheck1">Recuérdame</label>
                                          </div>
                                       </div>
                                       <!-- <div class="col-lg-6">
                                          <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                                       </div> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ingresar</button>                                   
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-5 content-right">
                              <img src="{{asset('images/login/01.png')}}" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('js/backend-bundle.min.js')}}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{asset('js/flex-tree.min.js')}}"></script>
    <script src="{{asset('js/tree.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('js/table-treeview.js')}}"></script>
    
    <!-- Masonary Gallery Javascript -->
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    
    <!-- Mapbox Javascript -->
    <script src="{{asset('js/mapbox-gl.js')}}"></script>
    <script src="{{asset('js/mapbox.js')}}"></script>
    
    <!-- Fullcalender Javascript -->
    <script src="{{asset('vendor/fullcalendar/core/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/daygrid/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/timegrid/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/list/main.js')}}"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('js/sweetalert.js')}}"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="{{asset('js/vector-map-custom.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('js/customizer.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('js/chart-custom.js')}}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{asset('js/slider.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
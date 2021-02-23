<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body>
        <!-- <div id="loading">
            <div id="loading-center">
            </div>
        </div> -->

    <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">

        <!-- <div class="font-sans text-gray-900 antialiased"> -->
                    {{ $slot }}
        <!-- </div> -->
               </div>
            </div>
         </div>
      </section>
    </div>
    </body>
</html>

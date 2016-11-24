<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>@yield('title','Default')| Panel de administracion</title>
<meta charset="utf-8" />
<link rel="stylesheet" type=text/css href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" />

 
<body>
    @include('admin.template.partials.nav')
    <section>
        @yield('title','Default')
   
        @include('flash::message')
        @yield('content')
    </section>
   
     <!--incluyendo jquery -->
    <script src="{{asset('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
   
    <!--incluyendo jscript -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    
</body>
</html>
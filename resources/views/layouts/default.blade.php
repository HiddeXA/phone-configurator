<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div class="container">
   <header class="row bg-primary rounded-bottom text-light">
       @include('includes.header')
   </header>
   <div id="main" class="row justify-content-center bg-light border border-dark rounded m-3 p-3">
           @yield('content')
   </div>
   <footer class="row bg-primary rounded-top text-light">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>
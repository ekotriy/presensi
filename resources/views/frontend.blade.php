<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

  <div class="container">
    <!-- Outer Row -->
    @yield('section')
    <!-- end outer row -->
  </div> 
  <!-- end container -->

@include('layouts.js')

@yield('js')
</body>

</html>

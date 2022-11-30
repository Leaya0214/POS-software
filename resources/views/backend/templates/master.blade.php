
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.head')

    <!-- vendor css -->
    @include('backend.includes.css')
 
  </head>

  <body>

    @include('backend.includes.leftbar')

    @include('backend.includes.topbar')
 
    @include('backend.includes.rightbar')
    
    @yield('dashboard')
    <div class="br-mainpanel">
    <div class="container">  
      <div class="row ">
        <div class="col-md-12 mt-2">
          @yield('content')  
    </div> 
  </div>
  @include('backend.includes.footer')
</div>
    </div>
    @include('backend.includes.scripts')
  </body>
</html>



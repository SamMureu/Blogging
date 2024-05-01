<!DOCTYPE html>
<html>
  <head> 
    @include('homeadmin.css')
  </head>
  <body>
    
    @include('homeadmin.adminheader')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('homeadmin.adminsidebar')
      <!-- Sidebar Navigation end-->
    </div>
       @include('homeadmin.adminfooter')
    
  </body>
</html>
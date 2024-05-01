
<!DOCTYPE html>
<html>
  <head> 
    @include('homeadmin.css')
 <style type="text/css">
    .post_title
    {
        font-weight: bold;
        text-allign: center;
        font-size: 30px;
    }
.div_center
{
       text-align: center;
       padding: 30px;
}
.lable{
        display: inline-block;
        width: 200px
    }
    </style>
   
  </head>
  <body>
    
    @include('homeadmin.adminheader')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('homeadmin.adminsidebar')
     <div class="page-content">
      <h1 class="div_center">Add Post</h1>
      <div>
        <form action="{{}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="div_center">
            @if (session()->has('message'))
                     
            <div class="alert alert-success"> 
                <button type="button" class="close"data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
                    
                
            </div>                
            @endif
                    <label  class="label" >Post title</label>
                    <input type="text" name="title">

                
            </div>
            <div class="div_center">
            
                    <label class="label" >Post description</label>
                    <textarea name="description"></textarea>

                                <div class="div_center">
                
                        <label class="label" >Add Image</label>
                        <input type="file" name="image">
                    
                </div>
                <div class="div_center">
                
                        
                        <input type="submit" class="btn btn-primary">
    
                    
                </div>
            </div>
        </form>
      </div>
        
    </div>
    </div>

       @include('homeadmin.adminfooter')
  </body>
</html>


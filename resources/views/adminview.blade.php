<!DOCTYPE html>
<html>
  <head> 
    @include('homeadmin.css')
    <style> 
  .table-dg {
    text-align: center;
    border: 1px solid white;
    width: 90% ;
    padding: 40px;
    
    }
    .img-dg{
      height: 50px;
      width: 80px;
    }

    .th-dg{
      background-color: skyblue;
    }
  </style>
  </head>
  <body>
    
    @include('homeadmin.adminheader')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('homeadmin.adminsidebar')
     <div class="page-content">
      <h1 style="center-allign">View Post</h1>
    
<div>
<table class="table-dg">
  <tr class="th-dg">
  <th>Post title</th>
  <th>post description</th>
  <th>Post by</th>
  <th>user type</th>
  <th>post status</th>
  <th>image</th>
  <th>delete</th>
  <th>update</th>
  </tr>
  @foreach ($view as $view)
    
  
  <tr>
  <td>{{$view->title}}</td>
  <td>{{$view->description}}</td>
  <td>{{$view->name}}</td>
  <td>{{$view->usertype}}</td>
  <td>{{$view->post_status}}</td>
  <td>
    <img class="img-dg" src="postimage/{{$view->image}}">
  </td>
<td>
   <a href="{{url('delete_post',$view->id)}}" class="btn btn-danger" >Delete</a></td>

  </td>
</td>
<td> <a href="{{url('update_post',$view->id)}}" class="btn btn-success" >Update</a></td>

  </td>
  @endforeach
  
</table>


</div>
</div>

</div>

       @include('homeadmin.adminfooter')
      
  </body>
</html>
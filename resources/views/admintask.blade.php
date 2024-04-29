
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
      <form action="{{ route('admintask.assign') }}" method="POST">
        @csrf
        <div>
            <label for="user_id">Select User:</label>
            <select name="user_id" id="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="description">Task Description:</label>
            <textarea name="description" id="description" rows="4"></textarea>
        </div>
        <button type="submit">Assign Task</button>
    </form>
    
      
       @include('homeadmin.adminfooter')
  </body>
</html>



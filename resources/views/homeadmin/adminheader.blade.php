<header class="header">   
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">WELCOME</strong><strong>TO</strong><DASHBOARD>ADMIN </strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
         
         
         
         
            <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        
          <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
            <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                <div class="progress">
                  <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                </div></a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                <div class="progress">
                  <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                </div></a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                <div class="progress">
                  <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                </div></a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                <div class="progress">
                  <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                </div></a><a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                <div class="progress">
                  <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
            </div>
          </div>
          <!-- Tasks end-->
          <!-- Megamenu-->
      
                    <!-- Megamenu end     -->
          <!-- Languages dropdown    -->
          
            @if (Route::has('login'))
            @auth
            
            <a href="{{route('task.view')}}">Task</a>
            <a href="{{route('profile.edit')}}">Profile</a>
            
            
           
           <form action="logout" method="POST">
              @csrf <!-- Add this if you're using Laravel's CSRF protection -->
              <button type="submit">Logout</button>
          </form>
          
           
            
        @else
        
            
            <li><a href="{{route('login')}}">login</a></li>
            <li><a href="{{route('register')}}">Register</li>
             @endauth
              @endif
        </div>
      </div>
    </nav>
  </header>
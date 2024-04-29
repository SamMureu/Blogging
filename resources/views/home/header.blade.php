<div class="header_main">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="index.html"><img src="images/design.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="index.html ">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                  <li><a href="contact.html">login</a></li>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    <div class="container-fluid">
       <div class="logo"><a href="index.html"><img src="images/design.png"></a></div>
       <div class="menu_main">
          <ul>
             <li class="active"><a href="index.html">Home</a></li>
             <li><a href="about.html">About</a></li>
             <li><a href="services.html">Services</a></li>
             <li><a href="blog.html">Blog</a></li>
             @if (Route::has('login'))
             @auth
             <li><a href="{{route('task.view')}}">Task</a></li> 
           </button>
           <li><a href="{{route('profile.edit')}}">Profile</a></li>
             
            <li> <div>{{ Auth::user()->name }}</div></li>
           <li> <form action="logout" method="POST">
               @csrf <!-- Add this if you're using Laravel's CSRF protection -->
               <button type="submit">Logout</button>
           </form></li>
           
            
             
         @else
         
             
             <li><a href="{{route('login')}}">login</a></li>
             <li><a href="{{route('register')}}">Register</li>
              @endauth
               @endif
         
            </ul>
       </div>
    </div>
 </div>
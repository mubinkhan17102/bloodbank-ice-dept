<nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">ICE BLOOD BANK</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        
      </ul>
      
      <ul class="navbar-nav form-inline my-2 my-lg-0">
        @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('search')}}">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('donor')}}">Donors</a>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (Session::has('user_name'))
                    {{Session::get('user_name')}}
                @endif
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                <a class="dropdown-item" href="{{url('profile')}}"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
      
                <a class="dropdown-item" href="{{url('update')}}"><i class="fa fa-edit" aria-hidden="true"></i>
      Update Profile</a>
      
                <a class="dropdown-item" href="{{url('logout')}}">
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
      
      Logout</a>
                </div>
            </li>
          @else
            
          <li class="nav-item">
            <a class="nav-link" href="{{url('signin')}}">Signin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('donate')}}">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">About Us</a>
          </li>
          @endif
  
      </ul>
    </div>
  </nav>
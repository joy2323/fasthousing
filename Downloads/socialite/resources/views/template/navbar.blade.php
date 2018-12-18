<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

 <img src="{{asset('/svg/accusoft.svg')}}" class="navbar-brand" alt="chat" id="chat">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#profile" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="profile">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">

       <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search for friends" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </li>

      <li class="nav-item">

        <i class="fas fa-bell"></i>

      </li>

      <li class="nav-item">

       <a href="{{route('friends')}}"><i class="fas fa-comments"></i></a>
    
       
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ Auth::user()->user_name }}
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('Logout') }}
         </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>
       </div>
     </li>
    </ul>
  </div>
</nav>

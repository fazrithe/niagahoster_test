<div class="fz-tophead">
        <span class="black-text text-darken-2"><li class="material-icons">local_phone</li> 0282-xxxxxx</span>  
        <span class="black-text text-darken-2"><li class="material-icons">chat</li> Live Chat</span>
</div>
<nav class="white lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo"><img src="{{ asset('images/logo.png') }}"></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="{{ url('/transaction/0') }}"><span class="blue-text text-darken-2"><i class="material-icons">add_shopping_cart
</i></span></a></li>
        @if (Route::has('login'))
            @auth
            <li><a href="{{ url('/home') }}"><span class="blue-text text-darken-2">Home</span></a></li>
            @else
            <li><a href="{{ route('login') }}"><span class="blue-text text-darken-2">Login</span></a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}"><span class="blue-text text-darken-2">Register</span></a></li>
            @endif
            @endauth
        @endif
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#"><span class="blue-text text-darken-2">Navbar Link</span></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
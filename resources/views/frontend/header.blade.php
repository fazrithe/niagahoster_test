<div class="fz-tophead">
  <div class="container">

    <div class="fz-topheadcenter">
      <a class="fz-topheadcontent"><i class="fas fa-phone-alt"></i> 0282-xxxxxx</a>
      <a class="fz-topheadcontent"><i class="fas fa-comment-alt"></i> Live Chat</a>
    </div>

  </div>
        <!-- <span class="black-text text-darken-2"><li class="material-icons">local_phone</li> 0282-xxxxxx</span>  
        <span class="black-text text-darken-2"><li class="material-icons">chat</li> Live Chat</span> -->
</div>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
<nav class="white lighten-1">
    <div class="nav-wrapper container">
    <a id="logo-container" href="{{ url('/') }}" class="brand-logo"><img src="{{ asset('images/logo.png') }}"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse black"><i class="material-icons">menu</i></a>
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
      <ul class="side-nav" id="mobile-demo">
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
    </div>
  </nav>
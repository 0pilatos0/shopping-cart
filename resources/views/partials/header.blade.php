<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('product.index') }}">Webshop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-map"></i> Categorieën
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('product.index', ['id' => 1])}}">Categorie 1</a>
            <a class="dropdown-item" href="{{ route('product.index', ['id' => 2])}}">Categorie 2</a>
            <a class="dropdown-item" href="{{ route('product.index', ['id' => 3])}}">Categorie 3</a>
            <a class="dropdown-item" href="{{ route('product.index', ['id' => 4])}}">Categorie 4</a>
            <a class="dropdown-item" href="{{ route('product.index', ['id' => 5])}}">Categorie 5</a>
        </div>
    </div>
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> User Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if (Auth::check())
          <a class="dropdown-item" href="{{ route('user.profile')}}">User Profile</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('user.logout')}}">Logout</a>
            @else
            <a class="dropdown-item" href="{{ route('user.signup')}}">Sign up</a>
            <a class="dropdown-item" href="{{ route('user.signin')}}">Sign in</a>
          @endif

        </div>
    </div>
    <div class="nav-item">
        <a class="nav-link" href="{{route('product.shoppingCart')}}"><i class="fas fa-shopping-cart"></i> shopping cart
          <span class="badge badge-secondary">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
        </a>
    </div>
    
  </div>
</nav>

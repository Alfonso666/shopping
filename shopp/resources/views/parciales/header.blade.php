<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('producto.index')}}">Shopping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('producto.index')}}"><i class="fa fa-home" aria-hidden="true"></i> Productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('producto.shoppingCart')}}">
            <i class="fa fa-shopping-cart"></i> Ir al Carrito
            @if(Session::has('carro'))
                <span class="badge badge-primary badge-pill"> {{Session::has('carro') ? Session::get('carro')->cantidad_total:''}}</span>
            @else
                <span ></span>
            @endif
        </a>
      </li>
      <li class="nav-item dropdown">
        @if(Auth::check())
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i> {{ Auth::user()->email}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!--  @if(Auth::check())-->
                  <a class="dropdown-item" href="{{route('usuario.perfil')}}">Mi Perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('usuario.salir')}}">Salir</a>
              <!--@endif-->
            </div>
        @else
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> Mi Cuenta
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('usuario.registro')}}">Registrarme</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('usuario.inicio')}}">Iniciar Sesión</a>
            </div>
        @endif
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar Producto" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

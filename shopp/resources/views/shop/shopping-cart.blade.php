@extends('layouts.master')

@section('titulo')
    Shopping cart
@endsection

@section('contenido')
</br>
<div class="container-fluid" >
    <center><h3>Productos añadidos a su carrito</h3></center>
</div>
  <div class="contenido">
    @if(Session::has('carro'))
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 col-sm-offset-12">
                <ul class="list-group">
                   @foreach($productos as $producto)
                        <li class="list-group-item">
                            <span class="badge badge-primary badge-pill">{{$producto['cantidad_total']}}</span>
                            <strong>{{$producto['item']['titulo']}}</strong>
                            <span class="badge badge-success badge-pill">${{$producto['precio']}}</span>

                            <div class="btn-group pull-right" role="group">
                              <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Acciones
                              </button>
                              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Eliminar de la Lista</a>
                                <a class="dropdown-item" href="#">Agregar Más</a>
                              </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--Informacion costo total -->
      </br>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 col-sm-offset-12">
                <strong> Total: ${{ $total_precio }}</strong>
            </div>
        </div>
      </br>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 col-sm-offset-12">
                <a href="{{route('pagar')}}" type="button" class="btn btn" name="button">Pagar</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 col-sm-offset-12">
                <h2>No se encuentran items en el carrito</h2>
            </div>
        </div>
    @endif
  </div>
@endsection

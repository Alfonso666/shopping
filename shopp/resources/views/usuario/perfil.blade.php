@extends('layouts.master')
@section('contenido')

<div class="row">
      <div class="contenido">
          <div class="col-md-4 col-sm-12  col-xs-12 col-md-offset-4  col-sm-offset-4 col-xs-offset-4  ">
              @if(Auth::check())
                  <h1>Hola, <b>{{Auth::user()->email}}</b> Este sera tu perfil </h1>
                  <p>Puedes revisar todos los productos, accediendo al menu de navegación donde encontraras: </p>
                  <ul>
                    <li>Productos</li>
                    <li>Ver tu carrito</li>
                  </ul>
                  <h4>Tambien puedes acceder haciendo un click en el siguiente botón</h4>
                  <a href ="{{route('producto.index')}}" class="btn btn-primary"> Ir de compras</a>
              @else
                  <p>Lo sentimos no te encuentras registrado</p>
              @endif
          </div>
      </div>
</div>
@endsection

@extends('layouts.master')

@section('titulo')
    Shopping cart
@endsection

@section('contenido')
<!-- Mostrar el detalle de un producto -->
<div class="detalle-producto">
    <div class="row"> <!--Start row -->
          @if($producto)
              <div class="col-md-5">
                <a href="#">
                  <img class="img-fluid rounded mb-3 mb-md-0" src="{{$producto->imagen}}" alt="">
                </a>
              </div>
              <div class="col-md-7">
                  <div class="card-body">
                    <h1>{{$producto->titulo}}</h1>
                    </br>
                    <h4>Precio del Producto: $ <span class="badge badge-primary badge-pill" >{{$producto->precio}}</span></h4>
                    <p>{{$producto->descripcion}}</p>
                    </br>
                    <a href="{{route('producto.agregarCarrito',['id'=>$producto->id])}}" class="btn btn-secondary  ">Agregar al carrito</a>
                 </div>
             </div>
          @endif
      </div><!-- /.row -->
</div>


@endsection

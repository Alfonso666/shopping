@extends('layouts.master')

<!--Contenido del titulo -->
@section('titulo')
  Shopping
@endsection

<div id="carousel" class="carousel slide " data-ride="carousel>
  <ol class="carousel-indicators">

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{!! asset('src/imagenes/portada.jpg') !!}" alt="figuras de Marvel-1">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{!! asset('src/imagenes/portada2.jpg') !!}" alt="figuras de Marvel-1">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{!! asset('src/imagenes/portada3.jpg') !!}" alt="figuras de Marvel-1">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> 
</div>

<!--Contenido de la page -->
@section('contenido')
@if(Session::has('success'))
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 col-sm-offset-12">
            <div class="charge-message" class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    </div>
@endif
</br>
<center><h1><i>Productos</i></h1></center>
</br>
<div class="row"> <!--Start Row -->
    <div class="col-lg-2 col-md-12 col-sm-12  col-xs-12">

        <h3 class="my">Categorias</h3>
        <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
        </div>

    </div>
    <!-- /.col-lg-3 -->
    <div class="col-lg-9 col-md-4"> <!--Start Col -->
        @foreach($productos->chunk(4) as $productoChunk)
            <div class="row"> <!-- Start Row-->
                @foreach($productoChunk as $producto)
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{$producto->imagen}}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('shop.detalle',['id'=>$producto->id])}}">{{$producto->titulo}}</a>
                                </h4>
                                <h5 class="price"> $  {{$producto->precio}}</h5>
                                <p class="card-text">{{$producto->descripcion}}</p>
                                <div class="clear-fix">
                                  <a href="{{route('producto.agregarCarrito',['id'=>$producto->id])}}" type="button" class="btn btn pull-right" role="button">Añadir al carrito</a>
                                  <!--<a href="#" type="button" class="btn btn-primary" role="button"> Ver Más</a>-->
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>  <!-- /.row -->

        @endforeach
    </div> <!-- /.col-lg-9 -->
</div> <!-- /.row -->

@endsection

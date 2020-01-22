@extends('layouts.master')

@section('titulo')
    Shopping cart
@endsection

@section('contenido')
<div class="contenido-tarjeta">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 col-sm-offset-12">
            <h2> Pagar</h2>
            <h4>Tu Total: ${{$total}}</h4>

            <div class="charge-error" class="alert alert-danger {{!Session::has('error')}} ? 'hidden' : ''"></div>
            {{Session::get('error')}}
            <form  action="{{route('pagar')}}" method="post" id="pagar-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="nombre"> Nombre </label>
                            <input id="nombre" type="text" name="nombre" class="form-control" required>
                        </div>
                    </div>
                  </br>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="direccion"> Dirección </label>
                            <input id="direccion" type="text" name="direccion"  class="form-control" required>
                        </div>
                    </div>
                  </br>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="tarjeta">Propietario de Tarjeta </label>
                            <input id="nombre-tarjeta"type="text" name="tarjeta"  class="form-control" required>
                        </div>
                    </div>
                  </br>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="ntarjeta">N° Tarjeta </label>
                            <input id="ntarjeta"type="text" name="ntarjeta"  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="expiracion">Més de Expiración</label>
                            <input id="mExpiracion"type="text" name="expiracion"  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="expiracion">Año de Expiración</label>
                            <input id="aExpiracion" type="text" name="expiracion"  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <input id="cvc" type="text" name="cvc"  class="form-control" required>
                        </div>
                    </div>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-success" name="button">Completar la Compra</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<!--<script src="src/js/jquery.js"></script>-->
@endsection

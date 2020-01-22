@extends('layouts.master')
@section('contenido')

<div class="row">
      <div class="contenido">
          <div class="col-md-4 col-sm-12  col-xs-12 col-md-offset-4  col-sm-offset-4 col-xs-offset-4  ">
               <h3 class="login-heading mb-4">Registrate Aquí</h3>
              @if(count($errors) > 0)
                  <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                      <p>{{$error}}</p>
                    @endforeach
                  </div>
              @endif
              <form action="{{route('usuario.registro')}}" method="post">
                  <div class="form-label-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" id="email">
                  </div>
                  <div class="form-label-group">
                      <label for="clave">Clave</label>
                      <input type="password" class="form-control" name="password" id="clave">
                  </div>
                  </br>
                  <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" >Registrarme</button>
                  {{csrf_field()}}
              </form>
          </div>
      </div>
</div>
@endsection

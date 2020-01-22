<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Carrito;
use App\Productos;
use Session;
// Se importa la libreria de dashboard para pagos con tarjeta
use Stripe\Charge;
use Stripe\Stripe;
class ProductoController extends Controller
{
      public function getIndex()
    {
      /**
      *Se Obtienen todos los datos, y se pasan por parametro a la vista,
      *donde se mostrarn los productos.
      */
      $productos = Productos::all();
      return view('shop.index',['productos'=>$productos]);
    }
    /**
    * Metodo para agregar productos al carrito
    */

    public function getAgregar_carrito(Request $request, $id)
    {
        $producto = Productos::find($id);
        $carro = Session::has('carro') ? Session::get('carro'):null;
        #se crea un nuevo carro

        $carrito = new Carrito($carro);
        $carrito->agregar($producto, $producto->id);

        $request->session()->put('carro', $carrito);
      #  dd($request->session()->get('carro'));
        return redirect()->route('producto.index');
    }

    public function getDetalle(Request $request, $id){
      $producto = Productos::find($id);
      return view('shop.detalle',['producto'=>$producto]);
    }


    //Obtener Carrito
    public function getCarro(){
        if(!Session::has('carro')){
          return view('shop.shopping-cart', ['productos' => null] );
        }
        $carro = Session::get('carro');
        $carrito = new Carrito($carro);
        return view('shop.shopping-cart', ['productos' => $carrito->items, 'total_precio' => $carrito->totalPrecio] );
    }
    //Metodo para capturar informacion final de la compra
    public function getPagar(){
      if(!Session::has('carro')){
        return view('shop.shopping-cart', ['productos' => null] );
      }
      $carro = Session::get('carro');
      $carrito = new Carrito($carro);
      $total = $carrito->totalPrecio;
      return view('shop.pagar', ['total'=> $total]);
    }

    //MEtodo de pago con Stripe
    public function postPagar(Request $request){
        if(!Session::has('carro')){
          return redirect()->route('shop.shopping-cart');
        }
        $carro = Session::get('carro');
        $carrito = new Carrito($carro);

        //Ingreso mi clave de la API-test
        Stripe::setApiKey('sk_test_zS5bO7gXggmu52DPCHDVw62900g7QkmCu2');
        try{
          \Stripe\Charge::create(array(
            'amount'=> $carrito->totalPrecio *100,
            'currency'=> "usd",
            'source' => $request->input('stripeToken'),
            'description' => "Test Charge",
          ));
        }
        catch(\Exception $e){
          return redirect()->route('pagar')->with('error', $e-> getMessage());
        }

        Session::forget('carro');
        return redirect()->route('producto.index')->with('Felicidades','Compra realizada con exito');

    }

}

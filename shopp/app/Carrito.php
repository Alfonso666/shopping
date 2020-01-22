<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    /**
    *Inicion de varibles
    */
    public $items = null;
    public $cantidad_total = 0;
    public $totalPrecio = 0;

    //Metodo contructor de la clase
    public function __construct($carro)
    {
        if($carro)
        {
          $this->items = $carro->items;
          $this->cantidad_total = $carro->cantidad_total;
          $this->totalPrecio = $carro->totalPrecio;
        }

    }

    #Metodo que agrega un articulo al carrito
    public function agregar($item, $id){
        $storeArticulo = ['cantidad_total'=> 0, 'precio'=> $item->precio, 'item'=>$item];
        if($this->items)
        {
              if(array_key_exists($id, $this->items))
              {
                  $storeArticulo = $this->items[$id];
              }
        }
        $storeArticulo['cantidad_total']++;
        $storeArticulo['precio'] =  $item->precio * $storeArticulo['cantidad_total'];
        $this->items[$id] = $storeArticulo;
        $this->cantidad_total++;
        $this->totalPrecio += $item->precio;
    }
}

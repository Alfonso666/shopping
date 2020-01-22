<?php

use Illuminate\Database\Seeder;
class EnvioTablaProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $producto = new \App\Productos([
          'imagen' =>'https://resources.sears.com.mx/medios-plazavip/fotos/productos_sears1/original/2806754.jpg',
          'titulo' =>'Los vengadores Dr. Strange',
          'descripcion'=>' Gran figura pelicula de Dr. Strange presente en la pelicula los vengadores, esta pelicula ya se encuentra en cines.',
          'precio'=> 10000,
          'categoria'=> 'Juguetes'
        ]);
        $producto->save();

        $producto = new \App\Productos([
          'imagen' =>'https://staticpasa.cdnstatics.com/static/upl/img//011N19/entrega_011N19007_gadget_1554128777927.jpg',
          'titulo' =>'Figura de la Viuda Negra',
          'descripcion'=>' Figura  de accion de Viuda Negra Pelicula End Game, tamaño 16cm.',
          'precio'=> 8000,
          'categoria'=> 'Juguetes'
        ]);
        $producto->save();

        $producto = new \App\Productos([
          'imagen' =>'https://cdn.shopify.com/s/files/1/0051/3074/7968/products/E3885AS00_630509775439_main_18_Online_300DPI.jpg?v=1552400132',
          'titulo' =>'Figura de la Capitana Marvel',
          'descripcion'=>' Figura de accion Capitana Marvelr, pelicula de los vengadores',
          'precio'=> 5000,
          'categoria'=> 'Juguetes'
        ]);
        $producto->save();


    }
}

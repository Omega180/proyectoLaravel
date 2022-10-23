<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        /* El controlador automaticamente se dirige a la carpeta de views y el punto separa de carpeta */
        /* nombre del modelo */
        $productos = Producto::All();
        return view('articulos.index')->with('productos', $productos);
    }

    public function edit($id) {
        $producto = Producto::find($id);
        return view('articulos.edit')->with('producto',$producto);
    }
    public function crear() {
        return view('articulos.crear');
    }

    public function store(Request $request) {
        $productos = new Producto();
        $productos->codigo = $request->get('codigo');
        $productos->descripcion = $request->get('descripcion');
        $productos->cantidad = $request->get('cantidad');
        $productos->precio = $request->get('precio');
        
        $productos->save();
        return redirect('/articulos');
    }

    public function update(Request $request, $id) {
        $productos = Producto::find($id);
        $productos->codigo = $request->get('codigo');
        $productos->descripcion = $request->get('descripcion');
        $productos->cantidad = $request->get('cantidad');
        $productos->precio = $request->get('precio');

        $productos->save();
        return redirect('/articulos');
        
    }

    public function destroy($id) {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/articulos')->with('eliminar', 'ok');
    }
}

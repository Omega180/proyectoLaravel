<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribuidor;
use App\Models\EmailLog;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailController;
class DistribuidorController extends Controller

{
    //
    public function index()
    {
        /* El controlador automaticamente se dirige a la carpeta de views y el punto separa de carpeta */
        /* nombre del modelo */
        $distribuidores = Distribuidor::All();
        /* $user = auth()->user(); */
        return view('distribuidores.index')->with('distribuidores', $distribuidores);/* ->with('user', $user->id_rol); */
    }
    public function crearDistribuidor() {
        return view('distribuidores.crear');
    }

    public function editDistribuidor($id) {
        $distribuidor = Distribuidor::find($id);
        return view('distribuidores.edit')->with('distribuidor',$distribuidor);
    }

    public function storeDistribuidor(Request $request) {
        $distribuidores = new Distribuidor();
        $distribuidores->nombre = $request->get('nombre');
        $distribuidores->razon_social = $request->get('razon_social');
        $distribuidores->rut = $request->get('rut');
        $distribuidores->direccion = $request->get('direccion');
        $distribuidores->rubro = $request->get('rubro');
        $distribuidores->correo = $request->get('correo');
        $distribuidores->telefono = $request->get('telefono');
        
        $distribuidores->save();
        return redirect('/distribuidores');
    }
    public function updateDistribuidor(Request $request, $id) {
        $distribuidores = Distribuidor::find($id);
        $distribuidores->nombre = $request->get('nombre');
        $distribuidores->razon_social = $request->get('razon_social');
        $distribuidores->rut = $request->get('rut');
        $distribuidores->direccion = $request->get('direccion');
        $distribuidores->rubro = $request->get('rubro');
        $distribuidores->correo = $request->get('correo');
        $distribuidores->telefono = $request->get('telefono');
        
        $distribuidores->save();
        return redirect('/distribuidores');
    }

    public function destroyDistribuidor($id) {
        $distribuidor = Distribuidor::find($id);
        $distribuidor->delete();
        return redirect('/distribuidores')->with('eliminar', 'ok');
    }

    public function detalleDistribuidor($id) {
        $distribuidor = Distribuidor::find($id);
        return view('vistaDetalle')->with('distribuidor',$distribuidor);
    }
    public function enviarCorreo(Request $request) {
        $user = auth()->user();
        $emailLog = new EmailLog();  
        $emailLog->usuario = $user->name;
        $emailLog->nombre_proveedor = $request->get('proveedor');
        $emailLog->correo = $request->get('correo');
        $emailLog->asunto = $request->get('asunto');
        $emailLog->mensaje = $request->get('informacion');
        $correo = $request->get('correo');
        $emailLog->save(); 
        //Recordatorio de llamar el Controlador de correo en el tope del controlador
        
        $subject = $user->name.' / Prueba de envío de correo';
        Mail::to($correo)->send(new MailController($user,$subject,$emailLog));
        return redirect('/distribuidores')->with('user', $user);

    }
}

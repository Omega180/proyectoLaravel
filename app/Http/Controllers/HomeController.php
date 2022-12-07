<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribuidor;
use App\Models\EmailLog;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('vistaPrincipal');
    }
    public function vistaPrincipal() {
        $emailLogs = EmailLog::All();
        return view('vistaPrincipal')->with("emailLogs", $emailLogs);
    }

    public function vistaLista() {
        return view('vistaLista');
    }
    public function vistaDetalle() {
        return view('vistaDetalle');
    }
    public function vistaCrud() {
        return view('vistaCrud');
    }
}

<?php

use illuminate\Support\Facades\auth;
use App\Models\Distribuidor;


function insertEmail($id) {
    $distribuidor = Distribuidor::find($id);
    return $distribuidor->email;
}
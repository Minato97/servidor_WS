<?php

namespace App\Http\Controllers;

use App\Events\SARegistro;
use Illuminate\Http\Request;

class RegistroSent extends Controller
{
    public function registro(Request $request)
    {

//        return $request->data1;
//        dd($request->all());
//        event(new testWebSocket);
        broadcast(new SARegistro($request->registro));
        return ['mensaje' => 'si se envio'];
    }
}

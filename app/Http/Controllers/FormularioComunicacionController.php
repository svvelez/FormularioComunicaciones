<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\FormularioMailable;
use Illuminate\Support\MessageBag;


class FormularioComunicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario.index');

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

/* dd($request->actualizacionnombre); */


        $destino_nombre=$request->nombre;
        $destino_email="practicantedevtic1@dime.com.co";
        $email = new \App\Mail\FormularioMailable($request);
        Mail::to($destino_email)->send($email);

        return response()->json(['success' => 'true', 'mensaje' => 'hola']);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

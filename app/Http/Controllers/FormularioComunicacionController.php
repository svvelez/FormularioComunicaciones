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

/*  dd($request->autorizacion); */


        $destino_nombre=$request->nombre;
        $destino_email="practicantedevtic1@dime.com.co";
        $destino_email2="andres-felipe2000@live.com";
        $destino_email3="rios010503@gmail.com";
        $email = new \App\Mail\FormularioMailable($request);
        Mail::to($destino_email)->send($email);
//        Mail::to($destino_email2)->send($email);
//        Mail::to($destino_email3)->send($email);

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

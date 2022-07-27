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

        $destino_nombre=$request->nombre;
        $destino_email="practicantedevtic1@dime.com.co";
        $destino_email2="andres-felipe2000@live.com";
        $destino_email3="rios010503@gmail.com";

        if ($request->datossensibles == "si"){
            $asunto="DATOS SENSIBLES/AUTORIZACIÓN/ACTUALIZACIÓN DATOS PERSONALES - WEB DIME";
        }elseif ($request->datossensibles == "no"){
            $asunto="AUTORIZACIÓN/ACTUALIZACIÓN DATOS PERSONALES - WEB DIME";
        }

        $email = new \App\Mail\FormularioMailable($request);
        $email->subject($asunto);
        Mail::to([$destino_email,$destino_email2,$destino_email3])->send($email);
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

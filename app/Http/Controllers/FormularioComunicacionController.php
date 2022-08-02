<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Validation\Validator;
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

//        VALIDACION DE CAMPOS
        $acudiente = $request->check;
        $tercero = $request->terceroautorizado;

        $rulesTercero=[

            'fechatercero'=>'required',
            'nombretercero'=>'required',
            'tipodedocumentotercero'=>'required',
            'numerodocumentotercero'=>'required',
            'celulartercero'=>'required',
            'ciudadtercero'=>'required',
            'leidotercero'=>'required',
            'direcciontercero'=>'required',
        ];

        if ($tercero =="si"){
            $this->validate($request,$rulesTercero);
        }

        $rulesAcudiente=[
            'fechaacudiente'=>'required',
            'nombreacudiente'=>'required',
            'tipodedocumentoacudiente'=>'required',
            'numerodocumentoacudiente'=>'required',
            'celularacudiente'=>'required',
            'ciudadacudiente'=>'required',
            'leidoacudiente'=>'required',
            'direccionacudiente'=>'required',
        ];

        if ($acudiente =="simen"){
            $this->validate($request,$rulesAcudiente);
        }


       $rules = [
           'autorizacion'=>'required',
           'autorizacionmensajes'=>'required',
           'fecha'=>'required',
           'actualizacionnombre'=>'required',
           'actualizaciontipodedocumento'=>'required',
           'actualizacionnumerodocumento'=>'required',
           'actualizacioncelular'=>'required',
           'actualizacionciudad'=>'required',
           'actualizaciondireccion'=>'required',
           'leido'=>'required',
           'datossensibles'=>'required',
      ];

       $messages =[
            ''
       ];

       $this->validate($request,$rules,$messages);



//envio de correos
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

    public function show(request $request)
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

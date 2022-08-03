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
        $messagesTercero =[
            'fechatercero.required' => 'indique fecha de autorización en formulario de tercer autorizado',
            'nombretercero.required' => 'ingrese nombre de la tercer persona autorizada',
            'tipodedocumentotercero.required' => 'seleccione tipo de documento de la tercer persona autorizada',
            'numerodocumentotercero.required' => 'ingrese número de documento de la tercer persona autorizada',
            'celulartercero.required' => 'ingrese número de celular de la tercer persona autorizada',
            'ciudadtercero.required' => 'ingrese ciudad de la tercer persona autorizada',
            'correotercero.required' => 'ingrese correo de la tercer persona autorizada',
            'direcciontercero.required' => 'ingrese dirección de la tercer persona autorizada',
            'leidotercero.required'=>'Debe confirmar si ha leido y ha sido informado la tercer persona autorizada',
        ];


        if ($tercero =="si"){
            $this->validate($request,$rulesTercero,$messagesTercero);
        }

        $rulesAcudiente=[
            'fechaacudiente'=>'required',
            'nombreacudiente'=>'required',
            'tipodedocumentoacudiente'=>'required',
            'numerodedocumentoacudiente'=>'required',
            'celularacudiente'=>'required',
            'ciudadacudiente'=>'required',
            'leidoacudiente'=>'required',
            'direccionacudiente'=>'required',
        ];
        $messagesAcudiente =[
            'fechaacudiente.required' => 'indique fecha de la autorización en formulario del acudiente',
            'nombreacudiente.required' => 'ingrese nombre del acudiente ',
            'tipodedocumentoacudiente.required' => 'seleccione tipo de documento del acudiente',
            'numerodedocumentoacudiente.required' => 'ingrese número de documento del acudiente',
            'celularacudiente.required' => 'ingrese número de celular del acudiente',
            'ciudadacudiente.required' => 'ingrese ciudad del acudiente',
            'correoacudiente.required' => 'ingrese correo del acudiente',
            'direccionacudiente.required' => 'ingrese dirección del acudiente',
            'leidoacudiente.required'=>'Debe confirmar si ha leido y ha sido informado el acudiente',
        ];

        if ($acudiente =="siacudiente"){
            $this->validate($request,$rulesAcudiente,$messagesAcudiente);
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
           'autorizacion.required' => 'Debe seleccionar si autoriza el tratamiento de datos personales',
           'autorizacionmensajes.required' => 'Debe seleccionar si autoriza el envío de mensajes',
           'fecha.required' => 'indique fecha de la autorización',
           'actualizacionnombre.required' => 'ingrese nombre ',
           'actualizaciontipodedocumento.required' => 'seleccione tipo de documento',
           'actualizacionnumerodocumento.required' => 'ingrese número de documento',
           'actualizacioncelular.required' => 'ingrese número de celular',
           'actualizacionciudad.required' => 'ingrese ciudad',
           'actualizacioncorreo.required' => 'ingrese correo',
           'actualizaciondireccion.required' => 'ingrese dirección',
           'leido.required'=>'Debe confirmar si ha leido y ha sido informado',
           'datossensibles.required' => 'debe seleccionar si el formulario contiene datos sensibles',

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

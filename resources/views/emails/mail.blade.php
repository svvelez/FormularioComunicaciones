<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {
            font-family: Arial, sans-serif;
        }

    </style>
</head>
<body style="margin:0;padding:0;">
<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
        <td align="center" style="padding:0;">
            <table role="presentation"
                   style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:white;">
                        <img src="http://resultados-dime.test/img/alogo.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation"
                               style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                            <br>
                            <br style="padding:0 0 36px 0;color:#153643;">
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>

                                <tr>
                                    <td style="text-align:center;padding:10px;color:#ffffff;font-size:20px;font-family:arial,sans-serif;background-color:#008200">
                                        <p><strong>AUTORIZACIÓN DE TRATAMIENTO DE DATOS PERSONALES</strong></p>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                            <hr>
                            Autorizo y/o actualizo mi información personal para el tratamiento de mis datos personales
                            acorde a lo establecido
                            en la Política De Tratamiento De Datos Personales de DIME Clínica Neurocardiovascular S.A.
                            <p>
                            <div class="col ">
                                <label style="color: #008200;"><b>Autorizo a dime clinica para tratamiento de datos:</b></label>
                                <label>{{$formulario->autorizacion}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;"><b>Autorizo a dime clinica para envío de
                                        mensajes:</b></label>
                                <label>{{$formulario->autorizacionmensajes}}</label>
                            </div>

                            <br> <h4 style="color: #008200"><b>DATOS DEL TITULAR QUE AUTORIZA:</b></h4></br>

                            <div class="col ">
                                <label style="color: #008200;">Fecha de autorización:</label>
                                <label>{{$formulario->fecha}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Nombre Completo:</label>
                                <label>{{$formulario->actualizacionnombre}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Teléfono:</label>
                                <label>{{$formulario->actualizaciontelefono}}</label>
                            </div>
                            <div class="col ">
                                <label style="color: #008200;">Celular:</label>
                                <label>{{$formulario->actualizacioncelular}}</label>
                            </div>
                            <div class="col ">
                                <label style="color: #008200;">Celular(2):</label>
                                <label>{{$formulario->actualizacioncelular2}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Tipo de documento:</label>
                                <label>{{$formulario->actualizaciontipodedocumento}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Número del documento:</label>
                                <label>{{$formulario->actualizacionnumerodocumento}}</label>
                            </div>



                            <div class="col ">
                                <label style="color: #008200;">Ciudad:</label>
                                <label>{{$formulario->actualizacionciudad}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Dirección de correspondencia:</label>
                                <label>{{$formulario->actualizaciondireccion}}</label>
                            </div>



                            <div class="col ">
                                <label style="color: #008200;">Correo Electrónico:</label>
                                <label>{{$formulario->actualizacioncorreo}}</label>
                            </div>


                            <br>
                            <ul>
                                <li style="color: black">{{$formulario->leido}} </li>
                                {{--                                <li style="color: black">{{$formulario->check}} </li>--}}
                            </ul>


                            {{--FORMULARIO SI HAY TERCERO AUTORIZADO--}}

                            @if($formulario->terceroautorizado=='si')

                                <div>

                                    <br> <h4 style="color: #008200"><b>DATOS DE TERCERO AUTORIZADO:</b></h4></br>

                                    <div class="col ">
                                        <label style="color: #008200;">Fecha de autorización:</label>
                                        <label>{{$formulario->fechatercero}}</label>
                                    </div>

                                    <div class="col ">
                                        <label style="color: #008200;">Nombre Completo:</label>
                                        <label>{{$formulario->nombretercero}}</label>
                                    </div>

                                    <div class="col ">
                                        <label style="color: #008200;">Teléfono:</label>
                                        <label>{{$formulario->telefonotercero}}</label>
                                    </div>
                                    <div class="col ">
                                        <label style="color: #008200;">Celular:</label>
                                        <label>{{$formulario->celulartercero}}</label>
                                    </div>
                                    <div class="col ">
                                        <label style="color: #008200;">Celular(2):</label>
                                        <label>{{$formulario->celular2tercero}}</label>
                                    </div>

                                    <div class="col ">
                                        <label style="color: #008200;">Tipo de documento:</label>
                                        <label>{{$formulario->tipodedocumentotercero}}</label>
                                    </div>

                                    <div class="col ">
                                        <label style="color: #008200;">Número del documento:</label>
                                        <label>{{$formulario->numerodocumentotercero}}</label>
                                    </div>



                                    <div class="col ">
                                        <label style="color: #008200;">Ciudad:</label>
                                        <label>{{$formulario->ciudadtercero}}</label>
                                    </div>

                                    <div class="col ">
                                        <label style="color: #008200;">Dirección de correspondencia:</label>
                                        <label>{{$formulario->direcciontercero}}</label>
                                    </div>


                                    <div class="col ">
                                        <label style="color: #008200;">Correo Electrónico:</label>
                                        <label>{{$formulario->correotercero}}</label>
                                    </div>


                                    <br>
                                    <ul>
                                        <li style="color: black">{{$formulario->leidotercero}} </li>
                                        {{--                                <li style="color: black">{{$formulario->check}} </li>--}}
                                    </ul>
                                </div>
                            @endif


                            {{--RESPUESTAS FORMULARIO DE ADULTO RESPONSABLE--}}
                            @if($formulario->check == "soy menor de edad")

                                <br> <h4 style="color: #008200"><b>SI ES MENOR DE EDAD DATOS DEL ADULTO RESPONSABLE</b>
                                </h4></br>

                                <div class="col ">
                                    <label style="color: #008200;">Fecha de autorización:</label>
                                    <label>{{$formulario->fechaacudiente}}</label>
                                </div>

                                <div class="col ">
                                    <label style="color: #008200;">Nombre Completo:</label>
                                    <label>{{$formulario->nombreacudiente}}</label>
                                </div>

                                <div class="col ">
                                    <label style="color: #008200;">Teléfono:</label>
                                    <label>{{$formulario->telefonoacudiente}}</label>
                                </div>
                                <div class="col ">
                                    <label style="color: #008200;">Celular:</label>
                                    <label>{{$formulario->celularacudiente}}</label>
                                </div>
                                <div class="col ">
                                    <label style="color: #008200;">Celular(2):</label>
                                    <label>{{$formulario->celularacudiente2}}</label>
                                </div>
                                <div class="col ">
                                    <label style="color: #008200;">Tipo de documento:</label>
                                    <label>{{$formulario->tipodedocumentoacudiente}}</label>
                                </div>

                                <div class="col ">
                                    <label style="color: #008200;">Número del documento:</label>
                                    <label>{{$formulario->numerodedocumentoacudiente}}</label>
                                </div>



                                <div class="col ">
                                    <label style="color: #008200;">Ciudad:</label>
                                    <label>{{$formulario->ciudadacudiente}}</label>
                                </div>

                                <div class="col ">
                                    <label style="color: #008200;">Dirección de correspondencia:</label>
                                    <label>{{$formulario->direccionacudiente}}</label>
                                </div>



                                <div class="col ">
                                    <label style="color: #008200;">Correo Electrónico:</label>
                                    <label>{{$formulario->correoacudiente}}</label>
                                </div>

                                <br>
                                <ul>
                                    <li style="color: black">{{$formulario->leidoacudiente}}</li>
                                </ul>
                                <br>

                                <div class="col ">
                                    <label style="color: #008200;">Datos sensibles:</label>
                                    <label>{{$formulario->datossensibles}}</label>
                                </div>

                                <hr>
                                @endif
                                </td>
                                </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:30px;background:#6fac82;">
                        <table role="presentation"
                               style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                            <tr>
                                <td style="padding:0;width:50%;" align="left">
                                    <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                        &reg; DIME Clinica {{date('Y')}}<br/>
                                    </p>
                                </td>
                                <td style="padding:0;width:50%;" align="right">

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>


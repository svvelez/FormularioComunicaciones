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
        table, td, div, h1, p {font-family: Arial, sans-serif;}

    </style>
</head>
<body style="margin:0;padding:0;">
<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
        <td align="center" style="padding:0;">
            <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:white;">
                        <img src="http://resultados-dime.test/img/alogo.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                            <br>
                                <br style="padding:0 0 36px 0;color:#153643;">
                                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>

                                        <tr>
                                            <td style="text-align:center;padding:10px;color:#ffffff;font-size:20px;font-family:arial,sans-serif;background-color:#008200">
                                                <p><strong>AUTORIZACIÓN DE TRATAMIENTO DE DATOS PERSONALES</strong></p>
                                            </td>
                                        </tr>

                                        </tbody></table>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                    <hr>
                                   Autorizo y/o actualizo mi información personal para el tratamiento de mis datos personales acorde a lo establecido
                                   en la Política De Tratamiento De Datos Personales de DIME Clínica Neurocardiovascular S.A.
                            <p>
                            <div class="col ">
                                <label style="color: #008200;"><b>Autorizo a dime clinica para tratamiento de datos:</b></label>
                                <label>{{$formulario->autorizacion}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;"><b>Autorizo a dime clinica para envio de mensajes:</b></label>
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
                                <label style="color: #008200;">Telefono:</label>
                                <label>{{$formulario->actualizaciontelefono}}</label>
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
                                <label style="color: #008200;">Celular:</label>
                                <label>{{$formulario->actualizacioncelular}}</label>
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
                                <label style="color: #008200;">Celular(2):</label>
                                <label>{{$formulario->actualizacioncelular2}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Correo Electronico:</label>
                                <label>{{$formulario->actualizacioncorreo}}</label>
                            </div>


                                    <br>
                            <ul>
                                <li style="color: black">{{$formulario->leido}} </li>
                                <li style="color: black">{{$formulario->check}} </li>
                            </ul>




                                <br> <h5 style="color: #008200"><b>SI ES MENOR DE EDAD DATOS DEL ADULTO RESPONSABLE</b></h5></br>

                            <div class="col ">
                                <label style="color: #008200;">Fecha de autorización:</label>
                                <label>{{$formulario->fechaacudiente}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Nombre Completo:</label>
                                <label>{{$formulario->nombreacudiente}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Telefono:</label>
                                <label>{{$formulario->telefonoacudiente}}</label>
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
                                <label style="color: #008200;">Celular:</label>
                                <label>{{$formulario->celularacudiente}}</label>
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
                                <label style="color: #008200;">Celular(2):</label>
                                <label>{{$formulario->celularacudiente2}}</label>
                            </div>

                            <div class="col ">
                                <label style="color: #008200;">Correo Electronico:</label>
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

                                </td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td style="padding:0;">--}}
{{--                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">--}}
{{--                                        <tr>--}}
{{--                                            <td style="width:260px;padding:0;vertical-align:top;color:#153643;">--}}
{{--                                                <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/left.gif" alt="" width="260" style="height:auto;display:block;" /></p>--}}
{{--                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">--}}
{{--                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"></p>--}}
{{--                                            </td>--}}
{{--                                            <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>--}}
{{--                                            <td style="width:260px;padding:0;vertical-align:top;color:#153643;">--}}
{{--                                                <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/right.gif" alt="" width="260" style="height:auto;display:block;" /></p>--}}
{{--                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"></p>--}}
{{--                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"></p>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    </table>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:30px;background:#6fac82;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
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

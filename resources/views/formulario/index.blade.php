@extends('layouts.app')

@section('title')

@section('content')


    <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">

            <form action="{{route('formulario.store')}}" id="formulario" method="post">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-xm-12 col-md-12 col-lg-12">
                        <!-- Box -->
                        <div class="box box-success">
                            <!-- Box Header -->
                            <P>
                            <div class="box-header with-border">
                                <h3 style="color:  #008200; text-align: left;"><b>AUTORIZACIÓN DE TRATAMIENTO DE DATOS
                                        PERSONALES</b></h3>
                            </div>

                            <P>
                            <div>
                                <p>Apreciado usuario, en DIME Clínica Neurocardiovascular hemos actualizado nuestra
                                    política de tratamiento de datos personales, por ello te invitamos a
                                    conocer los cambios que hemos implementado para estar más conectados y cerca de
                                    ti.
                                </p>

                                {{-- scroll de politica de tratamiento de datos personales--}}
                                <div style="border : solid 1px black;background : #ffffff;color : black;padding : 4px;width : 100%;height : 320px;
                                overflow : auto; marginwidth = 20px;">

                                    <ul>
                                        <p>DIME CLINICA NEUROCARDIOVASCULAR S.A. en adelante DIME CLÍNICA, en
                                            cumplimiento de la ley estatutaria 1581 de 2012 "por la cual se dictan
                                            disposiciones generales para la protección de datos personales" y el decreto
                                            1377 de 2013 "por medio del cual se reglamenta parcialmente la ley 1581 de
                                            2012" se permite compartir que la Gerencia ha fijado la política de
                                            protección de datos personales la cual está disponible para su consulta en
                                            www.dime.com.co.
                                            Los usuarios pueden tener la tranquilidad que el manejo de datos personales
                                            se administra con la mayor discreción y confidencialidad. Por tal motivo
                                            DIME CLÍNICA solicita a sus usuarios autorización para que de manera libre,
                                            previa, expresa y voluntaria nos permita recolectar, almacenar, usar,
                                            eliminar, transferir, actualizar, procesar y disponer de los datos que han
                                            sido suministrados por el titular y que se han incorporados en la base de
                                            datos de nuestra institución.
                                            Datos Sensibles. En caso de suministrar este tipo de datos tales como:
                                            origen racial, étnico, población en estado de vulnerabilidad o menores de
                                            edad. Declaro que doy mi autorización para su tratamiento conforme a lo
                                            dispuesto por la legislación vigente.
                                            Finalidades. Autorizo a DIME CLÍNICA para realizar el Tratamiento de los
                                            Datos Personales y Datos Sensibles para el cumplimiento de todas, o algunas
                                            de las siguientes finalidades:
                                            a). La Clínica tratará la información por lo que el usuario ha autorizado
                                            para ello conforme a lo dispuesto por la legislación vigente, para la
                                            prestación de los servicios asistenciales requeridos por él o su familia;
                                            b). Actualización de datos entregados por el Titular, acudiente o
                                            representante; c). Caracterización y seguimiento a la población, para la
                                            gestión del riesgo en salud, utilizando la información derivada de los
                                            servicios asistenciales; d). Contactar a los pacientes y/o usuarios a través
                                            de medios telefónicos, físicos, personales y/o electrónicos (como SMS, chat,
                                            correo electrónico y demás medios que así puedan considerarse); e). Enviar
                                            notificaciones de cambios o mejoras en la prestación de los servicios
                                            ofrecidos por la Clínica; f). Informar acerca de los servicios de salud de
                                            la Clínica, promociones, y en general remitir mensajes publicitarios; g).
                                            Crear y gestionar bases de datos secundarias para la prestación de los
                                            servicios propios de la Clínica, fines de investigación, desarrollo de
                                            servicios y/o productos, estudios de riesgo; h). Facturar y cobrar ante las
                                            personas naturales o jurídicas responsables del pago; i). Diligenciamiento
                                            del Registro Individual de la Prestación de Servicios de Salud (RIPS); j).
                                            Indicadores de oportunidad; k). Fines administrativos tales como auditorías,
                                            facturación y contabilidad; l). El proceso de archivo, de actualización de
                                            los sistemas, de protección y custodia de información y bases de datos de la
                                            Clínica; m). Procesos de investigación, estadísticas, campañas de prevención
                                            y promoción y, en general para utilizarla en políticas de salud pública; o).
                                            Las demás finalidades necesarias para dar cumplimiento a las obligaciones
                                            legales y regulatorias, así como de las políticas de la Clínica.
                                            Para conocer la política de tratamiento de datos personales o si se requiere
                                            profundizar acerca de la forma en que la Clínica trata sus datos personales,
                                            puede consultarla en la página web www.dime.com.co; por lo que según lo
                                            dispuesto en el artículo 10 del Decreto 1377 de 2013, la Clínica queda
                                            autorizada de manera expresa e inequívoca para mantener y manejar toda su
                                            información excepto cuando usted manifieste lo contrario por escrito dentro
                                            de los treinta (30) días hábiles contados a partir de la publicación o
                                            recepción de la presente comunicación a la cuenta de correo electrónico
                                            dispuesta para tal efecto: habeasdata@dime.com.co y actuaremos de inmediato
                                            excepto sobre la información que exige la ley se debe mantener para informar
                                            a las entidades del estado.
                                            Datos del responsable del Tratamiento. Declaro que he sido informado de los
                                            datos del responsable del Tratamiento de los Datos Personales y Datos
                                            Sensibles, los cuales son:
                                        </p>
                                    </ul>
                                    <ul>
                                        <ul>
                                            <li>Responsable: DIME CLÍNICA NEUROCARDIOVASCULAR S.A.</li>
                                            <li>NIT. 860.024.390-3</li>
                                            <li>Dirección física: Av. 5N No. 20N-75, Cali, Valle del Cauca, Colombia.
                                            </li>
                                            <li>Correo electrónico: habeasdata@dime.com.co</li>
                                            <li>Teléfono: +57 602 6080143 Ext. 769 (Horario de atención: 8:00 a.m. –
                                                5:00 p.m.)
                                            </li>
                                        </ul>
                                    </ul>

                                    <ul><p>En cualquier momento usted como titular de los datos personales puede
                                            solicitar la supresión, modificación, corrección o actualización de su
                                            contenido en nuestra base de datos enviando una comunicación escrita a la
                                            dirección o correo electrónico mencionados anteriormente.
                                        </p></ul>
                                    <ul><p><b>Derechos.</b> Declaro que conozco los derechos de habeas data que me
                                            asisten como titular de los Datos Personales y Datos Sensibles,
                                            particularmente, los derechos a conocer, actualizar, rectificar, suprimir
                                            los Datos Personales o revocar la autorización aquí otorgada, en los
                                            términos y bajo el procedimiento consagrado en la Política. Igualmente, que
                                            soy consciente de los alcances jurídicos de esta autorización.
                                        </p></ul>
                                    <ul><p><b>Duración.</b> La Compañía podrá realizar el Tratamiento de mis Datos
                                            Personales por todo el tiempo que sea necesario para cumplir con las
                                            finalidades descritas en este documento y para que pueda desarrollar y tener
                                            registro de sus actividades asistenciales, comerciales y administrativas.
                                        </p></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>

                    <div>
                        <p>
                            Autorizo a DIME CLÍNICA de manera expresa, concreta, suficiente, voluntaria e
                            informada con la finalidad que la información de la cual soy titular, o he otorgado
                            con el fin de cumplir con la información requerida, para dar cumplimiento con las
                            políticas institucionales y las demás que se refieran a la información personal
                            necesaria para los fines mencionados en la presente autorización, sea en general
                            administrada y en especial: captada, tratada, procesada, operada, verificada, y
                            usada
                        </p>


                        <div class="row g-3">
                            <div class="col-lg-1 ">
                                <div class="col form-check">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="radio"
                                           name="autorizacion" id="autorizacion" value="si">
                                    <label class="form-check-label" for="si">
                                        Si
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-1">
                                <div class="col form-check">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="radio"
                                           name="autorizacion" id="autorizacion" value="no">
                                    <label class="form-check-label" for="no">
                                        No
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <p>
                    <p>

                    <div>
                        <p>De igual forma autorizo voluntariamente a DIME CLINICA para que envíe mensajes con el
                            fin de Informar acerca de los servicios de salud de la Clínica, campañas de
                            prevención, promoción y en general remitir pautas publicitarias.
                        </p>

                        <div class="row g-3">
                            <div class="col-lg-1">
                                <div class="col form-check">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="radio"
                                           name="autorizacionmensajes" id="autorizacionmensajes" value="si">
                                    <label class="form-check-label" for="si">
                                        Si
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-1">
                                <div class="col form-check">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="radio"
                                           name="autorizacionmensajes" id="autorizacionmensajes" value="no">
                                    <label class="form-check-label" for="no">
                                        No
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br>
                    {{--formulario actualizacion de datos personales--}}

                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
                        <div class="header">
                            <h3 style="color: #008200"><b>ACTUALIZACIÓN DE DATOS PERSONALES</b></h3>
                            <hr style="color:  #008200;">
                        </div>

                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Fecha de autorización</label><label
                                        style="color: red;text-align: left;">*</label>
                                    <input class="form-control" type="date" name="fecha" id="fecha" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px  #729271;">

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Nombre Completo</label><label
                                        style="color: red;text-align: left;">*</label>
                                    <input class="form-control" type="text" name="actualizacionnombre"
                                           id="actualizacionnombre" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Teléfono</label>
                                    <input class="form-control" type="text" name="actualizaciontelefono"
                                           id="actualizaciontelefono" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            {{-- segunda fila de actualizacion de datos personales--}}

                            {{--checks de tipo de documento--}}
                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Tipo de documento</label><label
                                        style="color: red;text-align: left;">*</label>

                                    <div class="row g-3">

                                        <div class="col-lg-1">
                                            <div class="col form-check">
                                                <input style="border : solid 1px #729271;" class="form-check-input"
                                                       type="radio" name="actualizaciontipodedocumento" id="CC"
                                                       value="CC">
                                                <label class="form-check-label" for="CC"> CC </label>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="col-lg-1">
                                            <div class="col form-check">
                                                <input style="border : solid 1px #729271;" class="form-check-input"
                                                       type="radio" name="actualizaciontipodedocumento" id="NI"
                                                       value="NI">
                                                <label class="form-check-label" for="NI"> NI</label>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="col-lg-1">
                                            <div class="col form-check">
                                                <input style="border : solid 1px #729271;" class="form-check-input"
                                                       type="radio" name="actualizaciontipodedocumento" id="TI"
                                                       value="TI">
                                                <label class="form-check-label" for="TI">TI </label>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="col-lg-1">
                                            <div class="col form-check">
                                                <input style="border : solid 1px #729271;" class="form-check-input"
                                                       type="radio" name="actualizaciontipodedocumento" id="CE"
                                                       value="CE">
                                                <label class="form-check-label" for="CE"> CE </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Numero del documento</label><label
                                        style="color: red;text-align: left;">*</label>
                                    <input class="form-control" type="text" name="actualizacionnumerodocumento"
                                           id="actualizacionnumerodocumento" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Celular</label><label
                                        style="color: red;text-align: left;">*</label>
                                    <input class="form-control" type="text" name="actualizacioncelular"
                                           id="actualizacioncelular" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            {{-- tercera fila de actualización de datos personales --}}

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Ciudad</label><label
                                        style="color: red;text-align: left;">*</label>
                                    <input class="form-control" type="text" name="actualizacionciudad"
                                           id="actualizacionciudad" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Dirección de correspondencia</label><label
                                        style="color: red;text-align: left;">*</label>
                                    <input class="form-control" type="text" name="actualizaciondireccion"
                                           id="actualizaciondireccion" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Celular</label>
                                    <input class="form-control" type="text" name="actualizacioncelular2"
                                           id="actualizacioncelular2" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            {{-- cuarta fila de actualización de datos personales --}}

                            <div class="col-lg-4">
                                <div class="col">
                                    <label style="text-align: left;">Correo Electrónico</label>
                                    <input class="form-control" type="text" name="actualizacioncorreo"
                                           id="actualizacioncorreo" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="checkbox"
                                           name="propio" id="propio" value="propio">
                                    <label class="form-check-label" for="propio">Propio </label>
                                </div>
                            </div>


                            {{--CHECK TERCERO AUTORIZADO--}}
                            <div class="col-lg-4">
                                <div class="col ">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="checkbox"
                                           name="terceroautorizado" id="terceroautorizado" value="si"
                                           onclick="javascript:showConte()">

                                    <label class="form-check-label" for="terceroautorizado">Tercero autorizado</label>
                                    <label style="color: red;text-align: left;"></label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="col form-check">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="checkbox"
                                           name="leido" id="si" value="He leído, y entiendo siendo debidamente informado (a), autorizo y
                                                acepto.">
                                    <label class="form-check-label" for="anonimo">
                                        He leído, y entiendo siendo debidamente informado (a), autorizo y
                                        acepto.
                                    </label>
                                </div>
                            </div>


                            {{--FORMULARIO TERCERO AUTORIZADO--}}
                            <div id="contenttercero" style="display: none;">
                                <div class="header">
                                    <h3 style="color: #008200"><b> DATOS TERCERO AUTORIZADO</b></h3>
                                    <hr style="color:  #008200;">
                                </div>

                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Fecha de autorización</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="date" name="fechatercero"
                                                   id="fechatercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px  #729271;">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Nombre Completo</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="nombretercero"
                                                   id="nombretercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Teléfono</label>
                                            <input class="form-control" type="text" name="telefonotercero"
                                                   id="telefonotercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    {{-- SEGUNDA FILA FORMULARIO TERCERO AUTORIZADO--}}

                                    {{--checks de tipo de documento--}}
                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Tipo de documento</label><label
                                                style="color: red;text-align: left;">*</label>

                                            <div class="row g-3">
                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentotercero" id="CC" value="CC">
                                                        <label class="form-check-label" for="CC"> CC </label>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentotercero" id="NI" value="NI">
                                                        <label class="form-check-label" for="NI"> NI</label>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentotercero" id="TI" value="TI">
                                                        <label class="form-check-label" for="TI">TI </label>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentotercero" id="CE" value="CE">
                                                        <label class="form-check-label" for="CE"> CE </label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Numero del documento</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="numerodocumentotercero"
                                                   id="numerodocumentotercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Celular</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="celulartercero"
                                                   id="celulartercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    {{-- TERCER FILA DE FORMULARIO TERCERO AUTORIZADO --}}

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Ciudad</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="ciudadtercero"
                                                   id="ciudadtercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Dirección de correspondencia</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="direcciontercero"
                                                   id="direcciontercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Celular</label>
                                            <input class="form-control" type="text" name="celular2tercero"
                                                   id="celular2tercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    {{-- CUARTA FILA FORMULARIO DE TERCERO AUTORIZADO --}}

                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Correo Electrónico</label>
                                            <input class="form-control" type="text" name="correotercero"
                                                   id="correotercero" style="cursor: pointer;
                                            width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>


                                </div>
                                <P></P>
                                <div class="col-lg-6">
                                    <div class="col form-check">
                                        <input style="border : solid 1px #729271;" class="form-check-input"
                                               type="checkbox" name="leidotercero" id="si" value="He leído, y entiendo siendo debidamente informado (a), autorizo y
                                                acepto.">
                                        <label class="form-check-label" for="anonimo">
                                            He leído, y entiendo siendo debidamente informado (a), autorizo y
                                            acepto.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- MENOR DE EDAD --}}
                        <p>


                        <p></p>

                        <div class="row g-3">
                            <div class="col-lg-8">
                                <div class="col form-check">
                                    <input style="border : solid 1px #729271;" class="form-check-input" type="checkbox"
                                           name="check" value="simen"
                                           id="check" onclick="javascript:showContent()">
                                    <label class="label" for="anonimo">
                                        En caso del que el usuario sea menor de edad o lo requiera, debe
                                        autorizar un adulto responsable
                                    </label>
                                </div>
                            </div>


                            {{--SI ES MENOR DE EDAD, SALE ESTE FORMULARIO PARA LLENAR LOS DATOS REQUERIDOS--}}

                            <div id="content" style="display: none;">
                                <div class="header">
                                    <h3 style="color: #008200"><b>DATOS ADULTO RESPONSABLE</b></h3>
                                    <hr style="color:  #008200;">
                                </div>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <div class="col">
                                            <label style="text-align: left;">Fecha de autorización</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="date" name="fechaacudiente"
                                                   id="fechaacudiente" style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Nombre completo del acudiente</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="nombreacudiente"
                                                   id="nombreacudiente" style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Teléfono</label>
                                            <input class="form-control" type="text" name="telefonoacudiente"
                                                   id="telefonoacudiente" style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">
                                        </div>
                                    </div>

                                    {{--segunda fila de formulario acudiente --}}

                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Tipo de documento</label><label
                                                style="color: red;text-align: left;">*</label>

                                            <div class="row g-3">
                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentoacudiente"
                                                               id="tipodedocumentoacudiente" value="CC">
                                                        <label class="form-check-label" for="ccacudiente">CC</label>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentoacudiente" id="niacudiente"
                                                               value="NI">
                                                        <label class="form-check-label" for="niacudiente">NI</label>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentoacudiente" id="tiacudiente"
                                                               value="TI">
                                                        <label class="form-check-label" for="tiacudiente">TI</label>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-lg-1">
                                                    <div class="col form-check">
                                                        <input style="border : solid 1px #729271;"
                                                               class="form-check-input" type="radio"
                                                               name="tipodedocumentoacudiente" id="ceacudiente"
                                                               value="CE">
                                                        <label class="form-check-label" for="ceacudiente">CE</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Número del documento</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="numerodedocumentoacudiente"
                                                   id="no" style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Celular</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="celularacudiente" id="no"
                                                   style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">

                                        </div>
                                    </div>

                                    {{-- ///////////// --}}

                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Ciudad</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="ciudadacudiente" id="si"
                                                   style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">

                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Dirección de correspondencia</label><label
                                                style="color: red;text-align: left;">*</label>
                                            <input class="form-control" type="text" name="direccionacudiente" id="no"
                                                   style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Celular</label>
                                            <input class="form-control" type="text" name="celularacudiente2" id="no"
                                                   style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">

                                        </div>
                                    </div>

                                    {{-- ///////////// --}}

                                    <div class="col-lg-4">
                                        <div class="col ">
                                            <label style="text-align: left;">Correo Electrónico</label>
                                            <input class="form-control" type="text" name="correoacudiente" id="si"
                                                   style="cursor: pointer;
                                                    width: 420px;border-radius: 10px;margin-center: 20px;border : solid 1px #729271;"
                                                   placeholder="">

                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col form-check">
                                            <input style="border : solid 1px #729271;" class="form-check-input"
                                                   type="checkbox" name="propioac"
                                                   id="propio">
                                            <label class="form-check-label" for="propio">
                                                Propio
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col form-check">
                                            <input style="border : solid 1px #729271;" class="form-check-input"
                                                   type="checkbox"
                                                   name="acudiente" id="acudiente">
                                            <label class="form-check-label" for="acudiente">
                                                Acudiente
                                            </label>
                                        </div>
                                    </div>


                                    {{-- ///////////// --}}


                                    <div class="col-lg-6">
                                        <div class="col form-check">
                                            <input style="border : solid 1px #729271;" class="form-check-input"
                                                   type="checkbox" name="leidoacudiente" id="leidoacudiente" value="He leído, y entiendo siendo debidamente informado (a), autorizo
                                                        y acepto.">
                                            <label class="form-check-label" for="anonimo">
                                                He leído, y entiendo siendo debidamente informado (a), autorizo
                                                y acepto.
                                            </label>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <p>
                            <div>
                                <p>¿Considera usted que la información que ha suministrado clasifica como
                                    información sensible?</p>
                            </div>

                            <div>
                                <p>Información sensible tipo de datos tales como: origen racial, étnico,
                                    población en estado de vulnerabilidad o menores
                                    de edad. Declaro que doy mi autorización para su tratamiento conforme a lo
                                    dispuesto por la legislación vigente</p>

                                <div class="row g-3">
                                    <div class="col-lg-1">
                                        <div class="col form-check">
                                            <input style="border : solid 1px #729271;" class="form-check-input"
                                                   type="radio" name="datossensibles" id="si" value="si">
                                            <label class="form-check-label" for="si">
                                                Si
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-lg-1">
                                        <div class="col form-check">
                                            <input style="border : solid 1px #729271;" class="form-check-input"
                                                   type="radio" name="datossensibles" id="no" value="no">
                                            <label class="form-check-label" for="no">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>
                        <div>
                            <button type="submit" name="enviar" id="enviar" class="btn btn-success"
                                    style="background-color:  #008200;width:100px;height:35px;">
                                <b> Enviar</b>
                            </button>
                        </div>
                    </div>
                    <br>

            </form>
        </div>
    </div>
    </html>

    {{--mostrar formulario para datos del acudiente si es menor de edad--}}
    <script type="text/javascript">
        function showContent() {
            element = document.getElementById("content");
            check = document.getElementById("check");
            if (check.checked) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }
    </script>

    {{--mostrar formulario si hay tercero autorizado--}}
    <script type="text/javascript">
        function showConte() {
            element = document.getElementById("contenttercero");
            check = document.getElementById("terceroautorizado");


            if (check.checked) {
                element.style.display = 'block';

            } else {
                element.style.display = 'none';
            }
        }
    </script>


                      {{-- envio de formulario y validaciones--}}
    <script>
        $(document).ready(function () {

          tipdocumento = [];
            datossensibles = [];
            autorizacion = [];
            autorizacionmensajes = [];
            leido=[];
            tipodedocumentotercero=[];
            leidotercero=[];
            tipodedocumentoacudiente=[];
            leidoacudiente=[];
            terceroautorizado=[];

            $("#formulario").submit(function (e) {
                e.preventDefault();

                $("input[name='actualizaciontipodedocumento']:checked").each(function () {
                    tipdocumento.push($(this).val());
                });

                $("input[name='datossensibles']:checked").each(function () {
                    datossensibles.push($(this).val());
                });

                $("input[name='autorizacion']:checked").each(function () {
                    autorizacion.push($(this).val());
                });

                $("input[name='autorizacionmensajes']:checked").each(function () {
                    autorizacionmensajes.push($(this).val());
                });

                $("input[name='leido']:checked").each(function () {
                    leido.push($(this).val());
                });

                $("input[name='tipodedocumentotercero']:checked").each(function () {
                    tipodedocumentotercero.push($(this).val());
                });

                $("input[name='leidotercero']:checked").each(function () {
                    leidotercero.push($(this).val());
                });

                $("input[name='tipodedocumentoacudiente']:checked").each(function () {
                    tipodedocumentotercero.push($(this).val());
                });

                $("input[name='leidoacudiente']:checked").each(function () {
                    leidotercero.push($(this).val());
                });

                $("input[name='terceroautorizado']:checked").each(function () {
                    terceroautorizado.push($(this).val());
                });

                fecha = $("#fecha").val();
                nombre = $("#actualizacionnombre").val();
                numerodocumento = $("#actualizacionnumerodocumento").val();
                celular = $("#actualizacioncelular").val();
                ciudad = $("#actualizacionciudad").val();
                direccion = $("#actualizaciondireccion").val();
                tercero=$("#terceroautorizado").val();
                fechatercero=$("#fechatercero").val();
                nombretercero=$("#nombretercero").val();
                numerodocumentotercero=$("#numerodocumentotercero").val();
                celulartercero=$("#celulartercero").val();
                ciudadtercero=$("#ciudadtercero").val();
                direcciontercero=$("#direcciontercero").val();
                fechaacudiente=$("#fechaacudiente").val();
                nombreacudiente=$("#nombreacudiente").val();
                numerodocumentoacudiente=$("#numerodocumentoacudiente").val();
                celularacudiente=$("#celularacudiente").val();
                ciudadacudiente=$("#ciudadacudiente").val();
                direccionacudiente=$("#direccionacudiente").val();
                terceroautorizad=$("#terceroautorizado").val();
                acudiente=$("#check").val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                var formulario = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{url('formulario')}}",
                    data: formulario,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        swal.fire(" Enviados ", " Formulario Enviado Sastifactoriamente ", "success").then(() => {
                            window.location.href = "{{ route('formulario.index') }}"
                        });
                    },
                    error: function (json, xhr, status) {

                        if (autorizacion.length === 0) {
                            console.log(autorizacion);
                            Swal.fire(
                                'Error',
                                'Debe seleccionar si desea autorizar el tratamiento de datos persoanles',
                                'error'
                            );
                        } else if (autorizacionmensajes.length === 0) {
                            console.log(autorizacionmensajes);
                            Swal.fire(
                                'Error',
                                'Debe seleccionar si desea recibir mensajes',
                                'error'
                            );
                        } else if (fecha === '') {
                            Swal.fire(
                                'Error',
                                'Debe seleccionar una fecha',
                                'error'
                            );
                        } else if (nombre === '') {
                            Swal.fire(
                                'Error',
                                'Debe diligenciar un nombre',
                                'error'
                            );
                        } else if (tipdocumento.length === 0) {
                            console.log(tipdocumento);
                            Swal.fire(
                                'Error',
                                'Debe seleccionar un tipo de documento',
                                'error'
                            );
                        } else if (numerodocumento === '') {
                            console.log('jum');
                            Swal.fire('Error',
                                'Debe escribir su número de documento', 'error');
                        } else if (celular === '') {
                            console.log('error cel');
                            swal.fire('Error',
                                'Debe escribir su número de celular', 'error');
                        } else if (ciudad === '') {
                            console.log('error ciudad')
                            swal.fire(" Error ",
                                "Debe escribir su ciudad", "error");
                        } else if (direccion === '') {
                            console.log('error direccion');
                            swal.fire(" Error ",
                                "Debe escribir su direccion", "error");

                        } else if (leido.length === 0) {
                            console.log(leido);
                            Swal.fire(
                                'Error',
                                'Debe seleccionar si ha sido informado',
                                'error'
                            );


                        } else if (datossensibles.length == 0) {
                            console.log(datossensibles);
                            Swal.fire(
                                'Error',
                                'Debe seleccionar si en el formulario hay datos sensibles',
                                'error'
                            );
                        } else if (terceroautorizad == 'si') {
                            console.log(terceroautorizad)
                            if (fechatercero === '') {
                                Swal.fire("Error", "Debe seleccionar una fecha de autorización en formulario del tercero", "error");
                            } else if (nombretercero === '') {
                                Swal.fire("Error", "Debe diligenciar el nombre de la tercer persona autorizada", "error");
                            } else if (tipodedocumentotercero.length === 0) {
                                Swal.fire("Error", "Debe seleccionar el tipo de documento de la tercer persona autorizada", "error");
                            } else if (numerodocumentotercero === '') {
                                Swal.fire("Error", "Debe Diligenciar el número de documento de la  tercer persona autorizada", "error");
                            } else if (celulartercero === '') {
                                Swal.fire("Error", "Debe Diligenciar el número de celular de la tercer persona autorizada", "error");
                            } else if (ciudadtercero === '') {
                                Swal.fire("Error", "Debe Diligenciar la ciudad de la tercer persona autorizada", "error");
                            } else if (direcciontercero === '') {
                                Swal.fire("Error", "Debe Diligenciar la dirección de la tercer persona autorizada", "error");
                            } else if (leidotercero.length === 0) {
                                Swal.fire("Error", "Debe seleccionar si la tercer persona ha sido informado", "error");
                            }
                        }else if(acudiente=='simen') {
                            if (fechaacudiente == '') {
                                Swal.fire("Error", "Debe fecha acudinee", "error");
                            }
                        }




                    },
                    complete: function (xhr, status) {
                        $("#enviar").attr('disabled', false);
                    }

                });
            });
        });


    </script>

@endsection

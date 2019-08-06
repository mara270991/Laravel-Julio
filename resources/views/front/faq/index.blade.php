@extends('front.template')
@include('front.link')

@section('pageTitle', 'FAQ')

@section('mainContent')

<div class="contenedorfaq">
 <div class="container">
                      <div class="faqcuerpo">

                         <br>
                         <button  id="pr1" class="titulo-respuestas accordion">¿COMO COMPRAR?</button>
                         <div class="panel">
                         <p class="respuesta">PODES COMPRAR EN NUESTRA PÁGINA “ISABELLA.COM.AR”, HACIENDO CLICK EN LOS DIFERENTES ENLACES. UNA VEZ QUE ELIJAS EL PRODUCTO,
                           TE MOSTRARA EL DETALLE DEL PRODUCTO Y TENDRAS UN BOTON DE “COMPRA” DISPONIBLE PARA COMENZAR LA TRANSACCION.--> </p>
                         </div>

                         <button id="pr2" class="titulo-respuestas accordion">¿NECESITO TENER CUENTA PARA COMPRAR ONLINE? </button>
                         <div class="panel">
                         <p class="respuesta"> SI TE REGISTRAS PODRAS HACER UN SEGUIMIENTO DE TU COMPRAS HASTA QUE LLEGUE A TUS MANOS. ADEMAS DE TENER DIFERENTES PROMOCIONES DISPONIBLES EN TU PERFIL.--></p>
                         </div>

                         <button id="pr3" class="titulo-respuestas accordion">¿OLVIDE MI CONTRASEÑA, COMO LA RECUPERO??</button>
                         <div class="panel">
                         <p class="respuesta"> PARA RECUPERAR TU CONTRASEÑA ENTRA ACA PARA PODER REINICIARLA Y USA UNA NUEVA PARA VOLVER A ENTRAR A TU PERFIL.--></p>
                         </div>

                         <button id="pr4" class="titulo-respuestas accordion">¿COMO SE MI TALLE?</button>
                         <div class="panel">
                         <p class="respuesta"> ENTRANDO A ESTE <a href="partials/tabladetalles.php">LINK</a>, TENDRAS DIFERENTES TABLAS QUE TE PERMITAN DE ACUERDO A TUS MEDIDAS ELERGIR ADECUADAMENTE EL TALLE.--> VOLVER</p>
                         </div>

                         <button id="pr5" class="titulo-respuestas accordion">¿SI POR ERROR ELEGI MAL EL TALLE, QUE PUEDO HACER?</button>
                         <div class="panel">
                         <p class="respuesta">SIEMPRE TENDRAS LA POSIBILIDAD DE ACERCARTE A NUESTROS LOCALES CON LA PRENDA O ACCESORIO SIN SACAR LAS ETIQUETAS Y CAMBIARLAS, PUEDE SER EL TALLE, O POR EL IMPORTE DEL MISMO POR OTRO PRODUCTO DISPONIBLE EN ESE LOCAL.--> </p>
                         </div>

                         <button id="pr6" class="titulo-respuestas accordion"> ¿TODO LO QUE PARECE EN LA PAGINA TIENE STOCK?</button>
                         <div class="panel">
                         <p class="respuesta"> TODOS LOS PRODUCTOS TIENEN STOCK, A MENOS QUE ESTE SEÑALIZADO LO CONTRARIO.--</p>
                         </div>

                         <button id="pr7" class="titulo-respuestas accordion"> ¿COMO PUEDO PAGAR MI PEDIDO?</button>
                        <div class="panel">
                         <p class="respuesta">ACEPTAMOS TODOS LOS MEDIOS DE PAGO INCLUIDOS EN MERCADO PAGO: TARJETAS DE CREDITO Y CUPONES DE PAGO. LUEGO DE SELECCIONAR TU OPCION PREFERIDA, SERAS REDIRECCIONADO A UN SITIO SEGURO PARA COMPLETAR LOS DATOS NECESARIOS. UNA VEZ TERMINADA LA TRANSACCIÓN RETORNARAS A ISABELLA.COM.AR.--></p>
                         </div>

                         <button id="pr8" class="titulo-respuestas accordion"> ¿ES SEGURO USAR MI TARJETA DE CREDITO EN EL SITIO?</button>
                         <div class="panel">
                         <p class="respuesta">EN ISABELLA NOS TOMAMOS MUY EN SERIO LA SEGURIDAD DE TUS DATOS PERSONALES. TODAS LAS TRANSACCIONES SE REALIZAN A TRAVES DE UN SITIO SEGURO. ADICIONALMENTE, CUANDO RECIBIMOS EL PEDIDO, CORROBORAMOS LA INFORMACION QUE NOS PROPORCIONAS CON LOS DATOS EN ARCHIVO DE LAS TARJETAS DE CREDITO PARA VERIFICAR TU IDENTIDAD Y EVITAR FRAUDES. --></p>
                         </div>

                         <button id="pr9" class="titulo-respuestas accordion">¿QUE ES MERCADO PAGO?</button>
                         <div class="panel">
                         <p class="respuesta">MERCADOPAGO ES UNO DE LOS PRINCIPALES PROVEEDORES DE SOLUCIONES DE COBRANZAS PARA SITIOS WEB. ESTO PERMITE A INDIVIDUOS Y EMPRESAS PAGAR Y COBRAR DE FORMA CONFIABLE Y SEGURA.--></p>
                         </div>

                         <button id="pr10" class="titulo-respuestas accordion">¿DE CUANTO TIEMPO DISPONGO PAGAR UNA VEZ QUE REALICE EL PEDIDO?</button>
                         <div class="panel">
                         <p class="respuesta">ELIGIENDO MERCADOPAGO DISPONES DE 5 DIAS HABILES PARA EFECTUAR EL PAGO, TANTO CON TARJETA COMO A TRAVES DE CUPON DE PAGO.--></p>
                         </div>

                         <button id="pr11" class="titulo-respuestas accordion">¿COMO LOGRO SABER QUE USTEDES RECIBIERON MI ORDEN Y QUE EL PAGO FUE ACREDITADO CORRECTAMENTE?</button>
                         <div class="panel">
                         <p class="respuesta">-RECIBIRAS UN MAIL INMEDIATAMENTE DESPUES DE CONFIRMAR EL PEDIDO Y OTRO MAIL CUANDO EL PAGO SE HAYA ACREDITADO CORRECTAMENTE, INFORMANDOTE QUE EL PEDIDO SE ENCUENTRA “EN PROCESO”.--></p>
                         </div>

                         <button id="pr12" class="titulo-respuestas accordion">¿A QUE ZONAS REALIZAN ENVIOS?</button>
                         <div class="panel">
                         <p class="respuesta">REALIZAMOS ENVIOS DENTRO DE TODO EL TERRITORIO DE LA REPUBLICA ARGENTINA.--></p>
                         </div>

                         <button id="pr13" class="titulo-respuestas accordion">¿CUANTO CUESTA EL ENVIO?</button>
                         <div class="panel">
                         <p class="respuesta">EL COSTO DEPENDERA DEL LUGAR DE RESIDENCIA. PARA CAPITAL Y GBA EL COSTO ES DE AR$150 Y PARA EL INTERIOR EL COSTO ES DE AR$ 250.
                         PARA ENVIO A SUCURSAL OCA EN CAPITAL Y GBA ES DE AR$120 Y PARA SUCURSAL OCA INTERIOR EL COSTO ES DE AR$160.
                         ENVIO A SUCURSAL ISABELLA NO TIENE COSTO, PERO ENTREGA EN 48 HORAS HABILES.
                         CUANDO TU PEDIDO ESTE DESPACHADO Y TE LLEGUE LA CONFIRMACION PODRAS PASAR A RETIRAR EL PEDIDO POR EL LIMA 1111 (C.A.B.A.) DE LUNES A VIERNES DE 12 A 18 HORAS CON TU DNI.
                         EL PEDIDO PERMANECERA POR 5 DÍAS EN LA SUCURSAL, CASO CONTRARIO VOLVERÁ A NUESTRAS OFICINAS .EL CARGO POR REENVÍO A SUCURSAL ES DE $50.
                         SI TU PEDIDO VA A SER RETIRADO POR OTRA PERSONA, POR FAVOR COMUNICATE CON NOSOTROS AL 0800-333-1111 O POR MAIL AYUDA@ISABELLA.COM.AR PARA PODER AUTORIZARLA.--></p>
                         </div>

                         <button id="pr14" class="titulo-respuestas accordion">¿EN QUE HORARIOS ENTREGA EL CORREO?</button>
                         <div class="panel">
                         <p class="respuesta">LAS ENTREGAS DE PEDIDOS A DOMICILIO SE REALIZAN DE LUNES A VIERNES DE 9 A 18HS.  AQUELLOS PEDIDOS A RETIRAR EN SUCURSAL OCA TAMBIÉN LOS SÁBADOS DE 9 A 13 HS.
                         NO SE ENTREGAN PEDIDOS A DOMICILIO NI EN SUCURSAL DOMINGOS NI FERIADOS.--></p>
                         </div>

                         <button id="pr15" class="titulo-respuestas accordion">¿PUEDO PROGRAMAR LA ENTREGA DEL ENVIO?</button>
                         <div class="panel">
                         <p class="respuesta">LAS ENTREGAS NO PUEDEN SER PROGRAMADAS. PODES REALIZAR EL SEGUIMIENTO DE TU PEDIDO ONLINE PARA DISPONER DE UN ESTIMADO DE FECHA DE ENTREGA.--></p>
                         </div>

                         <button id="pr16" class="titulo-respuestas accordion">¿CON QUE PACKAGING O ENVIAN?</button>
                         <div class="panel">
                         <p class="respuesta">LAS ENTREGAS SE REALIZAN EN PAQUETES CERRADOS DE OCA. EN EL PROCESO DE COMPRA PODES ELEGIR SI QUERES QUE TE ENVIEMOS EL PEDIDO JUNTO
                         ON EL PACKAGING DE REGALO.--></p>
                         </div>

                         <button id="pr17" class="titulo-respuestas accordion">¿SE NECESITA FIRMAR LA RECEPCION DEL PEDIDO?</button>
                         <div class="panel">
                         <p class="respuesta">TODOS LOS PEDIDOS DEBEN SER FIRMADOS.--></p>
                         </div>

                         <button id="pr18" class="titulo-respuestas accordion">¿PUEDE RECIBIRLO OTRA PERSONA POR MI?</button>
                         <div class="panel">
                         <p class="respuesta">EL PEDIDO PUEDE RECIBIRLO CUALQUIER PERSONA QUE SE ENCUENTRE EN EL DOMICILIO ACORDADO PRESENTANDO SU DNI.--></p>
                         </div>

                         <button id="pr19" class="titulo-respuestas accordion">¿PUEDO AGREGAR ITEMS UNA VEZ QUE REALICE EL PEDIDO?</button>
                         <div class="panel">
                         <p class="respuesta">UNA VEZ CONFIRMADO EL PEDIDO NO PUEDE SER MODIFICADO.--></p>
                         </div>

                         <button id="pr20" class="titulo-respuestas accordion">¿PUEDO CAMBIAR LA DIRECCION DE ENTREGA?</button>
                         <div class="panel">
                         <p class="respuesta"> ISABELLA SOLO ENVIA A UNA DIRECCION POR PEDIDO. DURANTE EL PROCESO DE COMPRA PODES ELEGIR LA DIRECCION CON LA QUE TE REGISTRASTE O
                          INGRESAR UNA NUEVA. SI QUERES MODIFICAR LA DIRECCION DE ENTREGA UNA VEZ FINALIZADO EL PEDIDO, ENVIANOS UN MAIL A AYUDA@ISABELLA.COM.AR
                          INDICANDO EL NUMERO DE PEDIDO Y SOLICITANDO EL CAMBIO DE DIRECCION DE ENTREGA. SI EL PEDIDO YA FUE DESPACHADO, NO SERA POSIBLE EL CAMBIO.--></p>
                          </div>

                         <button id="pr21" class="titulo-respuestas accordion">¿DONDE ESTA MI PEDIDO</button>
                         <div class="panel">
                         <p class="respuesta">EN CUANTO EL PEDIDO SEA DESPACHADO VAS A RECIBIR UN MAIL CONFIRMANDOTE ESTA ACCION JUNTO CON EL NUMERO DE GUIA, DATO FUNDAMENTAL PARA EL
                         SEGUIMIENTO DEL PEDIDO A TRAVES DE WWW.OCA.COM <br>
                         PODES CHEQUEAR EL ESTADO DE TU PEDIDO INGRESANDO A LA SECCION MIS PEDIDOS DE TU CUENTA.--></p>
                         </div>

                         <button id="pr22" class="titulo-respuestas accordion">¿CUANDO LLEGA MI PEDIDO?</button>
                         <div class="panel">
                         <p class="respuesta">TODOS NUESTROS ENVIOS DENTRO DE ARGENTINA LOS REALIZAMOS A TRAVES DE OCA, CON UNA DEMORA DE ENTRE 48 A 96HS HABILES DESPUES DE HABER
                         REALIZADO EL PEDIDO Y CONFIRMADO EL PAGO. LOS PEDIDOS QUE INCLUYAN PRENDAS DE OTRAS TEMPORADAS PODRAN CONTAR CON UNA DEMORA EXTRA POR
                         RAZONES DE LOGISTICA INTERNA.--></p>
                         </div>

                         <button id="pr23" class="titulo-respuestas accordion">¿PARA QUE SIRVE EL NUMERO DE GUIA QUE ME ENVIAN?</button>
                         <div class="panel">
                         <p class="respuesta">¿PARA QUE SIRVE EL NUMERO DE GUIA QUE ME ENVIAN?<br><br>
                               EL NUMERO DE GUIA TE SERVIRA PARA REALIZAR UN SEGUIMIENTO ONLINE DE TU PEDIDO A TRAVES DEL SERVICIO DE TRACKING DE OCA WWW.OCA.COM.--></p>
                               </div>

                         <button id="pr24" class="titulo-respuestas accordion">¿CUANTAS VECES PASA EL CORREO POR MI DOMICILIO Y QUE SUCEDE SI NO ME ENCUENTRA?</button>
                         <div class="panel">
                         <p class="respuesta">OCA REALIZA 2 INTENTOS DE ENTREGA, EN HORARIOS DE 9 A 18HS DE LUNES A VIERNES. DE NO HABER NADIE PARA RECIBIR EL PAQUETE,
                         EL CORREO DEJARA UN AVISO DE VISITA Y EL PAQUETE SE REMITIRA A LA SUCURSAL ANREANI MAS CERCANA. 7 DIAS DESPUES, SI EL PEDIDO NO ES RETIRADO,
                         VOLVERA A NUESTRAS OFICINAS PARA PODER COORDINAR UN NUEVO ENVIO. ESTE NUEVO COSTO DE REENVIO CORRERA POR CUENTA DEL CLIENTE Y NO HAY
                         POSIBILIDAD DE CANCELAR LA COMPRA EN ESTA INSTANCIA.
                         DE NO REALIZARSE EL PAGO PARA EL NUEVO ENVIO DENTRO DE LOS 90 DIAS SIGUIENTES, ISABELLA SE RESERVA EL DERECHO DE ANULAR EL PEDIDO.-->
                         </p>
                         </div>

                         <button id="pr25" class="titulo-respuestas accordion">¿QUIERO REALIZAR UN CAMBIO COMO HAGO?</button>
                         <div class="panel">
                         <p class="respuesta">TODOS LOS PRODUCTOS TIENEN CAMBIO, A EXCEPCION DE LA CATEGORIA ACCESORIOS.
                         PODRAS REALIZAR EL CAMBIO DE LA PRENDA DENTRO DE LOS 30 DIAS DE EFECTUADA LA COMPRA, CON LA ETIQUETA CORRESPONDIENTE Y EL TICKET ORIGINAL O DE CAMBIO,
                         EN CUALQUIERA DE NUESTROS LOCALES EXCLUSIVOS.
                         LOS PRODUCTOS DE LA CATEGORIA “TEMPORADAS ANTERIORES” SOLO PODRAN CAMBIARSE POR PRODUCTOS DE LA MISMA CATEGORIA EN LOS LOCALES CON SELECCION DE
                         PRENDAS OUTLET.
                         LOS PRODUCTOS QUE CORRESPONDEN A ISABELLA MINI SOLO SE PODRAN CAMBIAR EN LOS LOCALES CON SELECCION DE PRENDAS MINI.
                         EN LA SECCION LOCALES ENCONTRAS LAS DIRECCIONES DE LOS LOCALES Y SUS COLECCIONES DISPONIBLES. --></p>
                         </div>


                         <button id="pr26" class="titulo-respuestas accordion">¿QUIERO CANCELAR MI COMPRA, COMO HAGO?</button>
                         <div class="panel">
                         <p class="respuesta">SI TU PEDIDO SE ENCUENTRA EN ESTADO PENDIENTE Y NO FUE PROCESADO  PODES CANCELAR TU COMPRA.
                         CONTACTANOS POR MAIL A AYUDA@ISABELLA.COM.AR O LLAMANOS AL  0810-220-7625 Y TE TOMAREMOS LA CANCELACION.--></p>
                         </div>

                         <button id="pr27" class="titulo-respuestas accordion">¿LA MERCADERIA LLEGO FALLADA O DAÑADA. QUE PUEDO HACER?</button>
                         <div class="panel">
                         <p class="respuesta">TODAS NUESTRAS PRENDAS SON CHEQUEADAS ANTES DE SER DESPACHADAS PERO, EN EL CASO QUE RECIBAS UNA PRENDA QUE
                         NO ESTÉ EN CONDICIONES, CONTACTANOS POR MAIL A AYUDA@ISABELLA.COM.AR O LLAMANOS AL  0810-220-7625 DENTRO DE
                         LAS 24HS DE RECIBIDA TU COMPRA PARA QUE PODAMOS SOLUCIONAR EL INCONVENIENTE.
                         RECORDA MANTENER EL PRODUCTO, LAS ETIQUETAS Y PACKS EN IDENTICAS CONDICIONES DE RECEPCION Y TENER EL TICKET DE COMPRA A MANO.--></p>
                         </div>

                         <button id="pr28" class="titulo-respuestas accordion">¿RECIBI UN PRODUCTO DIFERENTE AL QUE COMPRE, CON QUIEN ME CONTACTO?</button>
                         <div class="panel">
                         <p class="respuesta">TODAS NUESTRAS PRENDAS SON CHEQUEADAS ANTES DE SER DESPACHADAS PERO, EN EL CASO QUE RECIBAS UNA PRENDA QUE
                         NO SE CORRESPONDA CON LO PEDIDO CONTACTANOS POR MAIL A AYUDA@ISABELLA.COM.AR O LLAMANOS AL  0810-220-7625 DENTRO
                         DE LAS 24HS DE RECIBIDA TU COMPRA PARA QUE PODAMOS SOLUCIONAR EL INCONVENIENTE. CONSERVA SIEMPRE LAS ETIQUETAS
                         ORIGINALES Y EL TICKET DE COMPRA.--></p>
                         </div>


                         <button id="pr29" class="titulo-respuestas accordion">¿LOS PRECIOS LISTADOS EN LA PAGINA, SON LOS MISMOS QUE EN LOS LOCALES?</button>
                         <div class="panel">
                         <p class="respuesta">LOS PRECIOS DE NUESTRA TIENDA SON LOS MISMOS PRECIOS QUE ENCONTRAS EN NUESTROS LOCALES EXCLUSIVOS DE TODO EL PAIS. --></p>
                         </div>

                         <button id="pr30" class="titulo-respuestas accordion">¿ME RAGALARON UNA GIFTCARD, COMO LA UTILIZO?</button>
                           <div class="panel">
                         <p class="respuesta">PODES UTILIZAR TU GIFTCARD EN CUALQUIERA DE NUESTROS LOCALES ADHERIDOS. CHEQUEA NUESTRA SECCION GIFTCARD PARA MAS INFORMACION. --></p>
                         </div>

                         <button id="pr31" class="titulo-respuestas accordion">¿DONDE SE INGRESA EL CODIGO DE DESCUENTO?</button>
                         <div class="panel">
                         <p class="respuesta">SI TENES UN CODIGO DE DESCUENTO PODRAS INGRESARLO EN TU CARRITO DE COMPRA ANTES DE INICIAR EL PROCESO DE COMPRA. --></p>
                         </div>

                         <button id="pr32" class="titulo-respuestas accordion">¿CUAL ES EL HORARIO DE ATENCION DE LA TIENDA?</button>
                         <div class="panel">
                         <p class="respuesta">LA TIENDA ESTA DISPONIBLE PARA COMPRAR LAS 24HS, LOS 365 DIAS DEL AÑO. --></p>
                         </div>

                         <a class="volver-home" href="index.php"> << Home </a>
                     </div>
                   </div>
                   <script src="/js/faq.js"></script>

@endsection

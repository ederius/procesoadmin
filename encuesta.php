<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es" ng-app="procesoAdmin">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>..:: Centro Happy Kids ::..</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <link href="view/css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="view/css/style_panel.css"  rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>


<div class="row">

    <nav class="top-nav green accent-4">
        <div class="nav-wrapper center">
            <a class=" center center-align"><img src="view/imagenes/logo.gif" width="131" height="64" alt="Escudo" class="center-block center-align"></a>
        </div>
    </nav>



<div class="row">
    <div class="col s12 center valign-wrapper" aligns="center ">
          <div class="card col s10 valign">
           <div class="card-content ">
             <h5 >CENTRO DE ENSEÑANZA Y ESTIMULACIÓN HAPPY KIDS</h5>
             <P>Licencia de funncionamiento mediante resolución N° 416 de 2011 </P> 
             <p>NIVELES MATERNAL, PREESCOLAR Y PRIMARIA</p>
             <hr>
             <P>"ATENCION INTEGRAL PARA POTENCIAR VALORES, CAPACIDADES Y HABILIDADES DE NIÑOS Y NIÑAS"</P>
             <hr>
             <br>
             <H4>FORMATO DE INSCRIPCIÓN</H4>

              <div class="card informacionNino" >


                     <div class="row">
                     <div class="col s12">
                     <form id="formulario">
                    <h5 class="center">INFORMACIÓN DEL NIÑO</h5>

                      <div class="input-field col s4">
                        <input id="id" type="text" class="validate">
                        <label for="id">N. de identificación</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="nombres" type="text" class="validate">
                        <label for="nombres">Nombres</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="apellidos" type="text" class="validate">
                        <label for="apellidos">Apellidos</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="lugarNac" type="text" class="validate">
                        <label for="lugarNac">Lugar de nacimiento</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="fechaNac" type="date" class="datepicker">
                        <label for="fechaNac">Fecha de nacimiento</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="direccion" type="text" class="validate">
                        <label for="direccion">Direccion</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="barrio" type="text" class="validate">
                        <label for="barrio">Barrio</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="telefonos" type="text" class="validate">
                        <label for="telefonos">Telefonos</label>
                      </div>
                        <div class="input-field col s4">
                        <input id="EPS" type="text" class="validate">
                        <label for="EPS">EPS</label>
                      </div>


                      <div class="input-field col s4">
                            <select name="estrato" id="estrato">
                                <option>Estrato</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                      </div>

                      <div class="input-field col s4">
                            <select name="sexo" id="sexo ">
                                <option>Sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                      </div>

                      <div class="input-field col s4">
                            <select name="tipoSangre" id="sexo ">
                                <option>Tipo de sangre</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>                            

                            </select>
                      </div>

                      <div class="input-field col s4">
                            <select name="jornada" id="jornada ">
                                <option>Jornada</option>
                                <option value="Manana">Mañana / 7:30 a.m -12:00 pm </option>
                                <option value="Tarde">Tarde / 2:00 p.m - 6:00 p.m </option>
                                <option value="Tarde">Continua / 7:30 a.m - 6:00 p.m </option>

                            </select>
                      </div>                     


                     <div class="input-field col s4">
                            <select name="grado " id="grado">
                                <option>Grado</option>
                                <option value="Sala cuna">Sala cuna</option>
                                <option value="Caminadores">Caminadores</option>
                                <option value="Parvulo">Párvulo</option>
                                <option value="Pre-jardin">Pre-jardín</option>
                                <option value="Jardin">Jardín</option>
                                <option value="Transicion">Transición</option>
                                <option value="Primero">Primero</option>
                                <option value="Segundo">Segundo</option>
                                <option value="Tercero">Tercero</option>
                                <option value="Cuarto">Cuarto</option>
                                <option value="Quinto">Quinto</option>
                            </select>
                      </div>


                                            <div class="input-field col s4">
                      <div><label>Indigena</label></div>
                      <br>
                        <p style=" ">
                            <input class="with-gap" name="group3" type="radio" id="test5" />
                            <label for="test5">Si</label>
                          </p>
                         <p>
                            <input class="with-gap" name="group3" type="radio" id="test6" checked />
                            <label for="test6">No</label>
                          </p>
                    </div>

                      <div class="input-field col s4">
                        <input id="Etnia" type="text" class="validate">
                        <label for="Etnia">Etnia (Opcional)</label>
                      </div>





                      </form>
                    </div>
                    </div>
                 </div>

<!---------------------- INFORMACION DEL PADRE ------------------------------------------------>

 <div class="card informacionPadre" >


                     <div class="row">
                     <div class="col s12">
                    <h5 class="center">INFORMACIÓN DEL PADRE</h5>

                      <div class="input-field col s4">
                        <input id="cedulaP" type="text" class="validate">
                        <label for="cedulaP">Cedula</label>
                      </div>


                      <div class="input-field col s4">
                        <input id="fechaExpP" type="date" class="datepicker">
                        <label for="fechaExpP">Fecha de expedición cedula</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="correoP" type="text" class="text">
                        <label for="correoP">Correo</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="nombresP" type="text" class="validate">
                        <label for="nombresP">Nombres</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="apellidosP" type="text" class="validate">
                        <label for="apellidosP">Apellidos</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="profesionP" type="text" class="validate">
                        <label for="profesionP">Profesión</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="lugarTrabP" type="date" class="datepicker">
                        <label for="lugarTrabP">Lugar de trabajo</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="cargoP" type="text" class="validate">
                        <label for="cargoP">Cargo</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="telefonosP" type="text" class="validate">
                        <label for="telefonosP">Telefonos</label>
                      </div>
                      </div>
                    </div>
             
              </div>

<!----------------------- INFORMACION DEL PADRE ------------------------------------------------>



<!---------------------- INFORMACION DEL MADRE ------------------------------------------------>

 <div class="card informacionMadre" >


                     <div class="row">
                     <div class="col s12">
                    <h5 class="center">INFORMACIÓN DEL PADRE</h5>

                      <div class="input-field col s4">
                        <input id="cedulaM" type="text" class="validate">
                        <label for="cedulaM">Cedula</label>
                      </div>


                      <div class="input-field col s4">
                        <input id="fechaExpM" type="date" class="datepicker">
                        <label for="fechaExpM">Fecha de expedición cedula</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="correoM" type="text" class="text">
                        <label for="correoM">Correo</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="nombresM" type="text" class="validate">
                        <label for="nombresM">Nombres</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="apellidosM" type="text" class="validate">
                        <label for="apellidosM">Apellidos</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="profesionM" type="text" class="validate">
                        <label for="profesionM">Profesión</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="lugarTrabM" type="date" class="datepicker">
                        <label for="lugarTrabM">Lugar de trabajo</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="cargoM" type="text" class="validate">
                        <label for="cargoM">Cargo</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="telefonosM" type="text" class="validate">
                        <label for="telefonosM">Telefonos</label>
                      </div>
                      </div>
                    </div>
             
              </div>

<!----------------------- INFORMACION DEL MADRM ------------------------------------------------>


<!---------------------- INFORMACION DE REFERENCIA ------------------------------------------------>

 <div class="card informacionMadre" >

                     <div class="row">
                     <div class="col s12">
                    <h5 class="center">OTRA REFERENCIA</h5>

                      <div class="input-field col s4">
                        <input id="cedulaO" type="text" class="validate">
                        <label for="cedulaO">Cedula</label>
                      </div>


                      <div class="input-field col s4">
                        <input id="fechaExpO" type="date" class="datepicker">
                        <label for="fechaExpO">Fecha de expedición cedula</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="correoO" type="text" class="text">
                        <label for="correoO">Correo</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="nombresO" type="text" class="validate">
                        <label for="nombresO">Nombres</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="apellidosO" type="text" class="validate">
                        <label for="apellidosO">Apellidos</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="parentescoO" type="text" class="validate">
                        <label for="parentescoO">Parentesco</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="ocupacionO" type="text" class="validate">
                        <label for="ocupacionO">Ocupación</label>
                      </div>

                      <div class="input-field col s4">
                        <input id="direccionO" type="text" class="validate">
                        <label for="direccionO">Dirección</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="telefonosO" type="text" class="validate">
                        <label for="telefonosO">Telefonos</label>
                      </div>
                      </div>
                    </div>
             
              </div>

<!----------------------- INFORMACION DE REFERENCIA ------------------------------------------------>


<!---------------------- INFORMACION DE HABILIDADES ------------------------------------------------>

 <div class="card informacionMadre" >

                     <div class="row">
                     <div class="col  s12  ">
                    <h5 class="center">OTRA REFERENCIA</h5>
                            <p class="left ">
                              <input type="checkbox" id="musica" />
                              <label for="musica">Música</label>
                            </p><br><br>
                            <p class="left">
                              <input type="checkbox" id="relación"  />
                              <label for="relación">Relación con los demas</label>
                            </p><br><br>
                            <p class="left">
                              <input type="checkbox" class="baile"  />
                              <label for="baile">Baile</label>
                            </p><br><br>
                            <p class="left">
                              <input type="checkbox" id="amorNatu" />
                              <label for="amorNatu">Amor a la naturaleza</label>
                            </p><br><br>
                            <p class="left">
                              <input type="checkbox" id="arte"  />
                              <label for="arte">Arte</label>
                            </p><br><br>
                            <p class="left">
                                <input type="checkbox" id="armarfigu" />
                                <label for="armarfigu">Armar figuras</label>
                            </p><br><br>
                            <p class="left">
                                <input type="checkbox" id="lenguaje" />
                                <label for="lenguaje">Lenguaje</label>
                            </p><br><br>

                      <div class="input-field col s10">
                        <input id="otraH" type="text" class="validate">
                        <label for="otraH">Otra, Cual? (Opcional)</label>
                      </div>
                      </div>
                    </div>
             
              </div>

<!---------------------- INFORMACION DE HABILIDADES ------------------------------------------------>









            </div>
            <div class="card-action">
              <a class="btn waves-efect white-text green accent-4 right generar-pin">Guardar</a>
            </div>
            <br>
            <div class="col s12 error center"></div>


          </div>
        </div>



    <script src="../controller/Pin/pin.js"></script>





</div>


<div class="row divFooter">
    <footer class="page-footer green accent-4 col l12 m12 s12">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Centro de enseñanza y estimulación happy kids</h5>
                    <p class="grey-text text-lighten-4">Aplicativo creado con el fin de facilitar el manejo de la información y el proceso de inscripción de estudiantes</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Mas Enlaces</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#/GeneraciónPin">Generación de pín</a></li>
                        <li><a class="grey-text text-lighten-3" href="#/InfoInscripción">Información inscritos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#/Aspirantes">Aspirantes</a></li>
                        <li><a class="grey-text text-lighten-3" href="logout.php">Cerrar Sesión</a></li>
                        <ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2016 Copyright
                <a class="grey-text text-lighten-4 right" href="#!">Riohacha - La Guajira</a>
            </div>
        </div>
    </footer>

</div>






</body>

    <script src="view/js/jquery-1.8.2.min.js"></script>
    <script src="view/js/materialize.js"></script>


    <script>
    $(document).ready(function(){
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();
            $('ul.tabs').tabs();
            $('.collapsible').collapsible({});
                $('select').material_select();
            $('.datepicker').pickadate({
                format: 'yyyy-mm-dd'
              });

        });
        
    </script>


</html>
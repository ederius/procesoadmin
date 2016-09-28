
          <div class="card ">
           <div class="card-content ">
             <h2 >Generar pín</h2>
             <hr>
             <br>
             <div class="row">
              <div class="col s12">
              <p class="grey-text">
              <br>
              Este módulo fue creado con el fin de generar pin únicos, para poder tener acceso por medio de estos, a los formularios de inscripciones para aspirar a un cupo dentro del centro de enseñanza Happy  kids.</p>
              <br>
              <ul>
                <li class="grey-text">En el siguiente formulario ingrese el numero de cedula, nombres y apellidos de un acudiente del niño.
                </li>
              <ul>
                     <div class="row">
                     <form id="formulario">
                      <div class="input-field col s12">
                        <input id="cedula" type="text" class="validate">
                        <label for="cedula">Cedula</label>
                      </div>
                     <div class="row">
                      <div class="input-field col s6">
                        <input id="pNombre" type="text" class="validate">
                        <label for="pNombre">Primer nombre</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="sNombre" type="text" class="validate">
                        <label for="sNombre">Segundo Nombre</label>
                      </div>

                     <div class="input-field col s6">
                        <input id="apellidos" type="text" class="validate">
                        <label for="apellidos">Apellidos </label>
                      </div>
                      </form>
                    </div>
                   
              </div>
            </div>
            <div class="card-action">
              <a class="btn waves-efect white-text green accent-4 right generar-pin">Generar pin</a>
            </div>
            <br>
            <div class="col s12 error center"></div>
          </div>
        </div>



    <script src="../controller/Pin/pin.js"></script>

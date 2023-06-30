<div class="row">
  <div class="col-md-6 text-center">
    <br>
    <p><font size=6 style = "font-family:Perpetua; background-color:#AAB7B8; color:FFFFFF" >EDITAR CANDIDATO</font></p>
  </div>
  <div class="col-md-6 text-center">
    <img src="https://ojo-publico.com/sites/default/files/2021-11/argentina-2.gif" alt="" height="90" width="210">
  </div>
</div>
<!-- <center><h1>NUEVO CANDIDATO</h1></center> -->
<form  class="" id="frm_editar_instructor" action="<?php echo site_url('Form/procesarActualizacion') ?>" method="post" style="background-color:#AAB7B8; ">
    <div class="row" >
      <div class="col-4 text-center">
        <input type="hidden" name="id_ca" id="id_ca" value="<?php echo $instructorEditar->id_ca; ?>">
        <label for="">Dignidad:</label>
        <br>
        <select class="form-select" aria-label="Default select example"
        class="form-control"
        name="dignidad_ca" value="<?php echo $instructorEditar->dignidad_ca; ?>"
        id="dignidad_ca">
          <option selected>Seleccione</option>
          <option value="Presidente">Presidente</option>
          <option value="Nacional">Nacional</option>
          <option value="Provincial">Provincial</option>
        </select>
        </div>
        <div class="col-4 text-center">
              <label for="">Nombre:</label>
              <br>
              <input type="text"
              placeholder="Ingrese el nombre del candidato"
              class="form-control"
              name="nombre_ca" value="<?php echo $instructorEditar->nombre_ca; ?>"
              id="nombre_ca" required>
          </div>
          <div class="col-md-4 text-center">
            <label for="">Apellido</label>
            <br>
            <input type="text"
            placeholder="Ingrese el apellido del candidato"
            class="form-control"
            name="apellido_ca" value="<?php echo $instructorEditar->apellido_ca; ?>"
            id="apellido_ca" required>
          </div>
        </div>
    <br>

        <div class="row">
          <div class="col-md-4 text-center">
              <label for="">Cedula del candidato</label>
              <br>
              <input type="number"
              placeholder="Ingrese la cedula del candidato"
              class="form-control"
              name="cedula_ca" value="<?php echo $instructorEditar->cedula_ca; ?>"
              id="cedula_ca" required>
            </div>
              <div class="col-md-4 text-center">
                  <label for="">Edad</label>
                  <br>
                  <input type="text"
                  placeholder="Ingrese la edad del candidato"
                  class="form-control"
                  name="edad_ca" value="<?php echo $instructorEditar->edad_ca; ?>"
                  id="edad_ca" required>
                </div>
                <div class="col-4 text-center">
                  <label for="">Movimiento:</label>
                  <br>
                  <select class="form-select" aria-label="Default select example"
                  class="form-control"
                  name="movimiento_ca" value="<?php echo $instructorEditar->movimiento_ca; ?>"
                  id="movimiento_ca" required>
                    <option selected>Seleccione</option>
                    <option value="RETO">RETO</option>
                    <option value="PACHAKUTIK">PACHAKUTIK</option>
                    <option value="CONSTRUYE">CONSTRUYE</option>
                  </select>
                  </div>
                </div>
        <br>
        <div class="row">
          <div class="col-md-4 text-center">
              <label for="">Latitud</label>
              <br>
              <input type="number"
              placeholder="Ingrese la latitud del candidato"
              class="form-control" readonly
              name="latitud_ca" value="<?php echo $instructorEditar->latitud_ca; ?>"
              id="latitud_ca" required>
          </div>
          <div class="col-md-4 text-center">
            <label for="">Longitud</label>
            <br>
            <input type="number"
            placeholder="Ingrese la longitud del candidato"
            class="form-control" readonly
            name="longitud_ca" value="<?php echo $instructorEditar->longitud_ca; ?>"
            id="longitud_ca" required>
          </div>
      </div>
        <br>
        <div class="row">
          <div class="col-md-8 text-center">
              <div id="mapaUbicacion" style="height:250px; width:100%; border:2px solid black;"></div>
          </div>
        <script type="text/javascript">
          function initMap(){
            var centro=
            new google.maps.LatLng(-1.596613, -78.351056);
            var mapa1=new google.maps.Map(
              document.getElementById('mapaUbicacion'),
              {
                center:centro,
                zoom:7,
                mapTypeId:google.maps.MapTypeId.G_DEFAULT_MAP_TYPES
              }
            );

            var marcador=new google.maps.Marker({
              position:centro,
              map:mapa1,
              title:"seleccione la dirección",
              icon:"<?php echo base_url(); ?>/assets/images/ubbi.png",
              draggable:true
            });
            google.maps.event.addDomListener(marcador,'dragend', function(event){
              // alert("se termino el Drag");
                document.getElementById('latitud_ca').value=
                this.getPosition().lat();
                document.getElementById('longitud_ca').value=
                this.getPosition().lng();
            });
          } //cierre de la funcion initMap
        </script>
    <div class="col-md-4 text-center">
        <button type="submit" name="button"
        class="btn btn-primary">
          Actualizar
        </button>
        &nbsp;
        <a href="<?php echo site_url(); ?>/Form/indexC"
          class="btn btn-danger">
          Cancelar
        </a>
    </div>
</div>
    </div>
</form>

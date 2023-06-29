<br>
<div class="row">
  <div class="col-md-2 text-center">
    <img src="https://www.gifservice.fr/img/gif-vignette-small/174c52f068e802394d5eb4aee0b9fc2a/205254-banderas-america-ecuador-smiley-ok.gif" alt="NAYEEEEEE" height="70" width="150">
  </div>
  <div class="col-md-8 text-center">
  <p><font size=6 style = "font-family:Copperplate; background-color:RED; color:white" >MAPA DE CANDIDATOS DE PRESIDENTES</font></p>
  </div>
  <div class="col-md-2 text-center">
    <img src="https://www.gifservice.fr/img/gif-vignette-small/174c52f068e802394d5eb4aee0b9fc2a/205254-banderas-america-ecuador-smiley-ok.gif" alt="NAYEEEEEE" height="70" width="150">
  </div>
</div>
<br>
<!-- Modal -->
<div class="modal fade" id="modalCasa1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PALOMO KEVIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="https://static.canarias7.es/www/multimedia/202107/08/media/casas_grande.gif" alt="casa" height="300"
          width="400">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 text-center">
    <div id="mapaLugares" style="height:470px; width:100%; border:2px solid black;">
    </div>
  </div>
</div>
<script type="text/javascript">
  function initMap() {
    console.log('ddd');
    var centro = new google.maps.LatLng(-0.917603, -78.633311);
    var mapaLugarPresidente =
      new google.maps.Map(
        document.getElementById('mapaLugares'),
        {
          center: centro,
          zoom: 6,
          mapTypeId: google.maps.MapTypeId.G_DEFAULT_MAP_TYPES
        }
      );
    let marcadores = [];
    <?php if ($lugares3): ?>
      <?php foreach ($lugares3 as $LugarTemporal): ?>
        var coordenadaTemporal =
          new google.maps.LatLng(<?php echo $LugarTemporal->latitud_ca ?>, <?php echo $LugarTemporal->longitud_ca ?>);
        var marcador = new google.maps.Marker({
          position: coordenadaTemporal,
          title: "<?php echo $LugarTemporal->nombre_ca ?>",
          icon: "<?php echo base_url(); ?>/assets/images/ubi_2.png",
          map: mapaLugarPresidente
        });
        marcadores.push(marcador);

      <?php endforeach; ?>
      // console.log(marcadores);
      marcadores.forEach(function (marcador) {
        console.log(2);
        marcador.setMap(mapaLugarPresidente);
      });

    <?php endif; ?>
  }
</script>

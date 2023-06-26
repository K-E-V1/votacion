<br>
<div class="row">
  <div class="col-md-12 text-center">
  <p>
    <font size=8 style = "font-family:Copperplate; background-color:yellow ; color:black" >LISTA</font>
    <font size=8 style = "font-family:Copperplate; background-color:blue; color:white" >DE</font>
    <font size=8 style = "font-family:Copperplate; background-color:red; color:white" >CANDIDATOS</font>
  </p>
  </div>

<?php if ($candidato): ?>
  <table class="table table-striped table-bordered table-hover" >
    <thead>
      <tr>
        <th>ID</th>
        <th>DIGNIDAD</th>
        <th>NOMBRE CANDIDATO</th>
        <th>APELLIDO CANDIDATO</th>
        <th>CEDULA CANDIDATO</th>
        <th>EDAD CANDIDATO</th>
        <th>MOVIMIENTO CANDIDATO</th>
        <th>LATITUD</th>
        <th>LONGITUD</th>
        <th>TIPO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($candidato as $filaTemporal): ?>
        <tr>
          <td>
            <?php echo $filaTemporal->id_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->dignidad_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->nombre_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->apellido_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->cedula_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->edad_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->movimiento_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->latitud_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->longitud_ca; ?>
          </td>
          <td>
            <?php echo $filaTemporal->op_ca; ?>
          </td>
          <td class="text-center">
            <a href="<?php echo site_url(); ?>/Form/eliminar/<?php echo $filaTemporal->id_ca; ?>" title="Eliminar Candidato" onclick="return confirm('Estas seguro de eliminar al candidato?');" style="color:red;">
            <i class="bi bi-person-fill-dash"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<?php else: ?>
  <h1>NO HAY DATOS</h1>
<?php endif; ?>

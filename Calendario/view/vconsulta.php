<section>
  <div class="container">
    <table class="table table-dark table-striped">
      <tr>
        <th>Mes</th>
        <th><?= $fecha -> getNombre()?></th>
      </tr>
      <tr>
        <th>Año</th>
        <th><?= $fecha -> getYear()?></th>
      </tr>
      <tr>
        <th>Tipo</th>
        <th><?= $fecha -> getTipo()?></th>
      </tr>
      <tr>
        <th>Cantidad días</th>
        <th><?= $fecha -> getDias()?></th>
      </tr>
    </table>
  </div>
</section>
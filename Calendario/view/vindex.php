<section>
  <form action="consulta.php" method="POST">
      <div class="container">

        <div class="form-group">
          <label for="year" class="form-label">Ingrese el año</label>
          <input type="number" class="form-control" id="year"  name="year">
          </div>
        <div class="form-group">
          <label for="mes" class="form-label">Ingrese el mes</label>
            <select class="form-select" id="mes" name="mes">
              <option selected>Seleccione un mes</option>
              <option value="1">Enero</option>
              <option value="2">Febrero</option>
              <option value="3">Marzo</option>
              <option value="1">Abril</option>
              <option value="2">Mayo</option>
              <option value="3">Junio</option>
              <option value="1">Julio</option>
              <option value="2">Agosto</option>
              <option value="3">Septiembre</option>
              <option value="1">Octubre</option>
              <option value="2">Noviembre</option>
              <option value="3">Diciembre</option>
            </select><br>
           <button type="submit" class="btn btn-primary">Calcular</button>
          </div>
  </form>
</section>
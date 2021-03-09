<section>
  <div class="container">
      <form action="cobro.php" method="post">
       <div class="form-group">
      <label for="indicativo">Indicativo</label><br>
  		<select class="form-select" aria-label="Default select example" name="indicativo" id="indicativo">
        <option selected>Selecione una opción</option>
        <option value="12">12</option>
        <option value="15">15</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="23">23</option>
        <option value="25">25</option>
        <option value="29">29</option>
      </select>
    </div>
    <div class="form-group">
      <label for="duracion">Duración</label>
      <input type="number" class="form-control" id="duracion" name="duracion">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
  </div>
      
    </form>
  </div>
</section>
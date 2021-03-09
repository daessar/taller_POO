<section>
  <div class="container">
    <form action="resultado.php" method="post">
      <label for="tipo">Tipo de paquete</label>
      <select class="form-select" name="tipo" id="tipo">
        <option selected>Selecione una opcion</option>
        <option value="carta">Carta</option>
        <option value="caja">Caja</option>
      </select>
      <br>
      <label for="servicio">Tipo de servicio</label>
      <select class="form-select" name="servicio" id="servicio">
        <option selected>Selecione una opcion</option>
        <option value="hoy">Hoy</option>
        <option value="tomorrow">Mañana</option>
      </select>
      <br>
      <label for="peso">Peso del envio </label>
      <input type="number" name="peso" placeholder="kg" >
      <br><br>
      <button type="submit" class="btn btn-primary">Cotizar</button> 
    </form>
  </div>
</section>
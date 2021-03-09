<section>
  <div class="container">
    <h3>Cantidad de pasajeros por trayecto</h3>
    <form action="resultado.php" method="POST">
      <div class="form-group">
        <table>
          <tr>
            <th><label for="neira">Neira </label></th>
            <th><input type="number" id="neira" name="neira" min="0" max="100"></th>
          </tr>
          <tr>
            <th><label for="aranzazu">Aranzazu </label></th>
            <th><input type="number" id="aranzazu" name="aranzazu" min="0" max="100"></th>
          </tr>
          <tr>
            <th><label for="salamina">Salamina </label></th>
            <th><input type="number" id="salamina" name="salamina" min="0" max="100"></th>
          </tr>
          <tr>
            <th><label for="pacora">Pacora </label></th>
            <th><input type="number" id="pacora" name="pacora" min="0" max="100"></th>
          </tr>
          <tr>
            <th><label for="aguadas">Aguadas </label></th>
            <th><input type="number" id="aguadas" name="aguadas" min="0" max="100"></th>
          </tr>
        </table> 
      </div>
      <br>
      <input class="btn btn-primary" type="submit" value="Calcular">
    </form>
  </div>
</section>
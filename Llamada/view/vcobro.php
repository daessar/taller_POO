<section>
	<div class="container">
		<table class="table table-dark">
			    <tr>
			      <td>Zona</td>
			      <td><?= $llamada->zona() ?></td>
			    </tr>
			    <tr>
			      <td>Total a pagar</td>
			      <td>$<?= $llamada->totalAPagar() ?> pesos</td>
			    </tr>
		</table>
	</div>
</section>
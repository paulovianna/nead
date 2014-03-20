<h1 class="titulo">
	<span class="glyphicon glyphicon-map-marker"></span>
	Ronda Alta
</h1>
<div class="row texto fundo">
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Endereço</h3>
		<p>Biblioteca Pública Municipal</p>
		<p>Rua Alecrim – Largo da Prefeitura</p>
		<p>(054) 3541-1025</p>
		<p>(054) 3541-1527</p>
	</div>
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Horários de Funcionamento</h3>
		<p>MANHÃ – Quarta, Sexta e Sábado (08h às 11h)</p>
		<p>TARDE – Sábado (13h30min às 17h30min)</p>
		<p>NOITE – Segunda, Terça, Quarta e Quinta (18:00 às 22:00)</p>
	</div>
</div>
<div class="row fundo">
	<div id="map" class="col-sm-12 col-md-12">
		<div id="mapa-trindade" class="mapa"></div>
	</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="scripts/maps.js" type="text/javascript"></script>
<script type="text/javascript">
	var mapTrindade = new google.maps.Map(document.getElementById("mapa-trindade"), myOptions);
	var latlngTrindade = new google.maps.LatLng(-27.522202,-52.901329);
	var titleTrindade = 'Polo e-Tec Trindade do Sul';

	init(mapTrindade,latlngTrindade,titleTrindade);
</script>           
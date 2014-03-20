<h1 class="titulo">
	<span class="glyphicon glyphicon-map-marker"></span>
	Ronda Alta
</h1>
<div class="row texto fundo">
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Endereço</h3>
		<p>CEMA – Centro Municipal de Atendimento / Telecentro</p>
		<p>Rua Francisco Costa, 180</p>
		<p>(054) 3364-1406</p>
	</div>
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Horários de Funcionamento</h3>
		<p>MANHÃ – Sábado (08h às 11h)</p>
		<p>TARDE – Sexta e Sábado (13h às 17:00)</p>
		<p>NOITE – Segunda, Terça, Quarta, Quinta e Sexta (17:30 às 22:30)</p>
	</div>
</div>
<div class="row fundo">
	<div id="map" class="col-sm-12 col-md-12">
		<div id="mapa-ronda" class="mapa"></div>
	</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="scripts/maps.js" type="text/javascript"></script>
<script type="text/javascript">
	var mapRonda = new google.maps.Map(document.getElementById("mapa-ronda"), myOptions);
	var latlngRonda = new google.maps.LatLng(-27.783202,-52.806526);
	var titleRonda = 'Polo e-Tec Ronda Alta';

	init(mapRonda,latlngRonda,titleRonda);
</script>           
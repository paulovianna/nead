<h1 class="titulo">
	<span class="glyphicon glyphicon-map-marker"></span>
	Palmeira das Missões
</h1>
<div class="row texto">
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Endereço</h3>
		<p>Telecentro Comunitário (Antiga CEEE)</p>
		<p>Rua Franscisco Pinheiro, 500</p>
		<p>(055) 8403-8845</p>
	</div>
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Horários de Funcionamento</h3>
		<p>MANHÃ – Quarta e Sábado (08h às 12h)</p>
		<p>TARDE – Terça, Quarta, Quinta, Sexta e Sábado (13h30min às 17h30min)</p>
		<p>NOITE – Segunda, Terça, Quarta e Quinta (19h às 22h)</p>
	</div>
</div>
<div class="row">
	<div id="map" class="col-sm-12 col-md-12">
		<div id="mapa-palmeira" class="mapa"></div>
	</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="scripts/maps.js" type="text/javascript"></script>
<script type="text/javascript">
	var mapPalmeira = new google.maps.Map(document.getElementById("mapa-palmeira"), myOptions);
	var latlngPalmeira = new google.maps.LatLng(-27.897349,-53.314011);
	var titlePalmeira = 'Polo e-Tec Palmeira das Missões';

	init(mapPalmeira,latlngPalmeira,titlePalmeira);
</script>           
<h1 class="titulo">
	<span class="glyphicon glyphicon-map-marker"></span>
	Constantina
</h1>
<div class="row texto fundo">
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Endereço</h3>
		<p>Escola Municipal de Ensino Fundamental Santa Terezinha</p>
		<p>Av. Amandio Araújo, 1125</p>
		<p>(054) 3363-1186</p></div>
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Horários de Funcionamento</h3>
		<p>MANHÃ – Sábado (08h às 12h)</p>
		<p>TARDE – Segunda, Terça, Quarta, Quinta, Sexta e Sábado (14h às 18h)</p>
		<p>NOITE – Segunda, Terça, Quarta, Quinta e Sexta (18h às 22h)</p>
	</div>
</div>
<div class="row fundo">
	<div id="map" class="col-sm-12 col-md-12">
		<div id="mapa-constantina" class="mapa"></div>
	</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="scripts/maps.js" type="text/javascript"></script>
<script type="text/javascript">
	var mapConstantina = new google.maps.Map(document.getElementById("mapa-constantina"), myOptions);
	var latlngConstantina = new google.maps.LatLng(-27.732161,-52.994324);
	var titleConstantina = 'Polo e-Tec Constantina';

	init(mapConstantina,latlngConstantina,titleConstantina);
</script>
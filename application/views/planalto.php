<h1 class="titulo">
	<span class="glyphicon glyphicon-map-marker"></span>
	Planalto
</h1>
<div class="row texto fundo">
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Endereço</h3>
		<p>Escola Municipal de Ensino Fundamental Mario Quintana</p>
		<p>Rua Benjamin Constant, 500</p>
		<p>(055) 3794-1464</p>
	</div>
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Horários de Funcionamento</h3>
		<h4>Horários de Funcionamento</h4><br>
		<p>MANHÃ – Segunda, Terça, Quarta, Quinta, Sexta e Sábado</p>
		<p>TARDE – Segunda e Sábado</p>
		<p>NOITE – Terça, Quinta e Sexta</p>
	</div>
</div>
<div class="row fundo">
	<div id="map" class="col-sm-12 col-md-12">
		<div id="mapa-planalto" class="mapa"></div>
	</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="scripts/maps.js" type="text/javascript"></script>
<script type="text/javascript">
	var mapPlanalto = new google.maps.Map(document.getElementById("mapa-planalto"), myOptions);
	var latlngPlanalto = new google.maps.LatLng(-27.331973,-53.059357);
	var titlePlanalto = 'Polo e-Tec Planalto';

	init(mapPlanalto,latlngPlanalto,titlePlanalto);
</script>           
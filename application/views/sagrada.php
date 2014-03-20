<h1 class="titulo">
	<span class="glyphicon glyphicon-map-marker"></span>
	Ronda Alta
</h1>
<div class="row texto fundo">
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Endereço</h3>
		<p>Escola Estadual de Ensino Fundamental João Batista Winck</p>
		<p>Rua Leonel Rocha S/N</p>
		<p>(055) 3616-9181</p>
	</div>
	<div class="col-sm-6 col-md-6">
		<h3 class="dados-polo">Horários de Funcionamento</h3>
		<p>MANHÃ – Sábado</p>
		<p>TARDE – Sexta e Sábado</p>
		<p>NOITE – Terça, Quarta e Sexta</p>
	</div>
</div>
<div class="row fundo">
	<div id="map" class="col-sm-12 col-md-12">
		<div id="mapa-sagrada" class="mapa"></div>
	</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="scripts/maps.js" type="text/javascript"></script>
<script type="text/javascript">
	var mapSagrada = new google.maps.Map(document.getElementById("mapa-sagrada"), myOptions);
	var latlngSagrada = new google.maps.LatLng(-27.734573,-53.167416);
	var titleSagrada = 'Polo e-Tec Sagrada Família';

	init(mapSagrada,latlngSagrada,titleSagrada);
</script>           
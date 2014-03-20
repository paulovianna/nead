<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Caros alunos,</h4>
			</div>
			<div class="modal-body">
				<p style="text-align:justify;">
				Alunos matrículados nos cursos Técnico em Agroindustria e Técnico em Informática para Internet na 
				modalidade EAD, nos polos da cidade de Constantina, Ronda Alta, Planalto, Trindade do Sul e Palmeira das 
				Missões, estamos realizando os últimos ajustes de matrículas, alunos que não possuem matrículas e alunos que 
				já possuem matrículas e não estão conseguindo acessar o ambiente virtual (<a href="http://ead.cafw.ufsm.br">http://ead.cafw.ufsm.br</a>), até o dia 
				<b>14/03/2014</b> pela parte da tarde já estarão regularizados.
				</p>
				<p>
				Qualquer dúvida entre em contato pelo email <b>suporteeadcafw@gmail.com</b> ou pelo telefone <b>(55) 3744-8989</b>.
				</p>
			</div>
		</div>
	</div>
</div>-->
<h1 class="titulo">
	<span class="glyphicon glyphicon-globe"></span>
	Últimas Notícias
</h1>
<div class="row">
	<div class="col-sm-12 col-md-12 fundo">
		<div class="row">
			<?php foreach($noticias1 as $noticia1){?>
			<div class="col-md-3 ultima-noticia">
				<a href="noticias/noticia/<?php echo $noticia1->id;?>" class="ultima-noticia"><?php echo $noticia1->titulo;?></a>
				<h5 class="ultima-noticia"><?php echo date("d-m-Y | H:i", strtotime($noticia1->criado_em));?></h5>
			</div>
			<?php }?>
		</div>
		<div class="row">
			<?php foreach($noticias2 as $noticia2){?>
			<div class="col-md-3 ultima-noticia">
				<a href="noticias/noticia/<?php echo $noticia2->id;?>" class="ultima-noticia"><?php echo $noticia2->titulo;?></a>
				<h5 class="ultima-noticia"><?php echo date("d-m-Y | H:i", strtotime($noticia2->criado_em));?></h5>
			</div>
			<?php }?>
		</div>
	</div>
</div>
<h1 class="titulo">
	<span class="glyphicon glyphicon-file"></span>
	Últimos Editais
</h1>
<div class="row">
	<div class="col-sm-12 col-md-12 lista-ultimos-editais fundo">
		<table class="table table-striped table-bordered">
			<thead class="cabecalho">
			    <tr>
			        <th class="col-md-9">Edital</th>
			        <th class="col-md-3">Perfil</th>
			    </tr>
			</thead>
			<tbody>
				<tr>
			        <td><a href="docs/primeira-chamada-suplente-tutor-02-2014.pdf" target="_blank">1ª Chamada de Tutores Suplentes (Edital 02/2014)</a></td>
			        <td>Tutor</td>
			    </tr>
				<tr>
			        <td><a href="docs/primeira-chamada-de-suplentes-aluno.pdf" target="_blank">1ª Chamada de Suplentes relativa ao Edital de Abertura de Vagas</a></td>
			        <td>Aluno</td>
			    </tr>
			    <tr>
			        <td><a href="docs/resultado-edital-complementar.pdf" target="_blank">Resultado do Edital de Abertura de Vagas - Ingresso, Reingresso e Transferência</a></td>
			        <td>Aluno</td>
			    </tr>
			    <tr>
			        <td><a href="docs/resultado-tutores-02-2014.pdf" target="_blank">Resultado Final (Edital 02/2014)</a></td>
			        <td>Tutor</td>
			    </tr>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
    $('#myModal').modal({
      show: true
    })
</script>

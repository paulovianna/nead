<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="width:100%;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Problemas Acesso ao Moodle</h4>
			</div>
			<div class="modal-body">
				<p style="text-align:justify;">
					Comunicamos que o acesso ao Moodle está sendo prejudicado por uma falha na comunicação
					com os servidores da UFSM em Santa Maria, com isso fica impossibilitada a autenticação
					de usuários.
				</p>
				<p style="text-align:justify;">
					Estamos trabalhando para resolver este problema, com a previsão de retorno do funcionamento 
					normal do acesso até o final do dia de hoje (12/09).
				</p>
				<p style="text-align:justify;">
					Agradecemos a compreensão de todos.
				</p>
			</div>
		</div>
	</div>
</div>-->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=342025892533382";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
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
			        <td><a href="docs/edital46-2014-reingresso.pdf" target="_blank">Abertura de Vagas para Reingresso nos Cursos Técnicos EaD</a></td>
			        <td>Aluno</td>
			    </tr>
				<tr>
			        <td><a href="docs/2-chamada-suplente-51-2013.pdf" target="_blank">2ª Chamada de Tutores Suplentes (Edital 51/2013)</a></td>
			        <td>Tutor</td>
			    </tr>
				<tr>
			        <td><a href="docs/aproveitamentos-informatica-2014.pdf" target="_blank">Resultado do Pedido de Aproveitamento de Disciplinas - Informática para Internet</a></td>
			        <td>Aluno</td>
			    </tr>
				<tr>
			        <td><a href="docs/aproveitamentos-agroindustria-2014.pdf" target="_blank">Resultado do Pedido de Aproveitamento de Disciplinas - Agroindústria</a></td>
			        <td>Aluno</td>
			    </tr>
			</tbody>
		</table>
	</div>
</div>
<h1 class="titulo">
	<span class="glyphicon glyphicon-thumbs-up"></span>
	Redes Sociais
</h1>
<div class="row">
	<div class="col-sm-12 col-md-12 fundo lista-ultimos-editais">
		<div class="fb-like-box" data-href="https://www.facebook.com/PronatecCAFW" data-width="100%" data-height="100%" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
	</div>
</div>
<!--<script type="text/javascript">
	$('#myModal').modal('show');
</script>-->

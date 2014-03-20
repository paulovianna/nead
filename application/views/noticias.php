<h1 class="titulo">
	<span class="glyphicon glyphicon-th-list"></span>
	Notícias
</h1>
<div class="row texto fundo">
	<div class="col-sm-12 col-md-12">
		<table class="table table-striped table-bordered">
			<thead class="cabecalho">
			    <tr>
			        <th class="col-md-9">Notícia</th>
			        <th class="col-md-9">Data</th>
			    </tr>
			</thead>
			<tbody>
				<?php foreach ($noticias as $noticia){?>
				<tr>
			        <td><a href="noticias/noticia/<?php echo $noticia->id;?>"><?php echo $noticia->titulo;?></a></td>
			        <td><?php echo date("d-m-Y | H:i", strtotime($noticia->criado_em));?></td>
			    </tr>
			    <?php }?>
			</tbody>
		</table>
	</div>
</div>
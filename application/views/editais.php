<h1 class="titulo">
	<span class="glyphicon glyphicon-file"></span>
	Editais
</h1>
<div class="row texto fundo">
	<div class="col-sm-12 col-md-12 lista-ultimos-editais">
		<table class="table table-striped table-bordered">
			<thead class="cabecalho">
			    <tr>
			        <th class="col-md-9"><h3>Alunos</h3></th>
			    </tr>
			</thead>
			<tbody>
				<?php foreach($alunos as $aluno):?>
				<tr>
			        <td><a href="docs/<?php echo $aluno->arquivo;?>" target="_blank"><?php echo $aluno->titulo;?></a></td>
			    </tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<div class="row texto fundo">
	<div class="col-sm-12 col-md-12 lista-ultimos-editais">
		<table class="table table-striped table-bordered">
			<thead class="cabecalho">
			    <tr>
			        <th class="col-md-9"><h3>Professores</h3></th>
			    </tr>
			</thead>
			<tbody>
				<?php foreach($professores as $professor):?>
				<tr>
			        <td><a href="docs/<?php echo $professor->arquivo;?>" target="_blank"><?php echo $professor->titulo;?></a></td>
			    </tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<div class="row texto fundo">
	<div class="col-sm-12 col-md-12 lista-ultimos-editais">
		<table class="table table-striped table-bordered">
			<thead class="cabecalho">
			    <tr>
			        <th class="col-md-9"><h3>Tutores</h3></th>
			    </tr>
			</thead>
			<tbody>
				<?php foreach($tutores as $tutor):?>
				<tr>
			        <td><a href="docs/<?php echo $tutor->arquivo;?>" target="_blank"><?php echo $tutor->titulo;?></a></td>
			    </tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
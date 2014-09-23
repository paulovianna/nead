<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen"/>
<h1 class="titulo">
	<span class="glyphicon glyphicon glyphicon-picture"></span>
	<?php echo $galeria->nome;?>
</h1>
<p><?php echo $galeria->descricao;?></p>
<?php $aux=0; foreach($imagens as $imagem):?>
  <?php if($aux == 0 || ($aux%4) == 0){?><div class="row texto fundo"><?php }?>
	<div class="col-sm-3 col-md-3">
		<a href="fotos/<?php echo $imagem->id_galeria;?>/<?php echo $imagem->arquivo . $imagem->extencao;?>" data-gall="galeria" class="thumbnail venobox">
			<img src="fotos/<?php echo $imagem->id_galeria;?>/<?php echo $imagem->arquivo .'_thumb' . $imagem->extencao;?>" alt="">
		</a>
	</div>
<?php if($aux == 3 || (($aux+1)%4 == 0)){?></div><?php }?>
<?php $aux++;endforeach;?>
</div>
<script type="text/javascript" src="venobox/venobox.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.venobox').venobox();
});
</script>
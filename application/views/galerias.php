<h1 class="titulo">
	<span class="glyphicon glyphicon glyphicon-picture"></span>
	Galeria de Fotos
</h1>
<?php $aux=0; foreach($galerias as $galeria):?>
  <?php if($aux == 0 || ($aux%4) == 0){?><div class="row texto fundo"><?php }?>
	<div class="col-sm-3 col-md-3">
		<a href="galerias/galeria/<?php echo $galeria->id;?>" class="thumbnail">
      		<img src="fotos/<?php echo $galeria->id;?>/<?php echo $galeria->capa;?>" alt="">
      		<p><?php echo $galeria->nome;?></p>
    	</a>

	</div>
<?php if($aux == 3 || (($aux+1)%4 == 0)){?></div><?php }?>
<?php $aux++;endforeach;?>
</div>
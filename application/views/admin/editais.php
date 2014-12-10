<!DOCTYPE html>
<html lang="pt-br">
<?php $this->load->view('admin/head');?>
<body>

    <div id="wrapper">
        <?php $this->load->view('admin/nav');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editais</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editais Cadastrados
                            <div class="pull-right">
                                <a href="<?php echo base_url();?>admin/form_novo_edital"><button type="button" class="btn btn-primary btn-xs">Novo Edital</button></a>
                            </div>
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php if(isset($sucesso)){?>
                                <?php if($sucesso){?>
                                    <div class="alert alert-success"><?php echo $mensagem;?></div>
                                <?php }else{?>
                                    <div class="alert alert-danger"><?php echo $mensagem;?></div>
                                <?php }?>
                            <?php }?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-editais">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>arquivo</th>
                                            <th>Perfil</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($editais as $edital):?>
                                        <tr>
                                            <td><?=$edital->titulo;?></td>
                                            <td><a href="<?=base_url();?>docs/<?=$edital->arquivo;?>" target="_blank"><?=$edital->arquivo;?></a></td>
                                            <td><?=$edital->categoria;?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>admin/form_editar_edital/<?=$edital->id;?>"><button type="button" class="btn btn-outline btn-primary btn-xs">Editar</button></a>
                                                <button type="button" class="btn btn-outline btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?=$edital->id;?>">Excluir</button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <?php foreach($editais as $edital):?>
                                    <div class="modal fade" id="myModal<?=$edital->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Excluir Edital?</h4>
                                          </div>
                                          <div class="modal-body">
                                            Para deletar o edital confirme a ação.
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <a href="<?php echo base_url();?>admin/deletar_edital/<?=$edital->id;?>"><button type="button" class="btn btn-danger">Deletar</button></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('admin/scripts.php');?>
</body>

</html>

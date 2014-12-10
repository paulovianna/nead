<!DOCTYPE html>
<html lang="pt-br">
<?php $this->load->view('admin/head');?>
<body>

    <div id="wrapper">
        <?php $this->load->view('admin/nav');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agenda</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Eventos Apresentados na Agenda
                            <div class="pull-right">
                                <a href="<?php echo base_url();?>admin/novo_evento"><button type="button" class="btn btn-primary btn-xs">Novo Evento</button></a>
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Link</th>
                                            <th>Classe</th>
                                            <th>Início</th>
                                            <th>Fim</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($eventos as $evento):?>
                                        <tr>
                                            <td><?=$evento->titulo;?></td>
                                            <td><a href="<?=$evento->url;?>" target="_blank"><?=$evento->url;?></a></td>
                                            <td>
                                            <?php
                                                switch ($evento->classe) {
                                                    case 'event-warning':
                                                        echo 'Amarelo';
                                                        break;
                                                    case 'event-info':
                                                        echo 'Azul';
                                                        break;
                                                    case 'event-inverse':
                                                        echo 'Preto';
                                                        break;
                                                    case 'event-special':
                                                        echo 'Roxo';
                                                        break;
                                                    case 'event-success':
                                                        echo 'Verde';
                                                        break;
                                                    case 'event-important':
                                                        echo 'Vermelho';
                                                        break;
                                                    default:
                                                        echo 'Cinza';
                                                        break;
                                                }
                                                $evento->classe;
                                            ?>
                                            </td>
                                            <td class="center"><?=date('d-m-Y | h:i', strtotime($evento->inicio));?></td>
                                            <td class="center"><?=date('d-m-Y | h:i', strtotime($evento->fim));?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>admin/form_editar_evento/<?=$evento->id;?>"><button type="button" class="btn btn-outline btn-primary btn-xs">Editar</button></a>
                                                <button type="button" class="btn btn-outline btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?=$evento->id;?>">Excluir</button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <?php foreach($eventos as $evento):?>
                                    <div class="modal fade" id="myModal<?=$evento->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Excluir Evento?</h4>
                                          </div>
                                          <div class="modal-body">
                                            Para deletar o evento confirme a ação.
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <a href="<?php echo base_url();?>admin/deletar_evento/<?=$evento->id;?>"><button type="button" class="btn btn-danger">Deletar</button></a>
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

<!DOCTYPE html>
<html lang="pt-br">
<?php $this->load->view('admin/head');?>
<body>
    <div id="wrapper">
        <?php $this->load->view('admin/nav');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Evento</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulário para alteração de evento
                            <div class="pull-right">
                                <a href="<?php echo base_url();?>admin/agenda"><button type="button" class="btn btn-primary btn-xs">Voltar</button></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <?php if(isset($sucesso)){?>
                                    <?php if($sucesso){?>
                                        <div class="alert alert-success"><?php echo $mensagem;?></div>
                                    <?php }else{?>
                                        <div class="alert alert-danger"><?php echo $mensagem;?></div>
                                    <?php }?>
                                <?php }?>
                                <?php echo validation_errors(); ?>
                                    <?php echo form_open(base_url().'admin/editar_evento');?>
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input class="form-control" name="titulo" value="<?=$evento->titulo;?>">
                                            <p class="help-block">Informe o título do evento</p>
                                        </div>
                                        <div class="form-group">
                                            <label>URL</label>
                                            <input class="form-control" name="url" value="<?=$evento->url;?>">
                                            <p class="help-block">Informe o endereço web do evento</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Classe do evento</label>
                                            <select class="form-control" name="classe">
                                                <option <?php if($evento->classe == 'event-warning') echo 'selected';?> value="event-warning">Amarelo</option>
                                                <option <?php if($evento->classe == 'event-info') echo 'selected';?> value="event-info">Azul</option>
                                                <option <?php if($evento->classe == '0') echo 'selected';?> value="0">Cinza</option>
                                                <option <?php if($evento->classe == 'event-inverse') echo 'selected';?> value="event-inverse">Preto</option>
                                                <option <?php if($evento->classe == 'event-special') echo 'selected';?> value="event-special">Roxo</option>
                                                <option <?php if($evento->classe == 'event-success') echo 'selected';?> value="event-success">Verde</option>
                                                <option <?php if($evento->classe == 'event-important') echo 'selected';?> value="event-important">Vermelho</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Início</label>
                                            <input type="text" value="<?=date('d-m-Y h:i',strtotime($evento->inicio));?>" class="form-control form_datetime" name="inicio" readonly>
                                            <p class="help-block">Informe a data de início do evento</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Encerramento</label>
                                            <input type="text" value="<?=date('d-m-Y h:i',strtotime($evento->fim));?>" class="form-control form_datetime" name="encerramento" readonly>
                                            <p class="help-block">Informe a data de encerramento do evento</p>
                                        </div>
                                        <input type="hidden" name="id" value="<?=$evento->id;?>">
                                        <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Salvar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <?php $this->load->view('admin/scripts.php');?>
</body>

</html>

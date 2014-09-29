<!DOCTYPE html>
<html lang="pt-br">
<?php $this->load->view('admin/head');?>
<body>
    <div id="wrapper">
        <?php $this->load->view('admin/nav');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Novo Evento</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulário para cadastro de um novo evento
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
                                    <?php echo form_open(base_url().'admin/novo_evento');?>
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input class="form-control" name="titulo">
                                            <p class="help-block">Informe o título do evento</p>
                                        </div>
                                        <div class="form-group">
                                            <label>URL</label>
                                            <input class="form-control" name="url">
                                            <p class="help-block">Informe o endereço web do evento</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Classe do evento</label>
                                            <select class="form-control" name="classe">
                                                <option value="event-warning">Amarelo</option>
                                                <option value="event-info">Azul</option>
                                                <option value="0">Cinza</option>
                                                <option value="event-inverse">Preto</option>
                                                <option value="event-special">Roxo</option>
                                                <option value="event-success">Verde</option>
                                                <option value="event-important">Vermelho</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Início</label>
                                            <input type="text" value="<?php echo date('d-m-Y h:i');?>" class="form-control form_datetime" name="inicio" readonly>
                                            <p class="help-block">Informe a data de início do evento</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Encerramento</label>
                                            <input type="text" value="<?php echo date('d-m-Y h:i');?>" class="form-control form_datetime" name="encerramento" readonly>
                                            <p class="help-block">Informe a data de encerramento do evento</p>
                                        </div>
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

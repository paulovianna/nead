<!DOCTYPE html>
<html lang="pt-br">
<?php $this->load->view('admin/head');?>
<body>
    <div id="wrapper">
        <?php $this->load->view('admin/nav');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Edital</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulário para editar um edital
                            <div class="pull-right">
                                <a href="<?php echo base_url();?>admin/editais"><button type="button" class="btn btn-primary btn-xs">Voltar</button></a>
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
                                    <?php echo form_open_multipart(base_url().'admin/editar_edital');?>
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input class="form-control" name="titulo" value="<?=$edital->titulo;?> ">
                                            <p class="help-block">Informe o título do edital</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Perfil do Edital</label>
                                            <select class="form-control" name="perfil">
                                                <option value="Alunos" <?php if($edital->categoria == "Alunos") echo "selected";?>>Aluno</option>
                                                <option value="Professores" <?php if($edital->categoria == "Professores") echo "selected";?>>Professor</option>
                                                <option value="Tutores" <?php if($edital->categoria == "Tutores") echo "selected";?>>Tutor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Arquivo</label>
                                            <input type="file" id="userfile" name="userfile">
                                            <p class="help-block">Selecione o arquivo</p>
                                        </div>
                                        <input type="hidden" name="id" value="<?=$edital->id;?>">
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

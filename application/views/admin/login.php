<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Administração do website Núcleo de Educação a Distância">
    <meta name="author" content="Paulo Henrique Vianna">

    <title>Administração - NEaD</title>
    <link href="<?php echo base_url();?>admin-panel/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin-panel/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin-panel/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin-panel/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Usuário - NEaD</h3>
                    </div>
                    <div class="panel-body">
                    <?php echo validation_errors(); ?>
                    <?php 
                          echo form_open(base_url().'admin/login');?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário" name="usuario" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                </div>
                                <button class="btn btn-lg btn-primary btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>admin-panel/js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url();?>admin-panel/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admin-panel/js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>admin-panel/js/sb-admin-2.js"></script>

</body>

</html>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>admin">Administração NEaD</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('usuario')['nome'];?></a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a class="<?php if($area == 'home') echo 'active';?>" href="<?php echo base_url();?>admin"><i class="fa fa-home fa-fw"></i> Home</a>
                </li>
                <li>
                    <a class="<?php if($area == 'agenda') echo 'active';?>" href="<?php echo base_url();?>admin/agenda"><i class="fa fa-calendar fa-fw"></i> Agenda</a>
                </li>
                <li style="opacity:0.4;">
                    <a href="#"><i class="fa fa-list-alt fa-fw"></i> Editais <span>(Breve)</span></a>
                </li>
                <li style="opacity:0.4;">
                    <a href="#"><i class="fa fa-list fa-fw"></i> Notícias <span>(Breve)</span></a>
                </li>
                <li style="opacity:0.4;">
                    <a href="#"><i class="fa fa-user fa-fw"></i> Usuários <span>(Breve)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
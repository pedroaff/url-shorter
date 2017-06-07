<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Url shorter</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link	href='https://fonts.googleapis.com/css?family=Roboto:300'	rel='stylesheet'	type='text/css'>
    <link	href="<?php echo base_url(); ?>/assets/css/layout.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <buton class="navbar-toggle collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </buton>
          <a href="" class="navbar-brand" href="<?=base_url()?>">Encurtador de URLs</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="<?=base_url()?>">Home</a></li>
            <?php if($this->session->userdata('logged')){?>
              <li><a href="<?=base_url('minhas-urls')?>">Minhas URLs</a></li>
              <li><a href="<?=base_url('alterar-senha')?>">Alterar senha </a></li>
              <li><a href="<?=base_url('logout')?>">Sair</a></li>
              <li><a href="<?=base_url('login')?>">Login/Cadastro</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

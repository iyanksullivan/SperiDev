<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Speri-guds</title>
	<link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url()?>assets/asie/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/jquery/jquery-ui.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url()?>assets/asie/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            < class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/logos.png"></a> -->
          <a class="navbar-brand" href="<?=site_url('Page/index')?>">Speri-guds</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?=site_url('Page/index')?>">Beranda</a></li>
            <li><a href="<?=site_url('Page/aboutUs')?>"> Tentang Kami</a></li>
            <li><a href="<?=site_url('Page/petunjukBayar')?>"><i class="glyphicon glyphicon-briefcase"></i> Bantuan</a></li>
            <li><a href="<?=site_url('Shopping/viewCart')?>"><i class="glyphicon glyphicon-shopping-cart"></i>  Keranjang</a></li>
            <li><a href="<?=site_url('Customer/index')?>"><i class="glyphicon glyphicon-user"></i> <?php echo $username; ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

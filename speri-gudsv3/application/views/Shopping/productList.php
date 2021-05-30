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
          <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/logos.png"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
            <li><a href="<?php echo site_url()?>/Page/aboutUs"><i class="glyphicon glyphicon-user"></i> Tentang</a></li>
            <li><a href="<?php echo site_url()?>/Page/petunjukBayar"><i class="glyphicon glyphicon-briefcase"></i> Cara Bayar</a></li>
            <li><a href="<?php echo site_url()?>/Shopping/viewCart"><i class="glyphicon glyphicon-shopping-cart"></i>  Keranjang Belanja</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 
    <!-- Begin page content -->
<div class="container">
 
<div class="row">
 
        <<!-- div class="col-lg-3">
 
          <div class="list-group">
            <a class="list-group-item"><strong>KATEGORI</strong></a>
            <a href="<?php echo site_url()?>shopping/index/" class="list-group-item">Semua</a>
            <?php
                    foreach ($kategori as $row)
                        {
            ?>
            <a href="<?php echo site_url()?>shopping/index/<?php echo $row['id'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a>
            <?php
                        }
            ?>
          </div><br> -->
 
           <div class="list-group">
           <a href="<?php echo site_url()?>shopping/tampil_cart" class="list-group-item"><strong><i class="glyphicon glyphicon-shopping-cart"></i> KERANJANG BELANJA</strong></a>
          <?php 
 
            $cart= $this->cart->contents();
 
            // If cart is empty, this will show below message.
            if(empty($cart)) {
                ?>
                <a class="list-group-item">Keranjang Belanja Kosong</a>
                <?php
            }
            else
                {
                    $grand_total = 0;
                    foreach ($cart as $item)
                        {
                            $grand_total+=$item['subtotal'];
                ?>
                <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
                <?php
                        }
                ?>
 
                <?php
                }
 ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->
 
        <div class="col-lg-9">
 
<div class="row">

<h2>Daftar Produk</h2>
<?php
    foreach ($sparepart as $row) {
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?php echo site_url();?>shopping/tambah" method="post" accept-charset="utf-8">
                <a href="#"><img class="img-thumbnail" src="<?php echo site_url() . 'assets/images/'.$row['foto']; ?>"/></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $row['nama'];?></a>
                  </h4>
                  <h5>Rp. <?php echo number_format($row['harga'],0,",",".");?></h5>
                  <p class="card-text"><?php echo $row['manufaktur'];?></p>
                </div>
                <div class="card-footer">
                  <a href="<?php echo site_url();?>/Shopping/productDetail/<?php echo $row['kode'];?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a> 
 
 
                  <input type="hidden" name="id" value="<?php echo $row['kode']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $row['nama']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
                  <input type="hidden" name="foto" value="<?php echo $row['foto']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                </div>
                </form>
              </div>
            </div>
<?php
    }
?>

</div>
          <!-- /.row -->
   </div>
        <!-- /.col-lg-9 -->
 
 
      </div>
      <!-- /.row -->
 
    </div>
 <footer class="footer">
      <div class="container">
        <p class="text-muted"><center>Speri-guds</center></p>
      </div>
    </footer>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/arf.js"></script>
    <script src="<?php echo base_url()?>assets/js/prs.js"></script>
    <script src="<?php echo base_url()?>assets/js/validation.js"></script>
    <script src="<?php echo base_url()?>assets/jquery/jquery-ui.js"></script>
    <script src="<?php echo base_url()?>assets/jquery/jquery.validate.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>assets/asie/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
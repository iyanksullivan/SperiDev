<h2>Daftar Produk</h2>
<?php
    foreach ($sparepart as $row) {
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?=site_url('Shopping/add')?>" method="post" accept-charset="utf-8">
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
<div>
  <h2>Daftar Belanja</h2>
  <form action="<?php echo site_url()?>/Shopping/edit" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
  <?php
    if ($cart = $order_detail)
      {
  ?>

      <table class="table">
      <tr id= "main_heading">
      <td width="2%">No</td>
      <td width="10%">Foto</td>
      <td width="33%">Item</td>
      <td width="17%">Harga</td>
      <td width="8%">Qty</td>
      <td width="20%">Jumlah</td>
      <td width="10%">Hapus</td>
      </tr>
      <?php
      // Create form and send all values in "shopping/update_cart" function.
      $total = 0;
      $i = 0;

      foreach ($order_detail as $item):
        $total = $total + ($item['qty'] * $item['harga']);
      ?>
      <input type="hidden" name="kode" value="<?php echo $item['id'];?>" />
      <input type="hidden" name="namaSparepart" value="<?php echo $item['namaSparepart'];?>" />
      <input type="hidden" name="harga" value="<?php echo $item['harga'];?>" />
      <input type="hidden" name="foto" value="<?php echo $item['foto'];?>" />
      <input type="hidden" name="qty" value="<?php echo $item['qty'];?>" />
      <tr>
      <td><?php echo $i++; ?></td>
      <td><img class="img-responsive" src="<?php echo base_url() . 'assets/images/'.$item['foto']; ?>"/></td>
      <td><?php echo $item['namaSparepart']; ?></td>
      <td><?php echo number_format($item['harga'], 0,",","."); ?></td>
      <td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
      <td><?php echo number_format($item['qty'] * $item['harga'], 0,",",".") ?></td>
      <td><a href="<?php echo site_url()?>/Shopping/delete/<?php echo $item['id'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
      <?php endforeach; ?>
      </tr>
      <tr>
      <td colspan="3"><b>Order Total: Rp <?php echo number_format($total, 0,",","."); ?></b></td>
      <td colspan="4" align="right">
      <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
      <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
      <a href="<?php echo site_url()?>/Shopping/checkout"  class ='btn btn-sm btn-primary'>Check Out</a>
      </tr>

      </table>
  <?php
      }
    else
      {
        echo "<h3>Keranjang Belanja masih kosong</h3>";	
      }	
  ?>
  </form>


    <!-- Modal Penilai -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
          <form method="post" action="<?php echo site_url()?>/Shopping/delete/all">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Konfirmasi</h4>
          </div>
          <div class="modal-body">
        Anda yakin mau mengosongkan shopping cart ini?
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-sm btn-default">Ya</button>
          </div>
          
          </form>
        </div>
        
      </div>
    </div>
</div>
  <!--End Modal-->
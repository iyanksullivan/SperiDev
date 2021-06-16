<div class="container">
  <?php 
          if(empty($error)){}
          else if($error){
            echo "<div class='alert alert-danger' role='alert'><center>".$error."</center></div>";
          }
          if(empty($alert)){}
          else if($alert){
            echo "<div class='alert alert-success' role='alert'><center>".$alert."</center></div>";
          }         
  ?>  
  <div>
    <h2>Daftar Belanja</h2>
    <form action="<?php echo site_url()?>/Shopping/edit" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
    <?php
      if ($cart = $cart)
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
        <td width="10%">Aksi</td>
        </tr>
        <?php
        // Create form and send all values in "shopping/update_cart" function.
        $total = 0;
        $i = 0;

        foreach ($cart as $item):
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
        <td><?php echo $item['qty'];?></td>
        <td><?php echo number_format($item['qty'] * $item['harga'], 0,",",".") ?></td>
        <td>          
          <a href="<?php echo site_url()?>/Shopping/edit/<?php echo $item['kodeSparepart'];?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>          
          <a href="<?php echo site_url()?>/Shopping/delete/<?php echo $item['id'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
        <?php endforeach; ?>
        </tr>
        <tr>
        <td colspan="3"><b>Order Total: Rp <?php echo number_format($total, 0,",","."); ?></b></td>
        <td colspan="4" align="right">
        <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>      
        <a href="<?php echo site_url()?>/Shopping/checkout"  class ='btn btn-sm btn-success'>Check Out</a>
        </tr>

        </table>
    <?php
        }
      else
        {
          echo "<h3><center>Keranjang Belanja masih kosong<center></h3>";	
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
</div>
  <!--End Modal Delete-->
  <!-- Modal Edit
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url()?>/Shopping/edit/<?php echo $item['id']?>">
          <input type="hidden" name="namaSparepart" value="<?php echo $item['namaSparepart'];?>" />
          <input type="hidden" name="harga" value="<?php echo $item['harga'];?>" />
          <input type="hidden" name="qty" value="<?php echo $item['qty'];?>" />
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
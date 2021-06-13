<div class="container">
  <div>
    <h2>Histori Pesanan Anda</h2>
    <?php
      if ($order = $order)
        {
    ?>

        <table class="table">
        <tr id= "main_heading">
        <td width="5%"><strong>No<strong></td>        
        <td width="10%"><strong>Tanggal<strong></td>
        <td width="10%"><strong>Kode Pesanan<strong></td>        
        <td width="20%"><strong>Total belanja<strong></td>
        <td width="20%"><strong>Bank Pembayaran<strong></td>
        <td width="20%"><strong>Kode Bayar<strong></td>
        <td width="15%"><strong>Status<strong></td>
        </tr>
        <?php
        $i = 1;

        foreach ($order as $item):         
        ?>        
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $item['tanggal']; ?></td>
        <td><?php echo $item['id']; ?></td>
        <td>Rp.<?php echo number_format($item['total'], 0,",","."); ?></td>                
        <td><?php echo $item['bank']; ?></td>
        <td><?php echo $item['kodeBayar']; ?></td>
        <td><?php echo $item['status']; ?></td>
        <?php endforeach; ?>
        </tr>        
        </table>
    <?php
        }
      else
        {
          echo "<h3><center>Anda belum pernah melakukan pemesanan<center></h3>";	
        }	
    ?>    
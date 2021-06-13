<?php echo $sparepart['kode'] ?>
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form method="POST">
     <div class="modal-header">      
      <h4 class="modal-title">Edit Sparepart</h4>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Kode</label>
       <input type="text" class="form-control" values ="<?php echo $sparepart['kode']; ?>" placeholder="<?php echo $sparepart['kode']; ?>" readonly>
       <input hidden name="kode" value="<?php echo $sparepart['kode']; ?>"/>
      <div class="form-group">
       <label>Nama</label>
       <input type="text" class="form-control" name='name' placeholder="<?php echo $sparepart['nama']; ?>" autocomplete="off">
      </div>
      <div class="form-group">
       <label>Jenis</label>
       <input type="text" class="form-control" name='jenis' placeholder="<?php echo $sparepart['jenis']; ?>" autocomplete="off">
      </div>
      <div class="form-group">
       <label>Manufaktur</label>
       <input type="text" class="form-control" name='manufaktur' placeholder="<?php echo $sparepart['manufaktur']; ?>" autocomplete="off">
      </div>   
      <div class="form-group">
       <label>Jumlah</label>
       <input type="number" class="form-control" name='jumlah' placeholder="<?php echo $sparepart['jumlah']; ?>" autocomplete="off">
      </div>
      <div class="form-group">
       <label>Harga</label>
       <input type="number" class="form-control" name='harga' placeholder="<?php echo $sparepart['harga']; ?>" autocomplete="off">
      </div> 
     </div>
     <div class="modal-footer">
      <input type="submit" class="btn btn-success" value="Update">
     </div>
    </form>
   </div>
  </div>
 </div>
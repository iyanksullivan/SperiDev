<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Sparepart</title>

<!-- Code source jquery dan bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/addSparepart.css">

  </head>
  <body>
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
    <form class="form-container" method="POST">
     <div class="text-center">
        <h3 class="pos">Edit Sparepart</h3>    
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
      <input type="submit" class="btn btn-primary" value="Update">
     </div>
    </form>
      </section>
    </section>
    </section>
   </div>
  </div>
 </div>
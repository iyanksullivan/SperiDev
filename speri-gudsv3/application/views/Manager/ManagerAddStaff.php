<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tambah Staff</title>

<!-- Code source jquery dan bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

  </head>
  <body>
<!-- Container untuk login admin -->
  <section class="container-fluid bg">
          <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <form class="form-container" method="post">
                        <div class="text-center">
                            <h3 class="pos">Tambah Staff</h3>    
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" size="35px;" placeholder="NIK...." id="nik" name="nik" value="">
                        </div>        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" size="35px;" placeholder="Nama...."id="nama" name="nama" value="">
                        </div>                  
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password...." name="password"  value=""> 
                        </div>
                          <button type="submit" class="btn btn-primary btn-block">Add</button>

                    </form>
                </section>
          </section>
  </section>               
                 <!--  <div class="form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-sm-3">
                          <img src="<?php echo base_url(); ?>assets/fotodata/<?php echo $admin['foto'] ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
  </body>
</html>

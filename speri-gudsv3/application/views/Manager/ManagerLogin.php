<!-- Aqshal Rafli Pradana Setiawan
1301180042 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

<!-- Code source jquery dan bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

  </head>
  <body>

    <!-- JANGAN DI APUS GAN -->
        <!-- Container untuk login user -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Admin</h3>
            </div>
            <?php echo form_open_multipart('Customer/register'); ?>
                <div class="modal-body">
                    <!-- Form untuk username -->
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control" type="text" placeholder="" required>
                        </div>
                    </div>
                    <!-- Form untuk nama -->
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama" class="form-control" type="text" placeholder="" required>
                        </div>
                    </div>
                    <!-- Form untuk password -->
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-8">
                            <input name="password" class="form-control" type="password" placeholder="" required>
                        </div>
                    </div>
                    <!-- Form untuk alamat -->
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-8">
                            <input name="alamat" class="form-control" type="text" placeholder="" required>
                        </div>
                    </div>
                    <!-- Form untuk foto -->
                    <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Foto</label>
                        <div class="col-xs-8">
                            <input name="foto" class="form-control" type="file">
                        </div>
                    </div> -->
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            
            <?php echo form_close();  ?>
            </div>
            </div>
        </div>
<!-- Container untuk login admin -->
    <section class="container-fluid bg">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <form class="form-container" method="post">
                        <div class="text-center">
                            <h3 class="pos">Welcome Manager!</h3>    
                        </div>
                        <div class="form-group">
                        <!-- Form username -->
                            <label for="username">Username</label>
                            <input type="username" class="form-control" name="username" size="35px;" placeholder="Username...">
                          
                        </div>
                        <!-- Form password -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <!-- Button login -->
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        <!-- <small class="form-text text-muted text-center">Create your account <a class="btn btn-sm btn-success"data-toggle="modal" data-target="#modal_add_new">here</a></ -->
                    </form>
                </section>
            </section>
    </section>
  </body>
</html>

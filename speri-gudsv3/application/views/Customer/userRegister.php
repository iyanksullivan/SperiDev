<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--CSS KINDI DISINI YA GAN -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style2.css">

  </head>
  <body>
    <section class="container-fluid bg">
            <section class="row justify-content-center">
                <section class="col-12 col-xl-6 col-md-3" >
                    <form class="form-container" method="post">
                      <div class="text-center">
                          <h3 class="pos">Buat akun pengguna!</h3><hr>    
                      </div>
                      <div class="form-group row mt-5">
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      </div>     
                      <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Pengguna</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                      </div>   
                      <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Alamat Pengguna</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                      </div>                 
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Re-Enter Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" name="re-password">
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <div class="col-sm-2">Picture</div>
                        <div class="col-sm-10">
                          <div class="row">
                            <div class="col-sm-3">
                              <img src="<?= base_url()?>/assets/images/default.jpg" class="img-thumbnail">
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
                      <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                      </div>
                    </form>
                </section>
            </section>
    </section>
  </body>
</html>
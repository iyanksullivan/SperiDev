<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/7cbc74049d.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/admin.css">

    <title>Edit Profil Pengguna</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <a class="navbar-brand text-white" href="#">Welcome Manager! | <b>Speri-guds</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Temukan..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Inbox"></i>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
            <a href="<?=site_url('Manager/logout')?>"><i class="fas fa-sign-out-alt bg-primary mr-3 text-white" data-toggle="tooltip" title="Sign Out"></i></a>
          </h5>
        </div>
      </div>
    </nav>
    <!-- <div class="row no-gutters mt-5">  
      <div class="col-xl-2 bg-dark mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
              <li class="nav-item">
                <a class="nav-link active text-white" href="<?=site_url('Manager/index')?>"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=site_url('ControllerUser/daftarUser')?>"><i class="fas fa-users mr-2"></i>Daftar User</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=site_url('ControllerObat/daftarObatAdmin')?>"><i class="fas fa-pills mr-2"></i>Daftar Obat</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-cog mr-2"></i>Pengaturan</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=site_url('Manager/update')?>"><i class="fas fa-user-cog mr-2"></i>Edit Profile</a><hr class="bg-secondary">
              </li>
            </ul>
      </div> -->
      <div class="col-xl-10 p-5 pt-2">
          <h3><i class="fas fa-user mt-5 mr-2"></i>Edit Profile</h3><hr>
            <div class="row">
              <div class="col-lg-8">
               <?php echo form_open_multipart('Manager/edit_manager');?>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-plaintext" id="nama" name="nama" value="<?= $data['nama']; ?>">
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password"  value="<?= $data['passwords']; ?>">
                    </div>
                  </div>      
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="re-password" name="re-password">
                    </div>
                  </div>                     
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
                  <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                  </div>
                  <?php echo form_close();  ?>
              </div>  
            </div>
            <div class="row">
              <div class="col-sm-10">
                <!-- <?php echo site_url('Manager/delete/'.$data['username']);?> -->
              <a href="<?php echo site_url('Manager/delete/');?>" onclick="return confirm('Apakah anda yakin menghapus akun ini?');"><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus" ></i></i></a>
              </div>
            </div>
          <!-- <footer class="sticky-footer bg-white mt-5">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Speri-guds 2021</span>
            </div>
          </div>
        </footer> -->
        </div>
      </div>
    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/admin.js"></script>
  </body>
</html>
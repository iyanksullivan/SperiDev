<div class="container">
      <div style="margin:0 auto"class="col-xl-10 p-5 pt-2">
      
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
          <h3 style="text-align:center;padding-top:25px">Edit Profile</h3><hr>          
            <div style="margin-left:250px;"class="row">
              <div class="col-lg-8">
               <?php echo form_open_multipart('Customer/editProfile');?>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-plaintext" id="nama" name="nama" value="<?= $data['nama']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password"  value="<?= $data['password']; ?>" required>
                    </div>
                  </div>      
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="re-password" name="re-password" required>
                    </div>
                  </div>    
                   <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-plaintext" id="alamat" name="alamat" value="<?= $data['alamat']; ?>" required>
                    </div>
                  </div>                                      
                  <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-sm btn-success">Edit</button>
                      <a href="<?php echo site_url('Customer/logout')?>" class="btn btn-sm btn-primary">Log Out</a>
                      <a href="<?php echo site_url('Customer/viewHistory')?>" class="btn btn-sm btn-warning">Lihat Histori Pesanan</a>
                    </div>                    
                  </div>
                  <?php echo form_close();  ?>
              </div>  
              <div class="row">
              <div class="col-sm-10">                
                <a href="<?php echo site_url('Customer/delete/');?>" class="btn btn-sm btn-danger" style="margin-left:14px;" onclick="return confirm('Apakah anda yakin menghapus akun ini?');">Hapus Akun</a>
              </div>
            </div>
            
            </div>          
</div>
<div class="container">
      <div style="margin:0 auto"class="col-xl-10 p-5 pt-2">
          <h3 style="text-align:center;padding-top:25px">Edit Barang Belanja</h3><hr>
            <div style="margin-left:250px;"class="row">
              <div class="col-lg-8">
              <?php echo form_open_multipart('Shopping/edit/'.$detail['id']);?>                             
                  <div class="form-group row">
                    <label for="namaSparepart" class="col-sm-2 col-form-label">Nama Sparepart</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-plaintext" id="nama" name="namaSparepart" value="<?= $detail['namaSparepart']; ?>" disabled>
                    </div>
                  </div>                  
                   <div class="form-group row">
                    <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                    <div class="col-sm-10">                      
                      <input type="number" class="form-control form-control-plaintext" id="qty" name="qty" value="<?= $detail['qty']; ?>">
                      <input type="hidden" class="form-control form-control-plaintext" id="kodeSparepart" name="kodeSparepart" value="<?= $detail['kodeSparepart']; ?>" required>
                    </div>
                  </div>                                      
                  <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-sm btn-success">Simpan</button>                      
                      <a href="<?php echo site_url('Shopping/viewCart/');?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-sm btn-danger">Batal</a>
                    </div>
                  </div>
                  <?php echo form_close();  ?>
                  </form>
              </div>  
            </div>                
</div>
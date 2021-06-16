<div class="container">    
    <h2>Konfirmasi Check Out</h2>
    <div class="kotak2">
    <?php
    $grand_total = 0;
    if ($cart = $cart)
        {
            foreach ($cart as $item)
                {
                    $grand_total = $grand_total + ($item['qty'] * $item['harga']);;
                }
            // echo "<h4>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h4>";	
    ?>
    <form class="form-horizontal" action="<?php echo site_url()?>/Shopping/order" method="post" >
            <div class="form-group  has-success has-feedback">
                <?php echo "<h4><center>Total Belanja Anda: Rp.".number_format($grand_total,0,",",".")."</center></h4>";?>
                <input type="hidden" class="form-control" name="total" id="total" value="<?php echo $grand_total ?>">
            </div>
            <div class="form-group  has-success has-feedback">
                <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                <div class="col-xs-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group  has-success has-feedback">
                <label class="control-label col-xs-3" for="bank">Metode Pembayaran:</label>
                <div class="col-xs-9">
                <select id="bank" name="bank" class="form-control">
                    <option value="BCA">BCA</option>
                    <option value="BNI">BNI</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="BRI">BRI</option>
                </select>
                </div>
            </div>
            <div class="form-group  has-success has-feedback">
                <label class="control-label col-xs-3" for="firstName">Nama :</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $customer['nama']?>" required>
                </div>
            </div>
            <div class="form-group  has-success has-feedback">
                <label class="control-label col-xs-3" for="lastName">Alamat:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $customer['alamat']?>" required>
                </div>
            </div>
            <div class="form-group  has-success has-feedback">
                <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
                <div class="col-xs-9">
                    <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp" value="<?php echo $customer['telp']?>" required>
                </div>
            </div>
            
            <div class="form-group  has-success has-feedback">
                <div class="col-xs-offset-3 col-xs-9">
                    <button type="submit" class="btn btn-success">Pesan Barang</button>
                </div>
            </div>
        </form>
        <?php
        }
        else
            {
                echo "<h5>Shopping Cart masih kosong</h5>";	
            }
        ?>
    </div>
</div>
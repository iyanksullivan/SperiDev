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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/editSparepart.css">

    <title>Edit Sparepart</title>
  </head>

<div class="container-fluid bg">
	<div class="container">
		<h1>
	        Edit Sparepart
		</h1>  
		<div style="padding:25px;"></div>
		<table id="demo" class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <th scope="col">Kode</th>
		            <th scope="col">Nama</th>
		            <th scope="col">Jenis</th>
		            <th scope="col">Manufaktur</th>
		            <th scope="col">Jumlah</th>
		            <th scope="col">Harga</th>
		        </tr>
		    </thead>
		<?php  foreach($sparepart as $row):?> 
		    <tbody>
		        <tr>
		            <th><?=$row['kode'];?></th>
		            <td><?=$row['nama'];?></td>
		            <td><?=$row['jenis'];?></td>
		            <td><?=$row['manufaktur'];?></td>
		            <td><?=$row['jumlah'];?></td>
		            <td><?=$row['harga'];?></td>
		            <td><button type="button" class="btn btn-danger" onclick="window.location='<?php echo site_url('Sparepart/delete/'.$row['kode']);?>'">Hapus</button></td>
		            <td><button type="button" class="btn btn-primary btn-block" onclick="window.location='<?php echo site_url('Sparepart/editSparepart/'.$row['kode']);?>'">edit</button></td>
		        </tr>
		    </tbody>
		           
		        </tr>
		<?php endforeach;?>
		</table>		
	</div>
</div>


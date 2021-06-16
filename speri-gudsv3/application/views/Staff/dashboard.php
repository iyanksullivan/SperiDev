<!DOCTYPE html>
<html>
      
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleDashboard.css">

    <title>
    Dashboard Sparepart
    </title>
</head>
  
<body style="text-align:center;"> 
    <div class="container-fluid bg">
        <div class="container">
            <h1>
                Welcome, Staff!
            </h1>  
            <div style="padding:25px;"></div>
            <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("Sparepart/AddSparepart");?>'">Add Sparepart</button>
            <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url("Sparepart/dashboardedit");?>'">Edit Sparepart</button>
            <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url("Staff/edit_staff");?>'">Edit Profile</button>
            <button type="button" class="btn btn-danger" onclick="window.location='<?php echo site_url("Staff/logout");?>'">Logout</button>      
        </div>
    </div>
    
</head>
</html>
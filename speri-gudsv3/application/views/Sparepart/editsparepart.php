<table id="demo">
<?php  foreach($sparepart as $row):?> 
        <tr>
            <td><?=$row['kode'];?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$row['jenis'];?></td>
            <td><?=$row['manufaktur'];?></td>
            <td><?=$row['jumlah'];?></td>
            <td><?=$row['harga'];?></td>
            <td><button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url('Sparepart/delete/'.$row['kode']);?>'">Hapus</button></td>
            <td><button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url('Sparepart/editSparepart/'.$row['kode']);?>'">edit</button></td>
        </tr>
<?php endforeach;?>
</table>

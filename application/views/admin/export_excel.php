<!DOCTYPE html>
<html>
<head>
	<title>Export Excel </title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;

	}
    center{
        text-align:center;
    }
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=laporan-tiket export.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
	?>
    <h3>Laporan Tiket Helpdesk Periode <?php echo date("d-m-Y", strtotime($_SESSION['tanggal1']))?> s/d <?php echo date("d-m-Y", strtotime($_SESSION['tanggal2']))?></h3>
	<table border="1">
        <tr>
            <th>No</th>
            <th>Kode tiket</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Keluhan</th>
            <th>Tgl Buat</th>
            <th>Tgl Selesai</th>
            <th>Unit</th>
            <th>Status</th>
            <th>Petugas</th>
        </tr>
        <?php
        $no = 1;
        foreach($laporan as $data):
        ?>
		<tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['kd_tiket']?></td>
            <td><?php echo $data['nama']?></td>
            <td><?php echo $data['nama_div']?></td>
            <td><?php echo $data['keluhan']?></td>
            <td><?php echo date("d-m-Y H:i:s", strtotime($data['tgl_buat']))?></td>
            <td><?php echo date("d-m-Y H:i:s", strtotime($data['tgl_selesai']))?></td>
            <td><?php echo $data['unit']?></td>
            <td><?php echo $data['status']?></td>
            <td>
            <?php
            if($data['status'] == 'waiting'){
            ?>
            Menunggu Petugas IT
            <?php }else{?>
            <?php echo $data['petugas']?>
            <?php }?>
            </td>
        </tr>
		<?php endforeach;?>
	</table>
</body>
</html>
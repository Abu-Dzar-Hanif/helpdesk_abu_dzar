<?php require_once('header.php');?>
<div class="container-fluid">
<div class="card">
                        <div class="card-header text-center">
                            <h5>Laporan Tiket</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode tiket</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Kendala</th>
                                            <th>Tgl Buat</th>
                                            <th>Tgl Selesai</th>
                                            <th>Unit</th>
                                            <th>Status</th>
                                            <th>Petugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                waiting
                                            <?php }else{?>
                                                <?php echo $data['petugas']?>
                                            <?php }?>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="clearfix">
                                <a href = "<?php echo base_url('index.php/admin/export_excel')?>" type="button" class="btn btn-primary float-left"><i class="fas fa-file-excel"></i> Export Excel</a>
                            </div>
                        </div>
                    </div>
                    <a href="laporan.php" class="btn btn-secondary mt-2"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
    <?php require_once('footer.php')?>
</body>
</html>
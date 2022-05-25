<?php require_once('header.php');?>
                <div class="container-fluid">
                    <div class="card mb-5">
                        <div class="card-header text-center">
                            <h5>Detail Tiket <?php echo $detail['kd_tiket']?></h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Kode Tiket</th>
                                        <td><?php echo $detail['kd_tiket']?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?php echo $detail['nama']?></td>
                                    </tr>
                                    <tr>
                                        <th>Divisi</th>
                                        <td><?php echo $detail['nama_div']?></td>
                                    </tr>
                                    <tr>
                                        <th>Unit</th>
                                        <td><?php echo $detail['unit']?></td>
                                    </tr>
                                    <tr>
                                        <th>Keluhan / Masalah</th>
                                        <td><?php echo $detail['keluhan']?></td>
                                    </tr>
                                    <tr>
                                        <th>Foto</th>
                                        <td><img src="<?php echo base_url('./gambar/'.$detail['foto'])?>" alt="" width="300"></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Dibuat</th>
                                        <td><?php echo $detail['tgl_buat']?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Selesai</th>
                                        <td>
                                            <?php
                                            if($detail['tgl_selesai'] == '0000-00-00 00:00:00'){
                                                echo "-";
                                            }else{
                                                echo $detail['tgl_selesai'];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <?php
                                            if($detail['status'] == 'Waiting'){
                                            ?>
                                                <b class="text-danger"><?php echo $detail['status']?></b>
                                            <?php }elseif($detail['status'] == 'On prosess'){?>
                                                <b class="text-warning"><?php echo $detail['status']?></b>
                                            <?php }else{?>
                                                <b class="text-success"><?php echo $detail['status']?></b>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Petugas</th>
                                        <td>
                                            <?php
                                            if($detail['petugas'] == null){
                                            ?>
                                            <b class="text-danger">Waiting...</b>
                                            <?php }else{?>
                                                <b><?php echo $detail['petugas']?></b>
                                            <?php }?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="index.php" class="btn btn-secondary mt-2"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
    <?php require_once('footer.php')?>
</body>

</html>
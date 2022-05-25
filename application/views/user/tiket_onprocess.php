<?php require_once('header.php');?>
                <div class="container-fluid">
                <div class="card">
                        <div class="card-header text-center"> 
                            <h5>Daftar Tiket On Process</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="30px">No</th>
                                        <th  width="110px">Kode tiket</th>
                                        <th>Kendala / Masalah</th>
                                        <th width="200px">Tanggal Buat</th>
                                        <th width="110px">Status</th>
                                        <th width="150px">Ditangani Oleh</th>
                                        <th width="115px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($tiket as $data):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $data['kd_tiket']?></td>
                                        <td><?php echo $data['keluhan']?></td>
                                        <td><?php echo date("d-m-Y H:i:s", strtotime($data['tgl_buat']))?></td>
                                        <td><h5><span class='badge badge-warning'><?php echo $data['status']?> <i class='fas fa-spinner fa-pulse'></i></span></h5></td>
                                        <td><h5><span class="badge badge-info"><?php echo $data['petugas']?></span></h5></td>
                                        <td>
                                            <a href="<?php echo base_url('index.php/user/detail_tiket/'.$data['kd_tiket'])?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
    <?php require_once('footer.php')?>
</body>

</html>
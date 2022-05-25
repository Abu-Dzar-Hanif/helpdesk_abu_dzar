<?php require_once('header.php');?>
                <div class="container-fluid">
                <div class="card">
                        <div class="card-header text-center"> 
                            <h5>Daftar Tiket</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="30px">No</th>
                                        <th  width="110px">Kode tiket</th>
                                        <th>Kendala</th>
                                        <th width="200px">Tanggal Buat</th>
                                        <th width="200px">Tanggal Selesai</th>
                                        <th width="110px">Status</th>
                                        <th class="text-center" width="210px">Action</th>
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
                                        <td>
                                            <?php
                                            if($data['status'] == 'Done'){
                                                echo date("d-m-Y H:i:s", strtotime($data['tgl_selesai']));
                                            }else{
                                                echo "-";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if($data['status'] == 'Waiting'){
                                                echo"<h5><span class='badge badge-danger'>waiting <i class='fas fa-hourglass-half fa-pulse'></i></span></h5>";
                                            }elseif($data['status'] == 'On process'){
                                                echo"<h5><span class='badge badge-warning'>on process <i class='fas fa-spinner fa-pulse'></i></span></h5>";
                                            }elseif($data['status'] == 'Done'){
                                                echo"<h5><span class='badge badge-success'>Done <i class='fas fa-check'></i></span></h5>";
                                            }
                                            ?>
                                        </td>
                                        <td align="center">
                                            <?php
                                            if($data['status'] == 'Done'){
                                            ?>
                                            <a href="<?php echo base_url('index.php/admin/detail_tiket/'.$data['kd_tiket'])?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i> Detail
                                            </a>
                                            <?php }else{?>
                                            <a href="<?php echo base_url('index.php/admin/update_tiket/'.$data['kd_tiket'])?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-pencil-alt"></i> Edit
                                            </a>
                                            <a href="<?php echo base_url('index.php/admin/detail_tiket/'.$data['kd_tiket'])?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i> Detail
                                            </a>
                                            <?php }?>
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
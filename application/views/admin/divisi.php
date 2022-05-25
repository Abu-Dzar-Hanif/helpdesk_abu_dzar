<?php require_once('header.php');?>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kelola Divisi</h1>
                        <a href="<?php echo base_url('index.php/admin/add_divisi')?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm"></i> Add Divisi</a>
                    </div>
                    <div class="card mb-5">
                        <div class="card-header text-center">
                            <h5>Daftar Divisi</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Divisi</th>
                                            <th>Nama Divisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            
                                            $no=1;
                                            if($row > 0){
                                            foreach($divisi as $data):
                                        ?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $data['kd_divisi']?></td>
                                            <td><?php echo $data['nama_div']?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/admin/update_divisi/'.$data['kd_divisi'])?>" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-pencil-alt"></i> Edit
                                                </a>
                                                <a href="<?php echo base_url('index.php/admin/delete_divisi/'.$data['kd_divisi'])?>" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                            endforeach;
                                        }else{
                                        ?>
                                        <tr>
                                            <td align="center" colspan="4">
                                                <h5>Data kosong</h5>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>   
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                </div>
    <?php require_once('footer.php')?>
</body>
</html>
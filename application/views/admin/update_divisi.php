<?php require_once('header.php');?>
<div class="container-fluid">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Tambah Divisi</h5>
                        </div>
                        <?php echo validation_errors();?>
                        <?php echo form_open('admin/update_divisi/'.$update['kd_divisi']);?>
                            <div class="card-body">
                            <div class="form-row">
                                        <div class="form-group col">
                                            <input type="text" name="nama_divisi" value="<?php echo $update['nama_div']?>" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">submit</button>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
    <?php require_once('footer.php')?>
</body>
</html>
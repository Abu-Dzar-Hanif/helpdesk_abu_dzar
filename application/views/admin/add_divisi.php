<?php require_once('header.php');?>
<div class="container-fluid">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Tambah Divisi</h5>
                        </div>
                        <?php echo validation_errors();?>
                        <?php echo form_open('admin/add_divisi');?>
                            <div class="card-body">
                            <div class="form-row">
                                        <div class="form-group col">
                                            <?php
                                                $a =$code['kd_divisi'];
                                                $urutan = (int)substr($a, 3, 3);
                                                $urutan++;
                                                $huruf ="DIV";
                                                $kd = $huruf.sprintf("%03s", $urutan);
                                            ?>
                                            <input type="text" name="kd_divisi" value="<?php echo $kd?>" class="form-control" readonly>
                                            
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" name="nama_divisi" class="form-control" placeholder="Nama divisi" required>
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
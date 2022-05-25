<?php require_once('header.php');?>
<div class="container-fluid">
<div class="card">
                        <div class="card-header text-center">
                            <h5>Update Tiket <?php echo $edit['kd_tiket']?></h5>
                        </div>
                        <?php echo validation_errors();?>
                        <?php echo form_open('admin/update_tiket/'.$edit['kd_tiket']);?>
                            <div class="card-body">
                                <?php
                                if($edit['status'] == "Waiting"){
                                ?>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control">
                                            <?php
                                            if($edit['status'] == 'Waiting'){
                                            ?>
                                            <option value="<?php echo $edit['status']?>"><?php echo $edit['status']?></option>
                                            <option value="On process">On process</option>
                                            <?php }elseif($edit['status'] == 'On process'){?>
                                            <option value="<?php echo $edit['status']?>"><?php echo $edit['status']?></option>
                                            <option value="Done">Done</option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="">Petugas IT</label>
                                        <input type="text" name="petugas" class="form-control" placeholder="Masukan nama petugas..">
                                    </div>
                                    <div class="form-group col">
                                        <label for="">unit yg di laporkan</label>
                                        <input type="text" name="unit" class="form-control" value="<?php echo $edit['unit']?>">
                                    </div>
                                </div>
                                <?php }else{?>
                                <div class="form-row">
                                    <div class="form-gorup col">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control">
                                            <?php if($edit['status'] == 'On process'){?>
                                            <option value="<?php echo $edit['status']?>"><?php echo $edit['status']?></option>
                                            <option value="Done">Done</option>
                                            <?php }else{?>
                                            <option value="<?php echo $edit['status']?>"><?php echo $edit['status']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-gorup col">
                                        <label for="">Tanggal Selesai</label>
                                        <input type="text" name="tgl_s" class="form-control" value="<?php echo date('d-m-Y H:i:s')?>" readonly>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
                            </div>
                        <?php form_close();?>
                    </div>
                </div>
    <?php require_once('footer.php')?>
</body>
</html>
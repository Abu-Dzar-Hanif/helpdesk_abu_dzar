<?php require_once('header.php');?>
<div class="container-fluid">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Laporan Tiket</h5>
                        </div>
                        <?php echo validation_errors();?>
                        <?php echo form_open('admin/laporan_tiket');?>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <div class="input-group">
                                            <input type="text" name="tgl1" id="datepicker" class="form-control" placeholder="Dari Tanggal" required readonly>
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="datepicker"><i class="fas fa-calendar-alt"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <div class="input-group">
                                            <input type="text" name="tgl2" id="datepicker1" class="form-control" placeholder="Sampai Tanggal" required readonly>
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="datepicker1"><i class="fas fa-calendar-alt"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">submit</button>
                            </div>
                        <?php echo form_close();?>
                    </div>
                    <a href="index.php" class="btn btn-secondary mt-2"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
    <?php require_once('footer.php')?>
</body>
</html>
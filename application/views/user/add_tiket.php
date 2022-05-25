<?php require_once('header.php');?>
                <div class="container-fluid">
                <div class="card">
                        <div class="card-header text-center">
                            <h5>Input Tiket</h5>
                        </div>
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $a =$code['max_code'];
                        $urutan = (int)substr($a, 6, 3);
                        $urutan++;
                        $hari = date('my');
                        $huruf = "IT";
                        $kd = $huruf.$hari.sprintf("%03s", $urutan);
                        $tgl = date("d-m-Y H:i:s");
                        ?>
                        <?php echo form_open_multipart('user/input_tiket');?>
                            <div class="card-body">
                            <?php echo $errors;?>
                            <input type="text" name="kd" class="form-control" value="<?php echo $_SESSION['kd_karyawan']?>" readonly hidden>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="">Kode tiket</label>
                                        <input type="text" name="kd_tiket" class="form-control" value="<?php echo $kd?>" readonly>
                                    </div>
                                    <div class="form-group col">
                                        <label for="">Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" value="<?php echo $tgl?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="">Nama karywan</label>
                                        <input type="text" name="nama_user" class="form-control" value="<?php echo $cek['nama']?>" readonly>
                                    </div>
                                    <div class="form-group col">
                                    <label for="">Divisi/Bagian</label>
                                        <input type="text" name="divisi" class="form-control" value="<?php echo $cek['nama_div']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label>Kendala/Masalah</label>
                                        <textarea name="keluhan" class="form-control" placeholder="Masukan kendala / masalah..." required></textarea>
                                    </div>
                                    <div class="form-group col">
                                        <label>Foto Kendala/Masalah</label>
                                        <input type="file" name="foto" size="100" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">submit</button>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
                <!-- /.container-fluid -->
    <?php require_once('footer.php')?>
</body>

</html>
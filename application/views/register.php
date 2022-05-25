    <div class="container">
        <div class="col-lg-7 col-md-7 col-sm-7" style="margin: 50px auto;">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    <hr>
                                </div>
                                <?php echo validation_errors();?>
                                <?php echo form_open('register');?>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <?php
                                                $a =$code['kd_karyawan'];
                                                $urutan = (int)substr($a, 6, 3);
                                                $urutan++;
                                                $date = date('Ym');
                                                $kd = $date.sprintf("%03s", $urutan);
                                            ?>
                                            <input type="text" name="kd" value="<?php echo $kd?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <input type="text" name="nama" class="form-control" placeholder="nama lengkap..." required>
                                        </div>
                                        <div class="form-group col">
                                            <select name="gender" class="form-control">
                                                <option value="">Pilih Gender</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <input type="number" name="notelp" class="form-control" placeholder="nomer telpon..." required>
                                        </div>
                                        <div class="form-group col">
                                            <select name="divisi" class="form-control">
                                                <option value="">Pilih Divisi</option>
                                                <?php
                                                    foreach($divisi as $data):
                                                ?>
                                                <option value="<?php echo $data['kd_divisi']?>"><?php echo $data['nama_div']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <input type="text" name="username" class="form-control" placeholder="username..." required>
                                        </div>
                                        <div class="form-group col">
                                            <input type="password" name="password" class="form-control" placeholder="password..." required>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">
                                        Register Account
                                    </button>
                                <?php echo form_close();?>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('index.php/login')?>">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
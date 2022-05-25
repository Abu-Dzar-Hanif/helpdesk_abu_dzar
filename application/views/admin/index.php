<?php require_once('header.php');?>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- users -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <?php
                                            $user = $this->db->count_all('user');
                                            $divisi = $this->db->count_all('divisi');
                                        ?>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    echo $user;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- waiting -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Tiket waiting
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php echo $waiting['wait'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        if($waiting['wait'] > 0){
                                        ?>
                                        <div class="col-auto">
                                            <i class="fas fa-hourglass-half fa-pulse fa-2x text-danger"></i>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-auto">
                                            <i class="fas fa-hourglass-half fa-2x text-danger"></i>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- on process -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tiket on process</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $ops['op']?>
                                            </div>
                                        </div>
                                        <?php
                                        if($ops['op'] > 0){
                                        ?>
                                        <div class="col-auto">
                                            <i class="fas fa-spinner fa-2x fa-pulse text-warning"></i>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-auto">
                                            <i class="fas fa-spinner fa-2x text-warning"></i>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- done -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tiket done</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $don['done']?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class='fas fa-check fa-2x text-success'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- division -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Dvision</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $divisi?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-briefcase fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
    <?php require_once('footer.php')?>
</body>

</html>
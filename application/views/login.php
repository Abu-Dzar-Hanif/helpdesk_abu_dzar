    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        <hr>
                                    </div>
                                    <?php echo form_open('proses_login');?>
                                        <div class="form-group">
                                            <input type="username" name="username" class="form-control" placeholder="Enter username..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Enter password..." required>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>
                                    <?php echo form_close();?>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('index.php/register')?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
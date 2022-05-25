<?php require_once('header.php');?>
                <div class="container-fluid">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Halo <?php echo $_SESSION['username']?></h4>
                        <p>Selamat datang di helpdesk IT. Silahkan klik menu <b>buat tiket</b> jika terjadi kendala.
                            Silahkan klik menu <b>daftar tiket</b> untuk melihat semua tiket yang anda punya.
                            <br>di dalam menu <b>daftar tiket</b> terdapat 3 submenu yaitu <b>tiket waiting</b>,
                            <b>tiket on process</b> dan <b>tiket done</b><br>silahkan klik salah satu submenu tersbut
                            untuk melihat detail tiket anda.
                        </p>
                        <hr>
                        <p class="mb-0">jika sudah menggunkan Helpdesk jangan lupa logout ya.
                            Untuk logout silahkan klik gambar yg berada di pojok kanan atas lalu pilih logout
                        </p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <!-- /.container-fluid -->
    <?php require_once('footer.php')?>
</body>

</html>
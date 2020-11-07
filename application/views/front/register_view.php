<main>

    <!-- <div class="preloader bg-soft flex-column justify-content-center align-items-center">
        <div class="loader-element">
            <span class="loader-animated-dot"></span>
            <img src="<?php echo base_url() ?>assets/front/assets/img/brand/dark-loader.svg" height="40">
        </div>
    </div> -->

    <!-- Hero -->
    <section class="section-header pb-6 pb-lg-13 mb-2 mb-lg-3 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-2 mb-3">Daftar pengguna baru</h1>
                    <p class="lead">Cukup dengan mendaftar kamu dapat langsung melakukan pemesanan barang.</p>
                </div>
            </div>
        </div>
        <div class="pattern bottom"></div>
    </section>
    <div class="section section-lg pt-0">
        <div class="container mt-n8 mt-lg-n13 z-2">
            <div class="row justify-content-center">
                <div class="col-8">
                    <!-- Card -->
                    <div class="card border-light shadow-soft p-2 p-md-4 p-lg-5">
                        <div class="card-body">
                            <div class="mt-1">
                                <?php
                                $msg = $this->session->flashdata('msg');
                                if ($msg == "tambahpengguna") {
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                        <span class="alert-text"><strong>Sukses!</strong> kamu telah terdaftar, silahkan login!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php
                                } elseif ($msg == "passwordtidaksama") {
                                ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                        <span class="alert-text"><strong>Peringatan!</strong> Data Tidak Valid!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php
                                };
                                ?>
                            </div>
                            <!-- Register Pengguna -->
                            <form method="post" action="<?php echo base_url() . 'index.php/register/register_pengguna' ?>">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="Nama">Nama <span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                                </div>
                                                <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="userName">Username <span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                                </div>
                                                <input name="username" id="userName" class="form-control" type="text" placeholder="Username" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="Password">Password <span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                </div>
                                                <input name="password" id="Password" class="form-control" type="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="Password2">Ulangi Password<span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                </div>
                                                <input name="password2" id="Password2" class="form-control" type="password" placeholder="Ulangi Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-secondary mt-4 animate-up-2"><span class="mr-2"><i class="fas fa-paper-plane"></i></span>Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <a href="login" class="text-gray"><small>Sudah punya akun</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</main>

<!-- Core -->
<script src="<?php echo base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="<?php echo base_url() ?>assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Impact JS -->
<script src="<?php echo base_url() ?>assets/front/assets/js/front.js"></script>


</body>

</html>
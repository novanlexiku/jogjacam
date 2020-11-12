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
                    <h1 class="display-2 mb-3">Login pengguna</h1>
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
                                if ($msg == "usernamesalah") {
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                        <span class="alert-text"><strong>Peringatan!</strong> username atau password yang kamu masukkan salah!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php
                                } elseif ($msg == "passwordsalah") {
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                        <span class="alert-text"><strong>Peringatan!</strong> username atau password yang kamu masukkan salah!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php
                                };
                                ?>
                            </div>
                            <!-- Register Pengguna -->
                            <form method="post" action="<?php echo base_url() . 'index.php/login' ?>">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="userName">Username <span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                                </div>
                                                <input name="user_username" id="userName" class="form-control" type="text" placeholder="Username" required>
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
                                                <input name="user_password" id="Password" class="form-control" type="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-secondary mt-4 animate-up-2"><span class="mr-2"><i class="fas fa-paper-plane"></i></span>Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <a href="register" class="text-gray"><small>Buat Akun Baru</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalCart" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <h6 class="modal-title" id="modal-title-default">Shopping Cart</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="detail_cart">

                        </tbody>

                    </table>
                </div>
                <div class="modal-footer">
                    <a href="pemesanan_pelanggan" class="btn btn-secondary">Pesan sekarang</a>
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
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Impact JS -->
<script src="<?php echo base_url() ?>assets/front/assets/js/front.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.add_cart').click(function() {
            var barang_id = $(this).data("barangid");
            var barang_nama = $(this).data("barangnama");
            var barang_harjul = $(this).data("barangharga");
            var quantity = $('#' + barang_id).val();
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/cart/add_to_cart",
                method: "POST",
                data: {
                    barang_id: barang_id,
                    barang_nama: barang_nama,
                    barang_harjul: barang_harjul,
                    quantity: quantity
                },
                success: function(data) {
                    $('#detail_cart').html(data);

                }
            });
            $.notify({
                message: 'Berhasil menambahkan barang',
                type: 'success'
            });
        });

        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url(); ?>index.php/cart/load_cart");

        //Hapus Item Cart
        $(document).on('click', '.hapus_cart', function() {
            var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url: "<?php echo base_url(); ?>cart/hapus_cart",
                method: "POST",
                data: {
                    row_id: row_id
                },
                success: function(data) {
                    $('#detail_cart').html(data);
                }
            });
            $.notify({
                message: 'Berhasil menghapus barang',
                type: 'info'
            });
        });
    });
</script>

</body>

</html>
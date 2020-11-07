<main>

    <div class="preloader bg-soft flex-column justify-content-center align-items-center">
        <div class="loader-element">
            <span class="loader-animated-dot"></span>
            <img src="<?php echo base_url() ?>assets/front/assets/img/brand/dark-loader.svg" height="40">
        </div>
    </div>

    <!-- Hero -->
    <section class="section-header pb-8 pb-lg-13 mb-2 mb-lg-3 bg-primary text-white">
        <div class="pattern bottom"></div>
    </section>
    <section class="section section-lg pt-0">
        <div class="container mt-n7 mt-lg-n13 z-2">
            <div class="justify-content-center">
                <div class="row">
                    <?php
                    foreach ($data->result_array() as $a) :
                        $id = $a['barang_id'];
                        $gbr = $a['barang_gambar'];
                        $nm = $a['barang_nama'];
                        $desc = html_entity_decode($a['barang_deskripsi']);
                        $satuan = $a['barang_satuan'];
                        $harpok = $a['barang_harpok'];
                        $harjul = $a['barang_harjul'];
                        $harjul_grosir = $a['barang_harjul_grosir'];
                        $stok = $a['barang_stok'];
                        $min_stok = $a['barang_min_stok'];
                        $kat_id = $a['barang_kategori_id'];
                        $kat_nama = $a['kategori_nama'];
                    ?>
                        <div class="col-4">
                            <div class="profile-card mt-6">
                                <div class="card shadow-soft border-light text-center">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url() . 'assets/upload/images/barang/' . $gbr; ?>" class="card-img-top " alt="image">
                                    </div>
                                    <div class="card-body mt-n5">
                                        <h5 class="card-title"><?php echo $nm; ?></h5>
                                        <h6 class="card-subtitle"><?php echo 'Rp ' . number_format($harjul); ?></h6>
                                        <input type="number" name="quantity" id="<?php echo $id; ?>" value="1" class="quantity form-control">
                                        <button href="" target="_blank" class="btn btn-block btn-outline-info animate-up-2">
                                            Detail <span class="icon icon-xs"></i></span>
                                        </button>
                                        <button class="add_cart btn btn-success btn-block" data-barangid="<?php echo $id; ?>" data-barangnama="<?php echo $nm; ?>" data-barangharga="<?php echo $harjul; ?>">Add To Cart</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </section>

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
                    <button type="button" class="btn btn-secondary">I Got It</button>
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
        });
    });
</script>

</body>

</html>
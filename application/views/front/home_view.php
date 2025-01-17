<main>

    <div class="preloader bg-soft flex-column justify-content-center align-items-center">
        <div class="loader-element">
            <span class="loader-animated-dot"></span>
            <img src="<?php echo base_url() ?>assets/front/assets/img/brand/dark-loader.svg" height="40">
        </div>
    </div>

    <!-- Hero -->
    <section class="section-header pb-6 pb-lg-13 mb-2 mb-lg-3 bg-primary text-white">

        <div class="pattern bottom"></div>
    </section>

    <section class="section section-lg pt-0">

        <div class="container mt-n7 mt-lg-n13 z-2">
            <div class="justify-content-center">
                <div class="card-deck">
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

                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url() . 'assets/upload/images/barang/' . $gbr; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nm; ?></h5>
                                <p class="card-text">Barang ini tersisa : <span class="badge badge-primary"><?php echo $stok; ?> Item</span></p>
                                <p class="card-text"><small class="text-muted"><?php echo 'Rp ' . number_format($harjul); ?></small></p>
                            </div>
                            <div class="text-center">
                                <button type="button" data-toggle="modal" data-target="#modalDetail<?php echo $id ?>" class="btn btn-block btn-outline-info animate-up-2 ">
                                    Detail <span class="icon icon-xs"></i></span>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </section>
    <section class="section section-lg pt-0 line-bottom-light" id="tutorial">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-lg-6">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-3 mb-4">Cukup dengan 30 detik untuk melakukan pemesanan</h1>
                    <p class="lead">ikuti langkah-langkah di bawah ini.</p>
                </div>
            </div>
            <div class="row">
                <div class="timeline timeline-six px-3 px-lg-0">
                    <!-- Timeline Item 1 -->
                    <div class="row no-gutters">
                        <div class="col-lg">
                            <!--spacer-->
                        </div>
                        <!-- timeline item 1 center image & middle line -->
                        <div class="col-lg-1 text-center flex-column d-none d-lg-flex">
                            <div class="row h-50">
                                <div class="col">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <span class="d-none d-lg-block m-4 h4 lh-200 dot-separator bg-soft shadow-soft border border-light text-primary">1</span>
                            <div class="row h-50">
                                <div class="col middle-line">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <!-- timeline profile card -->
                        <div class="col-lg py-2">
                            <div class="card timeline-card bg-soft shadow-soft border-light p-3">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><span class="d-lg-none">1.</span> Pilih jenis barang </h4>
                                    <p class="my-2">Pilihlah barang yang akan di pesan terlebih dahulu, jangan lupa di cek ketersediaan barangnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 2 -->
                    <div class="row no-gutters">
                        <!-- timeline profile card -->
                        <div class="col-lg py-2">
                            <div class="card left-timeline-card bg-soft shadow-soft border-light p-3">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><span class="d-lg-none">2.</span> Ketik alamat lengkap pengiriman </h4>
                                    <p class="my-2">Ketikkan alamat lengkap pengiriman, cek data untuk menghindari kesalahan dalam pengiriman.</p>
                                </div>
                            </div>
                        </div>
                        <!-- timeline item 2 center image & middle line -->
                        <div class="col-lg-1 text-center flex-column d-none d-lg-flex">
                            <div class="row h-50">
                                <div class="col middle-line">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <span class="m-4 h4 lh-200 dot-separator bg-soft shadow-soft border border-light text-primary">2</span>
                            <div class="row h-50">
                                <div class="col middle-line">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <!--spacer-->
                        </div>
                    </div>
                    <!-- Timeline Item 3 -->
                    <div class="row no-gutters">
                        <div class="col-lg">
                            <!--spacer-->
                        </div>
                        <!-- timeline item 3 center image & middle line -->
                        <div class="col-lg-1 text-center flex-column d-none d-lg-flex">
                            <div class="row h-50">
                                <div class="col middle-line">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <span class="m-4 h4 lh-200 dot-separator bg-soft shadow-soft border border-light text-primary">3</span>
                            <div class="row h-50">
                                <div class="col middle-line">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <!-- timeline profile card -->
                        <div class="col-lg py-2">
                            <div class="card timeline-card bg-soft shadow-soft border-light p-3">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><span class="d-lg-none">3.</span> Pilih jenis pembayaran</h4>
                                    <p class="my-2">Kamu dapat memilih beberapa metode pembayaran, pilihlah sesuai keinginanmu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 4 -->
                    <div class="row no-gutters">
                        <!-- timeline profile card -->
                        <div class="col-lg py-2">
                            <div class="card left-timeline-card bg-soft shadow-soft border-light p-3">
                                <div class="card-body p-4">
                                    <h4 class="mb-3"><span class="d-lg-none">4.</span> Konfirmasi pembayaran</h4>
                                    <p class="my-2">Lakukan konfirmasi pembayaran pada halaman dashboard pengguna.</p>
                                    <p>Upload bukti pembayaran pada halaman status pembayaran.</p>
                                </div>
                            </div>
                        </div>
                        <!-- timeline item 4 center image & middle line -->
                        <div class="col-lg-1 text-center flex-column d-none d-lg-flex">
                            <div class="row h-50">
                                <div class="col middle-line">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <span class="m-4 h4 lh-200 dot-separator bg-soft shadow-soft border border-light text-primary">4</span>
                            <div class="row h-50">
                                <div class="col">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <!--spacer-->
                        </div>
                    </div>
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
                    <a href="pemesanan_pelanggan" class="btn btn-secondary">Pesan sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============ MODAL DETAIL =============== -->
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
        <div id="modalDetail<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Detail Barang</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    </div>
                    <div class="modal-body">
                        <div class="card shadow-soft mb-5 mb-lg-6 px-2">
                            <div class="card-header border-light p-4">
                                <!-- Price -->
                                <div class="d-flex mb-3">
                                    <span class="h5 mb-0">RP</span>
                                    <span class="price display-2 mb-0" data-annual="<?php echo number_format($harjul); ?>" data-monthly="<?php echo number_format($harjul); ?>"><?php echo number_format($harjul); ?></span>
                                </div>
                                <h4 class="mb-3 text-black"><?php echo $nm; ?></h4>
                            </div>
                            <div class="card-body pt-5">
                                <p class="font-weight-normal mb-0"><?php echo $desc; ?></p>
                                <a data-fancybox="gallery" href="<?php echo base_url() . 'assets/upload/images/barang/' . $gbr; ?>"><img src="<?php echo base_url() . 'assets/upload/images/barang/' . $gbr; ?>"></a>
                            </div>
                            <div class="card-footer px-4 pb-4">
                                <input type="number" name="quantity" id="<?php echo $id; ?>" value="1" class="quantity form-control">
                                <!-- Button -->
                                <button class="add_cart btn btn-block btn-outline-success animate-up-2 mt-2" data-barangid="<?php echo $id; ?>" data-barangnama="<?php echo $nm; ?>" data-barangharga="<?php echo $harjul; ?>">Add To Cart <span class="icon icon-xs ml-3"><i class="fas fa-arrow-right"></i></span></button>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php
    endforeach;
    ?>

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
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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
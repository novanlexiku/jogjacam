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
                                <div class="card shadow-soft border-light text-center" style="height: 350px;max-height:500px;">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url() . 'assets/upload/images/barang/' . $gbr; ?>" class="card-img-top " alt="image">
                                    </div>
                                    <div class="card-body mt-n5">
                                        <h5 class="card-title"><?php echo $nm; ?></h5>
                                        <h6 class="card-subtitle"><?php echo 'Rp ' . number_format($harjul); ?></h6>

                                    </div>
                                    <ul class="social-buttons py-3">
                                        <li>
                                            <a href="" target="_blank" class="btn btn-block btn-outline-info animate-up-2">
                                                Detail <span class="icon icon-xs"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank" class="btn btn-block btn-outline-gray animate-up-2">
                                                Pesan <span class="icon icon-xs"></i></span>
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </section>




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
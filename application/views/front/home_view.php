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
                                <div class="card shadow-soft border-light text-center" style="height: 350px; max-height:500px;">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url() . 'assets/upload/images/barang/' . $gbr; ?>" class="card-img-top ">
                                    </div>
                                    <div class="card-body mt-n5">
                                        <h5 class="card-title"><?php echo $nm; ?></h5>
                                        <h6 class="card-subtitle"><?php echo 'Rp ' . number_format($harjul); ?></h6>
                                    </div>
                                    <div class="card-footer px-4 pb-4">
                                        <ul class="social-buttons">
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
                                    <p class="my-2">Lakukan konfirmasi pembayaran pada kontak yang telah disediakan.</p>
                                    <p>Upload bukti pembayaran pada halaman konfirmasi.</p>
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
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-lg-7">
                <div class="col-12 text-center">
                    <h1 class="h1 font-weight-bolder mb-4 px-lg-8">Recommended by leading experts in marketing and SEO</h1>
                    <p class="lead">Our products are loved by users worldwide</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-lg-6">
                    <div class="customer-testimonial d-flex mb-5">
                        <img src="<?php echo base_url() ?>assets/front/assets/img/team/profile-picture-1.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                            <h6>- James Curran <small class="ml-0 ml-md-2">Designer Apple</small></h6>
                        </div>
                    </div>
                    <div class="customer-testimonial d-flex mb-5">
                        <img src="<?php echo base_url() ?>assets/front/assets/img/team/profile-picture-2.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                            <h6>- Richard Thomas <small class="ml-0 ml-md-2">Engineer Google</small></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-lg-6">
                    <div class="customer-testimonial d-flex mb-5">
                        <img src="<?php echo base_url() ?>assets/front/assets/img/team/profile-picture-4.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                            <h6>- Jose Evans <small class="ml-0 ml-md-2">Engineer Google</small></h6>
                        </div>
                    </div>
                    <div class="customer-testimonial d-flex mb-lg-5">
                        <img src="<?php echo base_url() ?>assets/front/assets/img/team/profile-picture-6.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                            <h6>- Charles Moody <small class="ml-0 ml-md-2">Manager IBM</small></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="./testimonials.html" class="btn btn-primary"><span class="mr-2"><i class="fas fa-book-open"></i></span> See all stories</a>
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
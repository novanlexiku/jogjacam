<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pemesanan</li>
                        </ol>
                    </nav>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <!-- Content -->
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h2 class="mb-0">Pemesanan Barang</h3>

                        <div class="mt-1">
                            <?php
                            $msg = $this->session->flashdata('msg');
                            if ($msg == "konfirmasi") {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text"><strong>Sukses!</strong> konfirmasi pemesanan!</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            } elseif ($msg == "hapus") {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text"><strong>Sukses!</strong> Hapus Data Pemesanan!</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            } elseif ($msg == "uploadkonfirmasi") {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text"><strong>Sukses!</strong> Upload Gambar!</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            } elseif ($msg == "error-img") {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text"><strong>Sukses!</strong> Hapus Data Pemesanan!</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="mydata">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="text-align:center;width:40px;">No</th>
                                <th scope="col">ID Invoice</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total Bayar</th>
                                <th scope="col">Konfirmasi</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width:140px;text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data->result_array() as $a) :
                                $no++;
                                $id = $a['invoice_id'];
                                $tgl = $a['invoice_tanggal'];
                                $ttl = $a['invoice_total'];
                                $kon = $a['invoice_konfirmasi'];
                                $sts = $a['invoice_status'];
                            ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $no; ?></td>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $tgl; ?></td>
                                    <td><?php echo 'Rp ' . number_format($ttl); ?></td>
                                    <?php if ($kon == '') { ?>
                                        <td>pending</td>
                                    <?php } else { ?>
                                        <td> <img class="avatar" width="50" src="<?php echo base_url() . 'assets/upload/images/konfirmasi/' . $kon; ?>">
                                        </td>
                                    <?php } ?>
                                    <td><?php echo $sts; ?></td>
                                    <td style="text-align:center;">
                                        <?php if ($this->session->userdata('user_level') == '1' || $this->session->userdata('user_level') == '2') { ?>
                                            <a class="btn btn-warning btn-sm" href="#modalDetail<?php echo $id ?>" data-toggle="modal" title="Detail"><span class="fa fa-edit"></span> Detail</a>
                                            <a class="btn btn-warning btn-sm" href="#modalUpdate<?php echo $id ?>" data-toggle="modal" title="Update"><span class="fa fa-edit"></span> Update</a>
                                            <a class="btn btn-sm btn-danger" href="#modalHapus<?php echo $id ?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>

                                        <?php } elseif ($this->session->userdata('user_level') == '3') { ?>
                                            <a class="btn btn-warning btn-sm" href="#modalDetail<?php echo $id ?>" data-toggle="modal" title="Detail"><span class="fa fa-edit"></span> Detail</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


</div>
</div>

<!-- ============ MODAL DETAIL =============== -->
<?php
foreach ($detail->result_array() as $a) {
    $id = $a['invoice_id'];
    $nm = $a['invoice_user_nama'];
    $tgl = $a['invoice_tanggal'];
    $tuj = $a['invoice_tujuan'];
    $ttl = $a['invoice_total'];
    $kon = $a['invoice_konfirmasi'];
    $sts = $a['invoice_status'];
    $inm = $a['bi_barang_nama'];
    $inh = $a['bi_barang_harjul'];
    $inq = $a['bi_barang_qty'];

?>
    <div id="modalDetail<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Detail Pemesanan <?php echo $nm; ?> | nomor invoice : <?php echo $id; ?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <div class="modal-body">
                    <h5>Nama : <?php echo $nm; ?></h5>
                    <h5>No.Invoice : <?php echo $id; ?></h5>
                    <h5>Tanggal: <?php echo $tgl; ?></h5>
                    <h5>Tujuan Pengiriman : <?php echo $tuj; ?></h5>
                    <h5>Status : <?php echo $sts; ?></h5>
                    <?php if ($this->session->userdata('user_level') == '1' || $this->session->userdata('user_level') == '2') {
                        if ($kon == '') { ?>
                            <h5>Pembayaran : Belum melakukan pembayaran</h5>
                        <?php } else { ?>
                            <a data-fancybox="gallery" href="<?php echo base_url() . 'assets/upload/images/konfirmasi/' . $kon; ?>"><img src="<?php echo base_url() . 'assets/upload/images/konfirmasi/' . $kon; ?>"></a>
                        <?php } ?>
                    <?php } elseif ($this->session->userdata('user_level') == '3') { ?>
                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/admin/pemesanan/konfirmasi' ?>">
                            <input name="invoice_id" type="hidden" value="<?php echo $id; ?>">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Konfirmasi</label>
                                <div class="form-group">
                                    <input type="file" name="filefoto" class="dropify" data-height="220" data-default-file="<?php echo base_url() . 'assets/upload/images/konfirmasi/' . $kon; ?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-sm">Upload</button>
                        </form>

                    <?php } ?>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $jmlqty = 0;
                            foreach ($detail->result_array() as $a) {
                                $ttl = $a['invoice_total'];
                                $inm = $a['bi_barang_nama'];
                                $inh = $a['bi_barang_harjul'];
                                $inq = $a['bi_barang_qty'];
                                $jmlqty = $jmlqty + $inq;
                            ?>
                                <tr>
                                    <td><?php echo $inm; ?></td>
                                    <td><?php echo 'Rp ' . number_format($inh); ?></td>
                                    <td><?php echo $inq; ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <th>Total</th>
                                <th><?php echo 'Rp ' . number_format($ttl); ?></th>
                                <th><?php echo $jmlqty; ?></th>
                            </tr>
                        </tbody>

                    </table>



                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

<!-- ============ MODAL UPDATE =============== -->
<?php
foreach ($data->result_array() as $a) {
    $id = $a['invoice_id'];
    $nm = $a['invoice_user_nama'];
    $tgl = $a['invoice_tanggal'];
    $ttl = $a['invoice_total'];
    $kon = $a['invoice_konfirmasi'];
    $sts = $a['invoice_status'];
?>
    <div id="modalUpdate<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Update Status</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/admin/pemesanan/update' ?>">
                    <div class="modal-body">
                        <input name="invoice_id" type="hidden" value="<?php echo $id; ?>">
                        <input name="invoice_status" type="hidden" value="packing">

                        <p>Ganti Status pemesanan oleh <?php echo $nm; ?> dengan nomor invoice : <?php echo $id; ?> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>
<!-- ============ MODAL HAPUS =============== -->
<?php
foreach ($data->result_array() as $a) {
    $id = $a['invoice_id'];
    $nm = $a['invoice_user_nama'];
    $tgl = $a['invoice_tanggal'];
    $ttl = $a['invoice_total'];
    $kon = $a['invoice_konfirmasi'];
    $sts = $a['invoice_status'];
?>
    <div id="modalHapusPemesanan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Hapus Pemesanan</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/admin/pemesanan/hapus' ?>">
                    <div class="modal-body">
                        <p>Batalkan pemesanan oleh <?php echo $nm; ?> dengan nomor invoice :<?php echo $id; ?> ?</p>
                        <input name="invoice_id" type="hidden" value="<?php echo $id; ?>">
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>

<!--END MODAL-->

<!-- Argon Scripts -->
<!-- Core -->
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/dropify/dropify.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/assets/vendor/summernote-master/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


<!-- Argon JS -->
<script src="<?php echo base_url() ?>assets/dashboard/assets/js/dashboard.js?v=1.2.0"></script>
<!-- Datatables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/b-1.6.5/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#mydata').DataTable();
        $('.dropify').dropify({
            defaultFile: '',
            messages: {
                default: 'Drag atau drop untuk memilih Photo',
                replace: 'Ganti',
                remove: 'Hapus',
                error: 'error'
            }
        });
        $('.summernote').summernote({
            height: 200,
            focus: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ["fullscreen", "codeview", "help"]],
            ],
            onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            }
        });



        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo site_url() ?>assets/upload/staff",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    editor.insertImage(welEditable, url);
                }
            });
        }
    });
</script>

</body>

</html>
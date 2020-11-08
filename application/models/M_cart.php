<?php
class M_cart extends CI_Model
{

    function get_all_barang()
    {
        $hasil = $this->db->get('tbl_barang');
        return $hasil->result();
    }
    function get_nofak()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(invoice_id,6)) AS kd_max FROM tbl_invoice WHERE DATE(invoice_tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return date('dmy') . $kd;
    }

    function proses_pemesanan($nofak, $total, $nama, $nohp, $tujuan, $bank, $status)
    {
        $id = $this->session->userdata('user_id');
        $this->db->query("INSERT INTO tbl_invoice (invoice_id, invoice_user_id, invoice_user_nama, invoice_no_hp, invoice_tujuan, invoice_bank_id, invoice_tanggal, invoice_total, invoice_status) VALUES ('$nofak','$id','$nama','$nohp','$tujuan','$bank','NOW()','$total','$status')");
        foreach ($this->cart->contents() as $item) {
            $data = array(
                'bi_invoice_id'             =>    $nofak,
                'bi_barang_id'        =>    $item['id'],
                'bi_barang_nama'    =>    $item['name'],
                'bi_barang_harjul'    =>    $item['price'],
                'bi_qty'            =>    $item['qty'],
            );
            $this->db->insert('tbl_detail_jual', $data);
            $this->db->query("update tbl_barang set barang_stok=barang_stok-'$item[qty]' where barang_id='$item[id]'");
        }
        return true;
    }
}

<?php
class M_cart extends CI_Model
{

    function get_all_barang()
    {
        $hasil = $this->db->get('tbl_barang');
        return $hasil->result();
    }
}

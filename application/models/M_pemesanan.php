<?php
class M_pemesanan extends CI_Model
{

    function get_all_invoice()
    {
        $hsl = $this->db->query("select * from tbl_invoice");
        return $hsl;
    }

    
}

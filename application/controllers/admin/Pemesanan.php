<?php
class Pemesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') != TRUE) {
            $url = base_url();
            redirect($url);
        };
        $this->load->model('m_pemesanan');
    }
    function index()
    {
        if ($this->session->userdata('user_level') == '1') {
            $data['data'] = $this->m_pemesanan->get_all_invoice();
            $title = array(
                'title' => 'Halaman Pemesanan',
            );
            $this->load->view('shared/header', $title);
            $this->load->view('admin/v_bank', $data);
        } else {
            echo "Halaman tidak ditemukan";
        }
    }

    
}

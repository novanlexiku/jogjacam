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
            $data['detail'] = $this->m_pemesanan->get_detail_invoice();
            $title = array(
                'title' => 'Halaman Pemesanan',
            );
            $this->load->view('shared/header', $title);
            $this->load->view('admin/v_pemesanan', $data);
        } else {
            echo "Halaman tidak ditemukan";
        }
    }

    function update()
    {
        if ($this->session->userdata('user_level') == '1') {
            $id = $this->input->post('invoice_id');
            $sts = $this->input->post('invoice_status');
            $this->m_pemesanan->update($id, $sts);
            echo $this->session->set_flashdata('msg', 'konfirmasi');
            redirect('pesanan');
        } else {
            echo "Halaman tidak ditemukan";
        }
    }
}

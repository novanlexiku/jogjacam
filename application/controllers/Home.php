<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    protected $access = array('1', '2');
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_kategori');
        $this->load->model('m_barang');
        $this->load->model('m_pembelian');
        $this->load->model('m_penjualan');
        $this->load->library('datatables');
    }


    public function index()
    {
        $title = array(
            'title' => 'Home'
        );

        $this->load->view('shared/frontheader', $title);
        $this->load->view('front/home_view');
    }
}

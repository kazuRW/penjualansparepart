<?php
defined('BASEPATH') OR exit('Tidak ada Halaman Akses');

class Beranda extends CI_Controller {

    public function index()
    {
        $this->load->view('beranda');
    }
}
<?php
defined('BASEPATH') OR exit('Tidak ada Halaman Akses');

class Kategoriproduk extends CI_Controller {

    public function index()
    {
        $this->load->view('kategoriproduk');
    }
}
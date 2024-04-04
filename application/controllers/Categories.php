<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function ram()
	{
		$data['title'] = 'Kategori RAM';
		$data['ram'] = $this->model_kategori->ram()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('ram', $data);
		$this->load->view('layout/home/footer');
	}

	public function processor()
	{
		$data['title'] = 'Kategori Processor';
		$data['processor'] = $this->model_kategori->processor()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('processor', $data);
		$this->load->view('layout/home/footer');
	}

	public function ssd()
	{
		$data['title'] = 'Kategori SSD';
		$data['ssd'] = $this->model_kategori->ssd()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('ssd', $data);
		$this->load->view('layout/home/footer');
	}

	public function vga()
	{
		$data['title'] = 'Kategori VGA';
		$data['vga'] = $this->model_kategori->vga()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('vga', $data);
		$this->load->view('layout/home/footer');
	}

	public function pc()
	{
		$data['title'] = 'Kategori PC Gaming';
		$data['pc'] = $this->model_kategori->pc()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('pc', $data);
		$this->load->view('layout/home/footer');
	}

	public function produklainnya()
	{
		$data['title'] = 'Kategori Produk lainnya';
		$data['produklainnya'] = $this->model_kategori->produklainnya()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('produklainnya', $data);
		$this->load->view('layout/home/footer');
	}
}

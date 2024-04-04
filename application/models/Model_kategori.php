<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function ram()
	{
		return $this->db->get_where('product', array('kategori' => 'Ram'));
	}

	public function processor()
	{
		return $this->db->get_where('product', array('kategori' => 'Processor'));
	}

	public function ssd()
	{
		return $this->db->get_where('product', array('kategori' => 'Ssd'));
	}

	public function vga()
	{
		return $this->db->get_where('product', array('kategori' => 'Vga'));
	}

	public function pc()
	{
		return $this->db->get_where('product', array('kategori' => 'PC Gaming'));
	}

	public function produklainnya()
	{
		return $this->db->get_where('product', array('kategori' => 'Produk Lainnya'));
	}
}

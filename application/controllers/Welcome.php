<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['isi'] = $this->db->get('tbl_transaksi');
		$this->load->view('tampildata', $data);
	}
}

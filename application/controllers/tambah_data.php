<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tambah_data extends CI_Controller
{

    public function index()
    {
        $data['isi'] = $this->db->get('tbl_transaksi');
        $this->load->view('tambahdata', $data);
    }
    public function insert()
    {
        $nama_pembeli = $this->input->post('nama_pembeli');
        $no_hp = $this->input->post('no_hp');
        $ukuran = $this->input->post('ukuran');
        $harga = $this->input->post('harga');
        $merk_sepatu = $this->input->post('merk_sepatu');

        $data = array(
            'nama_pembeli' => $nama_pembeli,
            'no_hp' => $no_hp,
            'ukuran' => $ukuran,
            'harga' => $harga,
            'merk_sepatu' => $merk_sepatu
        );
        $this->db->insert('tbl_transaksi', $data);
        redirect('Welcome', 'refresh');
    }
}

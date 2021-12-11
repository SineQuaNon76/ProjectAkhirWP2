<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Berita');
    }

    public function index()
    {
        $data['data'] = $this->M_Berita->tampil_data_berita();
        $this->load->view('v_berita', $data);
    }

    function tambah_berita()
    {
        $this->load->view('v_add_berita');
    }

    function simpan_berita()
    {
        $judul = $this->input->post('judul');
        $kategori = $this->input->post('kategori');
        $isi_berita = $this->input->post('isi_berita');
        $this->M_Berita->simpan_berita($judul, $kategori, $isi_berita);
        echo $this->session->set_flashdata('pesan', 'Data Berhasil Tersimpan');
        redirect('Berita');
    }

    function edit_berita($id)
    {
        $data['data'] = $this->M_Berita->edit_berita($id);
        $this->load->view('v_edit_berita', $data);
    }

    function update_berita()
    {
        $id = $this->input->post('nid');
        $judul = $this->input->post('njudul');
        $kategori = $this->input->post('nkategori');
        $isi_berita = $this->input->post('nisi_berita');
        $this->M_Berita->update_berita($id, $judul, $kategori, $isi_berita);
        echo $this->session->set_flashdata('pesan', 'Data Berhasil Di-Update');
        redirect('Berita');
    }




    function hapus_berita($id)
    {
        $this->M_Berita->hapus_berita($id);
        echo $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Berita');
    }
}

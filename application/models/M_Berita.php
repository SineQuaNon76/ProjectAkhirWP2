<?php

class M_Berita extends CI_Model
{

    function tampil_data_berita()
    {
        $data = $this->db->query("SELECT*FROM tbl_berita");
        return $data;
    }

    function simpan_berita($judul, $kategori, $isi_berita)
    {
        $data = $this->db->query("INSERT INTO tbl_berita (judul, kategori, isi_berita) values('$judul','$kategori','$isi_berita')");
        return $data;
    }

    function update_berita($id, $judul, $kategori, $isi_berita)
    {
        $data = $this->db->query("UPDATE tbl_berita set judul='$judul', kategori='$kategori', isi_berita='$isi_berita' WHERE id='$id'");
        return $data;
    }


    function hapus_berita($id)
    {
        $data = $this->db->query("DELETE FROM tbl_berita WHERE id='$id'");
        return $data;
    }

    function edit_berita($id)
    {
        $data = $this->db->query("SELECT*FROM tbl_berita WHERE id='$id'");
        return $data;
    }
}

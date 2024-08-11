<?php

class Tambahmateri extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        $data = array();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('tabel/header', $data);
        $this->load->view('forminput/materi');
        $this->load->view('tabel/footer', $data);
    }

    function tambah_aksi_materi() {
       function tambah_aksi_materi() {
        $id_kursus = $this->input->post('id_kursus');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $link_embed = $this->input->post('link_embed');
        $dibuat_pada = date('Y-m-d H:i:s');
        $diperbarui_pada = date('Y-m-d H:i:s');

        // Cek apakah id_kursus valid
        if ($this->m_data->is_valid_kursus_id($id_kursus)) {
            $data = array(
                'id_kursus' => $id_kursus,
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'link_embed' => $link_embed,
                'dibuat_pada' => $dibuat_pada,
                'diperbarui_pada' => $diperbarui_pada
            );

            $this->m_data->input_data($data, 'materi'); // Simpan data ke tabel materi
            redirect('materi'); // Redirect ke halaman CRUD materi setelah berhasil menambahkan data
        } else {
            // Jika id_kursus tidak valid, tampilkan pesan error atau redirect ke halaman lain
            echo "ID Kursus tidak valid.";
        }
    }
    }

}
?>

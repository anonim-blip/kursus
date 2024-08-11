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
        $data['kursus'] = $this->m_data->tampil_data('kursus')->result(); // Ambil data kursus

        $this->load->view('tabel/header', $data);
        $this->load->view('forminput/materi', $data);
        $this->load->view('tabel/footer', $data);
    }

    function tambah_aksi_materi() {
        $id_kursus = $this->input->post('id_kursus');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $link_embed = $this->input->post('link_embed');
        $dibuat_pada = date('Y-m-d H:i:s');
        $diperbarui_pada = date('Y-m-d H:i:s');

        // Cek apakah id_kursus valid atau tidak
        if (!$this->m_data->is_valid_kursus_id($id_kursus)) {
            // Jika tidak valid, tambahkan kursus baru
            $kursus_data = array(
                'judul' => $judul, // Menggunakan judul sebagai default untuk kursus baru
                'deskripsi' => $deskripsi // Menggunakan deskripsi sebagai default untuk kursus baru
            );
            $id_kursus = $this->m_data->input_data($kursus_data, 'kursus'); // Menyimpan dan mendapatkan ID kursus baru
        }

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
    }
}
?>

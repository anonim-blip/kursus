<?php

class Editkursus extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index($id) {
        $where = array('id' => $id);
        $data['kursus'] = $this->m_data->edit_data($where, 'kursus')->result();
        $this->load->view('tabel/header', $data);
        $this->load->view('formedit/edit_kursus', $data);
        $this->load->view('tabel/footer', $data);
    }

    function update_kursus() {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $durasi = $this->input->post('durasi');
        $diperbarui_pada = date('Y-m-d H:i:s'); // Update tanggal diperbarui saat ini

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'durasi' => $durasi,
            'diperbarui_pada' => $diperbarui_pada
        );

        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'kursus');
        redirect('kursus'); // Redirect ke halaman CRUD kursus setelah berhasil mengupdate data
    }

}
?>

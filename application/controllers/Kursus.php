<?php 

class Kursus extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	//tabel kursus
	function index()
	{
		// memanggil tabel kursus dan simpan $data
		$data['kursus'] = $this->m_data->tampil_data('kursus')->result();
		$this->load->view('tabel/header', $data);
		$this->load->view('tabel/kursus', $data);
		$this->load->view('tabel/footer', $data);
	}

	function tambah()
	{
		$data = array(); // initialize $data to avoid undefined variable error
		$this->load->view('tabel/header', $data);
		$this->load->view('forminput/input_kursus');
		$this->load->view('tabel/footer', $data);
	}

	function tambah_aksi()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$durasi = $this->input->post('durasi');
		$dibuat_pada = date('Y-m-d H:i:s'); // Tanggal dibuat saat ini
		$diperbarui_pada = date('Y-m-d H:i:s'); // Tanggal diperbarui saat ini

		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'durasi' => $durasi,
			'dibuat_pada' => $dibuat_pada,
			'diperbarui_pada' => $diperbarui_pada
		);
		$this->m_data->input_data($data, 'kursus');
		redirect('kursus');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'kursus');
		redirect('kursus');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['kursus'] = $this->m_data->edit_data($where, 'kursus')->result();
		$this->load->view('editkursus', $data);

	}

	function update()
	{
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
		redirect('kursus');
	}
	
	function cari() {
        $keyword = $this->input->get('keyword'); // Ambil kata kunci pencarian dari URL
        $data['kursus'] = $this->m_data->cari_data('kursus', $keyword)->result(); // Panggil method cari_data di model

        // Load kembali view kursus.php dengan data hasil pencarian
        $this->load->view('tabel/header', $data);
        $this->load->view('tabel/kursus', $data);
        $this->load->view('tabel/footer', $data);
    }
	
    function cetak_pdf(){
        $data['kursus'] = $this->m_data->get_data('kursus')->result();
        $this->load->view('kursus_pdf', $data);
    }
}

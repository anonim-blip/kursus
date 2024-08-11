<?php 

class Materi extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	// Menampilkan data dari tabel materi
function index()
{
    $data['materi'] = $this->m_data->tampil_data('materi')->result();

    $this->load->view('tabel/header', $data);
    $this->load->view('tabel/materi', $data);
    $this->load->view('tabel/footer', $data);
}



	function tambah()
	{
		$data['kursus'] = $this->m_data->tampil_data('kursus')->result(); // Mendapatkan data kursus untuk dropdown
		$this->load->view('tabel/header', $data);
		$this->load->view('forminput/input_materi', $data);
		$this->load->view('tabel/footer', $data);
	}

	function tambah_aksi()
	{
		$id_kursus = $this->input->post('id_kursus');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$link_embed = $this->input->post('link_embed');
		$dibuat_pada = date('Y-m-d H:i:s'); // Tanggal dibuat saat ini
		$diperbarui_pada = date('Y-m-d H:i:s'); // Tanggal diperbarui saat ini

		$data = array(
			'id_kursus' => $id_kursus,
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'link_embed' => $link_embed,
			'dibuat_pada' => $dibuat_pada,
			'diperbarui_pada' => $diperbarui_pada
		);
		$this->m_data->input_data($data, 'materi');
		redirect('materi');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'materi');
		redirect('materi');
	}

	public function edit($id) {
    $data['materi'] = $this->m_data->get_by_id($id);
    
    if (empty($data['materi'])) {
        show_404(); // Menampilkan halaman 404 jika data tidak ditemukan
    }

    $this->load->view('editmateri', $data);
}



	function update()
	{
		$id = $this->input->post('id');
		$id_kursus = $this->input->post('id_kursus');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$link_embed = $this->input->post('link_embed');
		$diperbarui_pada = date('Y-m-d H:i:s'); // Update tanggal diperbarui saat ini

		$data = array(
			'id_kursus' => $id_kursus,
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'link_embed' => $link_embed,
			'diperbarui_pada' => $diperbarui_pada
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where, $data, 'materi');
		redirect('materi');
	}
	
	function cari() {
        $keyword = $this->input->get('keyword'); // Ambil kata kunci pencarian dari URL
        $data['materi'] = $this->m_data->cari_data('materi', $keyword)->result(); // Panggil method cari_data di model

        // Load kembali view materi.php dengan data hasil pencarian
        $this->load->view('tabel/header', $data);
        $this->load->view('tabel/materi', $data);
        $this->load->view('tabel/footer', $data);
    }
	
    function cetak_pdf(){
        $data['materi'] = $this->m_data->get_data('materi')->result();
        $this->load->view('materi_pdf', $data);
    }
}

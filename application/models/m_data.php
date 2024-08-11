<?php 
 
class M_data extends CI_Model{
	// Nama tabel yang digunakan
    private $table = 'materi'; // Pastikan nama tabel sesuai dengan yang ada di database

    public function __construct() {
        parent::__construct();
    }

	// Fungsi untuk menampilkan data kursus dengan urutan berdasarkan ID dari terbaru
	// Model: m_data.php
public function tampil_data($table) {
	$this->db->order_by('id', 'DESC');
    return $this->db->get($table);
}


	// Method untuk mencari data kursus berdasarkan keyword di kolom 'judul'
	public function cari_data($keyword) {
		$this->db->like('judul', $keyword);
		$query = $this->db->get('kursus');
		return $query;
	}

	// Fungsi untuk menambahkan data baru ke tabel kursus
	function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	// Fungsi untuk menghapus data dari tabel kursus berdasarkan kondisi tertentu
	function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	// Fungsi untuk mengambil data dari tabel kursus berdasarkan kondisi tertentu
	function edit_data($where, $table){		
		return $this->db->get_where($table, $where);
	}

	// Fungsi untuk memperbarui data di tabel kursus berdasarkan kondisi tertentu
	function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function get_by_id($id) {
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->row(); // Mengembalikan satu baris data
}
 public function is_valid_kursus_id($id_kursus) {
        $this->db->where('id', $id_kursus);
        $query = $this->db->get('kursus');
        return $query->num_rows() > 0;
    }

}

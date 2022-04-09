<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perpus extends CI_Model {

	public function count_koleksi(){
		$this->db->select('*');
        $this->db->from('tbl_koleksi');
        $query = $this->db->get();
        return $query->num_rows();
	}
	public function count_buku(){
		$this->db->select('*');
        $this->db->from('tbl_koleksi');
        $this->db->where('jenis_koleksi', 'buku');
        $query = $this->db->get();
        return $query->num_rows();
	}
	public function count_majalah(){
		$this->db->select('*');
        $this->db->from('tbl_koleksi');
        $this->db->where('jenis_koleksi', 'majalah');
        $query = $this->db->get();
        return $query->num_rows();
	}
	public function count_users(){
		$this->db->select('*');
        $this->db->from('tbl_users');
        $query = $this->db->get();
        return $query->num_rows();
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	public function get_all()
	{
		$query = $this->db->get('tbl_users')->result();
        return $query;
	}

	public function get_users(){
		$query = $this->db->get('tbl_users')->result();
        return $query;
	}

	public function add_koleksi($data){
        return $this->db->insert('tbl_koleksi', $data);
	}

	public function edit_koleksi($data,$id)
    {
        return $this->db->update('tbl_koleksi', $data, array('id_koleksi' => $id));
    }
	
	public function delete_koleksi($id){
		return $this->db->delete('tbl_koleksi', array("id_koleksi" => $id));
	}

	public function get_all_koleksi(){
		$this->db->select('*');
        $this->db->from('tbl_jenis_koleksi');
        $this->db->join('tbl_koleksi', 'tbl_koleksi.jenis_koleksi = tbl_jenis_koleksi.jenis');
        // $this->db->where('jenis', 'buku');
        $query = $this->db->get()->result();
        return $query;
	}

	public function get_buku(){
		$this->db->select('*');
        $this->db->from('tbl_jenis_koleksi');
        $this->db->join('tbl_koleksi', 'tbl_koleksi.jenis_koleksi = tbl_jenis_koleksi.jenis');
        $this->db->where('jenis', 'buku');
        $query = $this->db->get()->result();
        return $query;
	}
	
	public function get_majalah(){
		$this->db->select('*');
        $this->db->from('tbl_jenis_koleksi');
        $this->db->join('tbl_koleksi', 'tbl_koleksi.jenis_koleksi = tbl_jenis_koleksi.jenis');
        $this->db->where('jenis', 'majalah');
        $query = $this->db->get()->result();
        return $query;
	}

}

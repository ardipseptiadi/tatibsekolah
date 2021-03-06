<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JawabanModel extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_jawaban";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);
		// $this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function selectByIdTugas($id){
		$this->db->select('tb_jawaban.*');
		$this->db->select('tb_siswa.nama as namasiswa');
		$this->db->select('tb_siswa.nis');
		$this->db->from($this->tableName);
		$this->db->where('id_tugas',$id);
		$this->db->join('tb_siswa','tb_siswa.id = tb_jawaban.id_siswa');
		// $this->db->limit($from,$offset);

		return $this->db->get();
	}	
	public function checkJawaban($ids,$idt){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_siswa',$ids);
		$this->db->where('id_tugas',$idt);

		return $this->db->get();
	}
	
	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('id',$id);
		$this->db->update($this->tableName);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->tableName);
	}

}

?>

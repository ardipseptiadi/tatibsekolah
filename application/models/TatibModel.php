<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TatibModel extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_tatib";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function selectById($kode){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('kode',$kode);
		// $this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($kode,$data){
		$this->db->set($data);
		$this->db->where('kode',$kode);
		$this->db->update($this->tableName);
	}

	public function delete($kode){
		$this->db->where('kode',$kode);
		$this->db->delete($this->tableName);
	}

	public function selectAllDropdown()
	{
			$this->db->select('nama, kode');
	   	$this->db->from($this->tableName);
	   	$query = $this->db->get();
	   	return $query->result();
	}

}

?>

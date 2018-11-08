<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PelanggaranModel extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_pelanggaran";
	}

  public function selectAll($from=0,$offset=0)
  {
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
}

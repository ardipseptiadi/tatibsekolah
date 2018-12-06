<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	private $head;
	public function __construct(){
		parent::__construct();
		$this->head['kelasheader'] = $this->KelasModel->selectAll()->result_array();
	}
	public function index()
	{
		$this->load->view('layout/aheader',$this->head);
		$this->load->view('admin/overview');
		$this->load->view('layout/afooter');
	}
	public function guru(){
		$data['guru'] = $this->GuruModel->selectAllJoinguru()->result_array();

		// var_dump($data['guru']);
		$this->load->view('layout/aheader',$this->head);
		$this->load->view('admin/guru',$data);
		$this->load->view('layout/afooter');
	}
	public function guruAct($comm,$id=0){
		if($comm == "add"){
			$data['mapel'] = $this->MapelModel->selectAll()->result_array();
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fGuru',$data);
			$this->load->view('layout/afooter');	//
		}else if($comm == "add2"){
			$data = $this->input->post();
			$users['username'] = $data['kode'];
			$users['password'] = md5($data['kode']);
			$users['kategori'] = 'guru';
			$data['id_user'] = $this->UserModel->insert($users);
			$this->GuruModel->insert($data);
			redirect('admin/guru/');
		}else if($comm == "del"){
			$id_user = $this->GuruModel->selectById($id)->row()->id_user;
			$this->GuruModel->delete($id);
			$this->UserModel->delete($id_user);
			redirect('admin/guru');
		}else if($comm=="edit"){
			$data['edit']=$this->GuruModel->selectById($id)->result_array()[0];
			$data['mapel'] = $this->MapelModel->selectAll()->result_array();
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fGuruEdit',$data);
			$this->load->view('layout/afooter');
		}else if($comm=="edit2"){
			$data = $this->input->post();
			$this->GuruModel->update($data['id'], $data);
			redirect('admin/guru/');
		}
	}
	public function tatib(){
		$data['tatib'] = $this->MapelModel->selectAll()->result_array();

		// var_dump($data['tatib']);
		$this->load->view('layout/aheader',$this->head);
		$this->load->view('admin/tatib',$data);
		$this->load->view('layout/afooter');
	}
	public function tatibAct($comm,$id=0){
		if($comm == "add"){
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/ftatib');
			$this->load->view('layout/afooter');
		}else if($comm == "add2"){
			$data = $this->input->post();
			$this->MapelModel->insert($data);
			redirect('admin/tatib/');
		}else if($comm == "del"){
			$this->MapelModel->delete($id);
			redirect('admin/tatib');
		}else if($comm=="edit"){
			$data['edit']=$this->MapelModel->selectById($id)->result_array()[0];
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/ftatibEdit', $data);
			$this->load->view('layout/afooter');
		}else if($comm=="edit2"){
			$data = $this->input->post();
			$this->MapelModel->update($data['id'], $data);
			redirect('admin/tatib/');
		}
	}
		public function sanksi(){
		$data['sanksi'] = $this->JadwalModel->selectAll()->result_array();

		// var_dump($data['sanksi']);
		$this->load->view('layout/aheader',$this->head);
		$this->load->view('admin/sanksi',$data);
		$this->load->view('layout/afooter');
	}
	public function sanksiAct($comm,$id=0){
		if($comm == "add"){
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fsanksi');
			$this->load->view('layout/afooter');
		}else if($comm == "add2"){
			$data = $this->input->post();
			$this->JadwalModel->insert($data);
			redirect('admin/sanksi/');
		}else if($comm == "del"){
			$this->JadwalModel->delete($id);
			redirect('admin/sanksi');
		}else if($comm=="edit"){
			$data['edit']=$this->JadwalModel->selectById($id)->result_array()[0];
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fsanksiEdit', $data);
			$this->load->view('layout/afooter');
		}else if($comm=="edit2"){
			$data = $this->input->post();
			$this->JadwalModel->update($data['id'], $data);
			redirect('admin/sanksi/');
		}
	}
	public function kelas(){
		$data['kelas'] = $this->KelasModel->selectAll()->result_array();

		// var_dump($data['kelas']);
		$this->load->view('layout/aheader',$this->head);
		$this->load->view('admin/kelas',$data);
		$this->load->view('layout/afooter');
	}
	public function kelasAct($comm,$id=0){
		if($comm == "add"){
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fKelas');
			$this->load->view('layout/afooter');	//
		}else if($comm == "add2"){
			$data = $this->input->post();
			$this->KelasModel->insert($data);
			redirect('admin/kelas/');
		}else if($comm == "del"){
			$this->KelasModel->delete($id);
			redirect('admin/kelas');
		}else if($comm=="edit"){
			$data['edit']=$this->KelasModel->selectById($id)->result_array()[0];
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fKelasEdit', $data);
			$this->load->view('layout/afooter');
		}else if($comm=="edit2"){
			$data = $this->input->post();
			$this->KelasModel->update($data['id'], $data);
			redirect('admin/kelas/');
		}
	}

	public function siswa($id_kelas){
		$data['siswa'] = $this->SiswaModel->selectByIdKelas($id_kelas)->result_array();
		// var_dump($data['siswa']);
		// var_dump($this->head);
		$this->load->view('layout/aheader',$this->head);
		$this->load->view('admin/siswa',$data);
		$this->load->view('layout/afooter');
	}
	public function siswaAct($comm,$id=0){
		if($comm == "add"){
			$data['kelas'] = $this->KelasModel->selectById($id)->row_array();
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fSiswa',$data);
			$this->load->view('layout/afooter');
		}else if($comm == "add2"){
			$data = $this->input->post();
			$users['username'] = $data['nis'];
			$users['password'] = md5($data['nis']);
			$users['kategori'] = 'siswa';
			$data['id_user'] = $this->UserModel->insert($users);
			$this->SiswaModel->insert($data);
			redirect('admin/siswa/'.$data['id_kelas']);
		}else if($comm == "del"){
			$id_user = $this->SiswaModel->selectById($id)->row()->id_user;
			$id_kelas = $this->SiswaModel->selectById($id)->row()->id_kelas;
			$this->SiswaModel->delete($id);
			$this->UserModel->delete($id_user);
			redirect('admin/siswa/'.$id_kelas);
		}else if($comm == "add3"){
			$data['kelas'] = $this->KelasModel->selectById($id)->row_array();
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fSiswaExcel',$data);
			$this->load->view('layout/afooter');
		}else if($comm == "add4"){
			$config['upload_path']		= './uploads/excel/';
			$config['allowed_types']	= 'xls|xlsx';
			$config['max_size']			= 0;
			date_default_timezone_set("Asia/Bangkok");
			$config['file_name']		= "Excel_".time();
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload("excel")){
				//gagal
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else{
				try {
					$objPHPExcel = PHPExcel_IOFactory::load('uploads/excel/'.$config['file_name'].$this->upload->data('file_ext'));
				} catch(Exception $e) {
					die('Error loading file :' . $e->getMessage());
				}
				$id_kelas = $this->input->post('id_kelas');
				$dataE = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				$i=1;
				foreach($dataE as $row){
					if($i!=1 && $row['A']!=""){
						$data['nis'] = $row['A'];
						$users['username'] = $row['A'];
						$users['password'] = md5($data['nis']);
						$users['kategori'] = 'siswa';
						$data['id_user'] = $this->UserModel->insert($users);
						$data['nama'] = $row['B'];
						$data['email'] = $row['C'];
						$data['kontak'] = $row['D'];
						$data['id_kelas'] = $id_kelas;
						// var_dump($users);
						$this->SiswaModel->insert($data);
					}
					$i++;
				}
			}
			redirect('Admin/siswa/'.$id_kelas);

		}else if($comm=="edit"){
			$data['edit']=$this->SiswaModel->selectById($id)->result_array()[0];
			$data['kelas'] = $this->KelasModel->selectById($id)->row_array();
			// var_dump($data);

			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fSiswaEdit',$data);
			$this->load->view('layout/afooter');
		}else if($comm=="edit2"){
			$data = $this->input->post();
			$this->SiswaModel->update($data['id'], $data);
			$id_kelas = $this->input->post('id_kelas');
			redirect('Admin/siswa/'.$id_kelas);
		}
	}
	public function jadwal($id_kelas){
		$data['jadwal'] = $this->ViewModel->selectWhere('viewjadwalajar','*',['idk' => $id_kelas])->result_array();
		// var_dump($data['jadwal']);
		$this->load->view('layout/aheader',$this->head);
		$this->load->view('admin/jadwal',$data);
		$this->load->view('layout/afooter');
	}
	public function jadwalAct($comm,$id=0){
		if($comm == "add"){
			$data['kelas'] = $this->KelasModel->selectById($id)->row_array();
			$data['guru'] = $this->GuruModel->selectAllJoinMapel()->result_array();
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fJadwal',$data);
			$this->load->view('layout/afooter');	//
		}else if($comm == "add2"){
			$data = $this->input->post();
			$this->JadwalModel->insert($data);
			redirect('admin/jadwal/'.$data['id_kelas']);
		}else if($comm == "del"){
			$id_kelas = $this->JadwalModel->selectById($id)->row()->id_kelas;
			$this->JadwalModel->delete($id);
			redirect('admin/jadwal/'.$id_kelas);
		}else if($comm=="edit"){
			$data['edit']= $this->JadwalModel->selectById($id)->result_array()[0];
			$data['kelas'] = $this->KelasModel->selectById($id)->row_array();
			$data['guru'] = $this->GuruModel->selectAllJoinMapel()->result_array();
			// var_dump($data);

			$this->load->view('layout/aheader',$this->head);
			$this->load->view('admin/fJadwalEdit',$data);
			$this->load->view('layout/afooter');
		}else if($comm=="edit2"){
			$data = $this->input->post();
			$this->JadwalModel->update($data['id'], $data);
			$id_kelas = $this->input->post('id_kelas');
			redirect('admin/jadwal/'.$data['id_kelas']);
		}
	}

	public function pelanggaran()
	{
			$data['guru'] = $this->GuruModel->selectAllJoinguru()->result_array();
			$data['siswa_melanggar'] = $this->PelanggaranModel->selectAllSiswaMelanggar()->result_array();
			// var_dump($data['guru']);
			$this->load->view('layout/aheader',$this->head);
			$this->load->view('pelanggaran/daftar',$data);
			$this->load->view('layout/afooter');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$session = $this->session->userdata();
		if ($this->session->userdata('user_logged')===null) {
			redirect(site_url('auth'));
		};
	}
	
	public function index()
	{
		$data['user']= $this->session->userdata('user_logged');
		$data['title']="Home";
		$data['jumlah_mhs']=$this->db->count_all_results('db_mahasiswa');
		$data['jmlh_dosen']=$this->db->count_all_results('db_dosen');
		$data['jmlh_makul']=$this->db->count_all_results('db_makul');
		$data['ta']=$this->db->get_where('db_ta',['status'=>'active'])->row_array();
		if ($data['user']['level']=='admin') {
			$this->load->view('home', $data);
		}elseif($data['user']['level']=='mhs'){
			$data['mhs']=$this->db->get_where('db_mahasiswa',['nim'=>$data['user']['username']])->row_array();
			$this->load->view('mhs/index',$data);
		}else{
			redirect(site_url('nilai'));
		};
	}
	public function krs()
	{
		$mhs=$this->db->get_where('db_mahasiswa',['nim'=>$data['user']['username']])->row_array();
		$idJur=$this->db->get_where('db_jurusan',['kd_jurusan'=>$mhs['kd_jurusan']])->row_array();
		$paketKrs=$this->db->get_where('db_paket_krs',['id_jurusan'=>$idJur['id_jur'],'semester'=>$mhs['semester']])->result();
		echo "<pre>";
		print_r($paketKrs);
		echo "</pre>";
			// die();
		$data['krs']=[];
		foreach ($paketKrs as $value) {
			$data['krs'][$value->id_krs]=[
				'ta'=>$value->ta,
				'semester'=>$value->semester,
				'jurusan'=>$this->db->get_where('db_jurusan',['id_jur'=>$value->id_jurusan])->row_array()['nama_jurusan'],
				'pa'=>$this->db->get_where('db_dosen',['id_dosen'=>$value->id_pa])->row_array()['nama_dosen'],
				'item-krs'=>$this->db->get_where('db_item_krs',['id_krs'=>$value->id_krs])->result(),
			];
		};
	}
	public function cmd()
	{
		$output = shell_exec('php -f a.php');
		echo "<pre>$output</pre>";
	}
}

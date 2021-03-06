<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Ta_model');
		$user = $this->session->userdata('user_logged');
		if ($user==null) {
			redirect(site_url('auth'));
		}elseif ($user['level']!='admin') {
			$this->load->view('error/error_404');
		};
	}

	public function index()
	{
		$this->db->order_by('id','desc');
		$data['user']= $this->session->userdata('user_logged');
		$data['title']="Semester";
		if ($data['user']['level']=='admin') {
			$this->load->view('semester/index', $data);
		}else{
			echo $data['user']['level'];
		};
	}

	public function update()
	{
		// $all=$this->db->get('db_mahasiswa')->result();
		// foreach ($all as $key) {
		// 	$this->db->update('semester',[
		// 		'id_mhs'=>$key->id_mhs,
		// 		'nim'=>$key->nim,
		// 		'semester'=>1,
		// 		'created_at'=>date("Y-m-d H:i:s"),
		// 	]);
		// };
		// die();
		$data=$this->input->post();
			// $getSemester=$this->db->get_where('')
		foreach ($data['fix'] as $val) {
			$mhs=$this->db->get_where('db_mahasiswa',['id_mhs'=>$val,'status'=>'aktif'])->row_array();
			$up=[
				'semester'=>$mhs['semester']+1,
			];
			$this->db->where('id_mhs',$val);
			$this->db->update('db_mahasiswa', $up);
		};
	}

	public function updateSemua()
	{
		$data=$this->db->get('db_mahasiswa')->result();
		$data_fix=[];
		// print_r($data);
		foreach ($data as $key => $value) {
			$p=array(
				'id_mhs'=>$value->id_mhs,
				'semester'=>$value->semester+1,
			);
			array_push($data_fix, $p);
			// echo $key;
		};
		// print_r($data_fix);
		$this->db->update_batch('db_mahasiswa', $data_fix, 'id_mhs');
	}

	public function getAll()
	{
		$search = $_POST['search']['value'];
		$limit = $_POST['length'];
		$start = $_POST['start'];
		$order_index = $_POST['order'][0]['column'];
		$order_field = $_POST['columns'][$order_index]['data'];
		$order_ascdesc = $_POST['order'][0]['dir'];
		$sql_total = $this->Ta_model->count_all();
		$sql_data = $this->Ta_model->filter($search, $limit, $start, $order_field, $order_ascdesc);
		$sql_filter = $this->Ta_model->count_filter($search);
		$callback = array(
			'draw'=>$_POST['draw'],
			'recordsTotal'=>$sql_total,
			'recordsFiltered'=>$sql_filter,
			'data'=>$sql_data
		);
		header('Content-Type: application/json');
		echo json_encode($callback);
	}

	public function store()
	{
		$data=[
			'ta'=>$this->input->post('ta',true),
		];
		$this->db->insert('db_ta', $data);
		$this->session->set_flashdata('message', 'Data berhasil di input !');
		redirect(site_url('ta'));
	}

	public function edit($id)
	{
		$data['semester']=$this->db->get_where('db_mahasiswa',['id_mhs'=>$id])->row_array();
		$this->load->view('semester/edit',$data);
	}
	public function det()
	{
		// post edit
		$up=[
			'semester'=>$this->input->post()['semester'],
		];
		$this->db->where('id_mhs',$this->input->post()['id_mhs']);
		$this->db->update('db_mahasiswa', $up);
		$this->session->set_flashdata('message', 'Data berhasil di update !');
		redirect(site_url('semester'));
	}

}
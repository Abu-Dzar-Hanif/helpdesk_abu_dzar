<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('halaman_model');
    }
	public function index()
	{
        $this->load->view('awal/header');
        $this->load->view('index');
        $this->load->view('awal/footer');
	}

    public function register()
    {
        $this->load->helper('form');
        $this->load->library('form_validation'); 
        $this->form_validation->set_rules('kd', 'kode', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('gender', 'pilih gender', 'required');
        $this->form_validation->set_rules('notelp', 'no telpon', 'required');
        $this->form_validation->set_rules('divisi', 'pilih divisi', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('awal/header');
            $data['code'] = $this->halaman_model->auto_code();
            $data['divisi'] = $this->halaman_model->get_divisi();
            $this->load->view('register',$data);
            $this->load->view('awal/footer');
        }else{
            $this->halaman_model->store_karyawan();
            $this->halaman_model->store_user();
            redirect('login');
        }
    }

    public function login()
    {
        $this->load->helper('form');
        $this->load->view('awal/header');
        $this->load->view('login');
        $this->load->view('awal/footer');
    }
    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->halaman_model->cek_login($username, $password);
        if($cek > 0){
            $data_session = array(
                'kd_karyawan' => $cek['kd_karyawan'],
                'username' => $cek['username'],
                'level' => $cek['level']  
            );
            $this->session->set_userdata($data_session);
            if($_SESSION['level'] == 'admin'){
                redirect('admin');
            }elseif($_SESSION['level'] == 'user'){
                redirect('user');
            }
        }else{
            $this->session->set_flashdata('sukses','Terimakasih, Anda berhasil logout');
            redirect('login');
        }
    }
    public function logout()
    {
        $array_items = array('kd_karyawan', 'username','level');
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect('');
    }
}

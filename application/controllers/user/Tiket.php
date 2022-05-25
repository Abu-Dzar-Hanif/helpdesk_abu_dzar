<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user/tiket_model');
    }
    public function create()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $kd = $_SESSION['kd_karyawan'];
        $data['errors'] = '';
        $data['cek'] = $this->tiket_model->get_karyawan($kd);
        $data['code'] = $this->tiket_model->auto_code();
        $this->load->view('user/add_tiket',$data);
    }
    public function store()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation'); 
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto'))
        {
            $data['errors'] = $this->upload->display_errors();
            $kd = $_SESSION['kd_karyawan'];
            $data['cek'] = $this->tiket_model->get_karyawan($kd);
            $data['code'] = $this->tiket_model->auto_code();
            $this->load->view('user/add_tiket',$data);
        }else{
            $this->tiket_model->store_tiket();
            redirect('user');
        }
    }
    public function tiket_waiting()
    {
        $kd = $_SESSION['kd_karyawan'];
        $data['tiket'] = $this->tiket_model->tiket_waiting($kd);
        $this->load->view('user/tiket_waiting',$data);
    }
    public function detail_tiket($id)
    {
        $kd = $_SESSION['kd_karyawan'];
        $data['detail'] = $this->tiket_model->view_tiket($id, $kd);
        $this->load->view('user/detail_tiket',$data);
    }
    public function tiket_op()
    {
        $kd = $_SESSION['kd_karyawan'];
        $data['tiket'] = $this->tiket_model->tiket_op($kd);
        $this->load->view('user/tiket_onprocess',$data);
    }
    public function tiket_done()
    {
        $kd = $_SESSION['kd_karyawan'];
        $data['tiket'] = $this->tiket_model->tiket_done($kd);
        $this->load->view('user/tiket_done',$data);
    }
}

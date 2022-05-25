<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('admin/tiket_model');
    }
    
    public function index()
    {
        $data['tiket'] = $this->tiket_model->get_tiket();
        $this->load->view('admin/tiket',$data);
    }
    
    public function edit_tiket($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('status', 'status', 'required');
        if($this->form_validation->run() === FALSE){
            $data['edit'] = $this->tiket_model->edit_tiket($id);
            $this->load->view('admin/update_tiket',$data);
        }else{
            $this->tiket_model->update_tiket($id);
            redirect('admin/tiket');
        }
    }
    public function detail_tiket($id)
    {
        $data['detail'] = $this->tiket_model->view_tiket($id);
        $this->load->view('admin/detail_tiket',$data);
    }
}

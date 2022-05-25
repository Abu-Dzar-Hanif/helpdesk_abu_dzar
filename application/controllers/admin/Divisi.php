<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('admin/divisi_model');
    }
    public function index()
    {
        //$this->load->library('pagination');
        $data['divisi'] = $this->divisi_model->get_data();
        $data['row'] = $this->divisi_model->get_row();
        //$config['base_url'] = 'http://localhost/raw_helpdesk/index.php/admin/divisi/';
        //$config['total_rows'] = 5;
        //$config['per_page'] = 2;
        //$this->pagination->initialize($config);
        $this->load->view('admin/divisi',$data);
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation'); 
        $this->form_validation->set_rules('kd_divisi', 'kd_divisi', 'required');
        $this->form_validation->set_rules('nama_divisi', 'nama_divisi', 'required');
        $data['code'] = $this->divisi_model->auto_code();
        if($this->form_validation->run() == false){
            $this->load->view('admin/add_divisi',$data);
        }else{
            $this->divisi_model->store();
            redirect('admin/divisi');
        }
    }
    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_divisi', 'nama_divisi', 'required');
        if($this->form_validation->run() == false){
            $data['update'] = $this->divisi_model->get_id($id);
            $this->load->view('admin/update_divisi',$data);
        }else{
            $this->divisi_model->update($id);
            redirect('admin/divisi');
        }
    }
    public function delete($id)
    {
        $this->divisi_model->delete($id);
        redirect('admin/divisi');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('admin/laporan_model');
    }
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation'); 
        $this->form_validation->set_rules('tgl1', 'tanggal awal', 'required');
        $this->form_validation->set_rules('tgl2', 'tanggal akhir', 'required');
        $this->load->view('admin/laporan');
    }
    public function laporan()
    {
        $_SESSION['tanggal1'] = $this->input->post('tgl1');
        $_SESSION['tanggal2'] = $this->input->post('tgl2');
        $tgl1 = $_SESSION['tanggal1'];
        $tgl2 = $_SESSION['tanggal2'];
        $data['laporan'] = $this->laporan_model->laporan($tgl1, $tgl2);
        $this->load->view('admin/laporan_tiket',$data);
    }
    public function export_excel()
    {
        $tgl1 = $_SESSION['tanggal1'];
        $tgl2 = $_SESSION['tanggal2'];
        $data['laporan'] = $this->laporan_model->laporan($tgl1, $tgl2);
        $this->load->view('admin/export_excel',$data);
    }
}

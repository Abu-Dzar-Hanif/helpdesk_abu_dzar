<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
    {
        $this->load->database();
        $this->load->model('admin/dashboard_model');
        $data['waiting'] = $this->dashboard_model->count_waiting();
        $data['ops'] = $this->dashboard_model->count_op();
        $data['don'] = $this->dashboard_model->count_done();
        $this->load->view('admin/index', $data);
    }
}

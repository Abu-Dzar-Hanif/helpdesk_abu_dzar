<?php
class halaman_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function auto_code()
    {
        $this->db->select_max('kd_karyawan');
        $query = $this->db->get('karyawan');
        return $query->row_array();
    }
    public function get_divisi()
    {
        $query = $this->db->get('divisi');
        return $query->result_array();
    }
    public function store_karyawan()
    {
        $kd = $this->input->post('kd');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $notelp = $this->input->post('notelp');
        $divisi = $this->input->post('divisi');
        $data =array(
            'kd_karyawan' => $kd,
            'nama' => $nama,
            'gender' => $gender,
            'no_telpon' => $notelp,
            'kd_divisi' => $divisi
        );
        return $this->db->insert('karyawan',$data);
    }
    public function store_user()
    {
        $kd = $this->input->post('kd');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = 'user';
        $data =array(
            'kd_karyawan' => $kd,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );
        return $this->db->insert('user',$data);
    }
    public function cek_login($username, $password)
    {
        $query = $this->db->get_where('user',array('username' => $username,
        'password' => $password));
        return $query->row_array();
    }
}
?>
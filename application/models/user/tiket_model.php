<?php
class tiket_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function auto_code()
    {
        $thn = date('Y');
        $bln = date('m');
        $query = $this->db->query("SELECT max(kd_tiket) as max_code FROM tiket WHERE month(tgl_laporan)='$bln' and year(tgl_laporan)='$thn'");
        return $query->row_array();
    }
    public function get_karyawan($kd)
    {
        $sql = "SELECT * FROM karyawan INNER JOIN user ON karyawan.kd_karyawan = user.kd_karyawan
        INNER JOIN divisi ON karyawan.kd_divisi = divisi.kd_divisi WHERE karyawan.kd_karyawan = ?";
        $query = $this->db->query($sql, array($kd));
        return $query->row_array();
    }
    public function store_tiket()
    {
        $kd = $this->input->post('kd_tiket');
        $kd_karyawan = $this->input->post('kd');
        $keluhan = $this->input->post('keluhan');
        $foto = $this->upload->data('file_name');
        $tgl = $this->input->post('tanggal');
        $tanggal = date("Y-m-d H:i:s", strtotime($tgl));
        $sts ='Waiting';
        $unit = $this->input->post('nama_user');
        $data =array(
            'kd_tiket' => $kd,
            'kd_karyawan' => $kd_karyawan,
            'keluhan' => $keluhan,
            'foto' => $foto,
            'tgl_buat' => $tanggal,
            'status' => $sts,
            'unit' => $unit,
            'tgl_laporan' => $tanggal,
        );
        return $this->db->insert('tiket',$data);
    }
    public function tiket_waiting($kd)
    {
        $query = $this->db->get_where('tiket',array('kd_karyawan' => $kd,
        'status' => 'Waiting'));
        return $query->result_array();
    }
    public function view_tiket($id)
    {
        $sql = "SELECT * FROM tiket INNER JOIN karyawan ON tiket.kd_karyawan = karyawan.kd_karyawan
        INNER JOIN divisi ON karyawan.kd_divisi = divisi.kd_divisi WHERE tiket.kd_tiket = ? AND status = ? OR status = ? OR status = ?";
        $query = $this->db->query($sql, array($id, 'Waiting', 'On process', 'Done'));
        return $query->row_array();
    }
    public function tiket_op($kd)
    {
        $query = $this->db->get_where('tiket',array('kd_karyawan' => $kd,
        'status' => 'On process'));
        return $query->result_array();
    }
    public function tiket_done($kd)
    {
        $query = $this->db->get_where('tiket',array('kd_karyawan' => $kd,
        'status' => 'Done'));
        return $query->result_array();
    }
    
}
?>
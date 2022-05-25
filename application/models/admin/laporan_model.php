<?php
class laporan_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function laporan($tgl1, $tgl2)
    {
        $sql = "SELECT * FROM tiket INNER JOIN karyawan ON tiket.kd_karyawan = karyawan.kd_karyawan
        INNER JOIN divisi ON karyawan.kd_divisi = divisi.kd_divisi WHERE tgl_laporan BETWEEN ? AND ?";
        $query = $this->db->query($sql, array($tgl1, $tgl2));
        return $query->result_array();
    }
    
}
?>
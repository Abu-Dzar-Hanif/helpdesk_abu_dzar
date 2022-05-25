<?php
class tiket_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_tiket()
    {
        $query = $this->db->get('tiket');
        return $query->result_array();
    }
    
    public function edit_tiket($id)
    {
        $query = $this->db->get_where('tiket',array('kd_tiket' => $id));
        return $query->row_array();
    }

    public function update_tiket($id)
    {
        $sts = $this->input->post('status');
        if($sts == 'Waiting'){
            $petugas = $this->input->post('petugas');
            $unit = $this->input->post('unit');
            $data =array(
                'status' => $sts,
                'petugas' => $petugas,
                'unit' => $unit
            );
        }else{
            $tgl_S = $this->input->post('tgl_s');
            $tanggal = date("Y-m-d H:i:s", strtotime($tgl_S));
            $data =array(
                'status' => $sts,
                'tgl_selesai' => $tanggal
            );
        }
        $this->db->where('kd_tiket', $id);
        return $this->db->update('tiket',$data);
    }

    public function view_tiket($id)
    {
        $sql = "SELECT * FROM tiket INNER JOIN karyawan ON tiket.kd_karyawan = karyawan.kd_karyawan
        INNER JOIN divisi ON karyawan.kd_divisi = divisi.kd_divisi
        WHERE tiket.kd_tiket=?";
        $query = $this->db->query($sql, array($id));
        return $query->row_array();
    }
    
}
?>
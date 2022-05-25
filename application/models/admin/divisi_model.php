<?php
class divisi_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function get_data()
    {
        $query = $this->db->get('divisi');
        return $query->result_array();
    }
    public function get_row()
    {
        $query = $this->db->query('SELECT * FROM divisi');
        return $query->num_rows();
    }
    public function auto_code()
    {
        $this->db->select_max('kd_divisi');
        $query = $this->db->get('divisi');
        return $query->row_array();
    }
    public function store()
    {
        $kd = $this->input->post('kd_divisi');
        $nama = $this->input->post('nama_divisi');
        $data =array(
            'kd_divisi' => $kd,
            'nama_div' => $nama
        );
        return $this->db->insert('divisi',$data);
    }
    public function get_id($id = FALSE)
    {
        $query = $this->db->get_where('divisi', array('kd_divisi' => $id));
        return $query->row_array();
    }
    public function update($id)
    {
        $nama = $this->input->post('nama_divisi');
        $data =array(
            'nama_div' => $nama
        );
        $this->db->where('kd_divisi', $id);
        return $this->db->update('divisi',$data);
    }
    public function delete($id)
    {
        return $this->db->delete('divisi',array('kd_divisi' => $id));
    }
}
?>
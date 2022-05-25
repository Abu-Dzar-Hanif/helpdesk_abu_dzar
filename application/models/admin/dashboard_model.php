<?php
class dashboard_model extends CI_Model{
    public function count_waiting()
    {
        $this->db->select("(SELECT COUNT(kd_tiket) FROM tiket WHERE status='Waiting')AS wait", FALSE);
        $query = $this->db->get('tiket');
        return $query->row_array();
    }
    public function count_op()
    {
        $this->db->select("(SELECT COUNT(kd_tiket) FROM tiket WHERE status='On process')AS op", FALSE);
        $query = $this->db->get('tiket');
        return $query->row_array();
    }
    public function count_done()
    {
        $this->db->select("(SELECT COUNT(kd_tiket) FROM tiket WHERE status='Done')AS done", FALSE);
        $query = $this->db->get('tiket');
        return $query->row_array();
    }
}
?>
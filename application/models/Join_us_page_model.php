<?php


class Join_us_page_model extends CI_Model {

    public function get_join_us_page_all()
    {
        $query = $this->db->get('join_us_page');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_join_us_page_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('join_us_page');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_join_us_page($data)
    {
        $this->db->insert('join_us_page', $data);

        return $this->db->insert_id();
    }

    public function update_join_us_page_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('join_us_page', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_join_us_page_by_id($id)
    {
        return $this->db->where('id', $id)->delete('join_us_page');
    }
}

<?php


class About_page_model extends CI_Model {

    public function get_about_page_all()
    {
        $query = $this->db->get('about_page');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_about_page_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('about_page');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_about_page($data)
    {
        $this->db->insert('about_page', $data);

        return $this->db->insert_id();
    }

    public function update_about_page_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('about_page', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_about_page_by_id($id)
    {
        return $this->db->where('id', $id)->delete('about_page');
    }
}

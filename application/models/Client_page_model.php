<?php


class Client_page_model extends CI_Model {

    public function get_client_page_all()
    {
        $query = $this->db->get('client_page');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_client_page_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('client_page');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_client_page($data)
    {
        $this->db->insert('client_page', $data);

        return $this->db->insert_id();
    }

    public function update_client_page_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('client_page', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_client_page_by_id($id)
    {
        return $this->db->where('id', $id)->delete('client_page');
    }
}

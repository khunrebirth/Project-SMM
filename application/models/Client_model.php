<?php


class Client_model extends CI_Model {

    public function get_client_all()
    {
        $query = $this->db->get('clients');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_client_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('clients');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_client($data)
    {
        $this->db->insert('clients', $data);

        return $this->db->insert_id();
    }

    public function update_client_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('clients', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_client_by_id($id)
    {
        return $this->db->where('id', $id)->delete('clients');
    }
}

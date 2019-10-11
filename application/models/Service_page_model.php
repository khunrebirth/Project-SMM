<?php


class Service_page_model extends CI_Model {

    public function get_service_page_all()
    {
        $query = $this->db->get('service_page');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_service_page_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('service_page');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_service_page($data)
    {
        $this->db->insert('service_page', $data);

        return $this->db->insert_id();
    }

    public function update_service_page_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('service_page', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_service_page_by_id($id)
    {
        return $this->db->where('id', $id)->delete('service_page');
    }
}

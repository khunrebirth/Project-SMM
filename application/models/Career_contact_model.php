<?php


class Career_contact_model extends CI_Model {

    public function get_contact_all()
    {
        $query = $this->db->get('career_contacts');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_contact_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('career_contacts');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_contact($data)
    {
        $this->db->insert('career_contacts', $data);

        return $this->db->insert_id();
    }

    public function update_contact_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('career_contacts', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_contact_by_id($id)
    {
        return $this->db->where('id', $id)->delete('career_contacts');
    }
}

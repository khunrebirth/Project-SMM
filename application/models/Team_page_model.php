<?php


class Team_page_model extends CI_Model {

    public function get_team_page_all()
    {
        $query = $this->db->get('team_page');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_team_page_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('team_page');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_team_page($data)
    {
        $this->db->insert('team_page', $data);

        return $this->db->insert_id();
    }

    public function update_team_page_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('team_page', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_team_page_by_id($id)
    {
        return $this->db->where('id', $id)->delete('team_page');
    }
}

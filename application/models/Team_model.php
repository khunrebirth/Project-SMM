<?php


class Team_model extends CI_Model {

    public function get_team_all()
    {
        $teams = $this->db->get('teams');

        return $teams->num_rows() > 0 ? $teams->result() : false;
    }
}
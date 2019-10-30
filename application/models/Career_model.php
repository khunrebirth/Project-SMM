<?php


class Career_model extends CI_Model {

    public function get_career_all()
    {
        $query = $this->db->order_by('sort', 'asc')->get('careers');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

	public function get_career_by_id($id)
	{
		$query = $this->db->where('id', $id)->get('careers');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_career_by_limit($limit)
	{
		$query = $this->db->order_by('sort', 'asc')->limit($limit)->get('careers');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_career($data)
    {
        $this->db->insert('careers', $data);

        return $this->db->insert_id();
    }

    public function update_career_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('careers', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_career_by_id($id)
    {
        return $this->db->where('id', $id)->delete('careers');
    }
}

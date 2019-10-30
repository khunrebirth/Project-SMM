<?php


class Career_gallery_model extends CI_Model {

    public function get_career_gallery_all()
    {
		$query = $this->db->get('career_galleries');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_career_gallery_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('career_galleries');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_career_gallery_by_career_id($career_id)
	{
		$query = $this->db->where('career_id', $career_id)->order_by('sort', 'asc')->get('career_galleries');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_career_gallery($data)
    {
        $this->db->insert('career_galleries', $data);

        return $this->db->insert_id();
    }

    public function update_career_gallery_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('career_galleries', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_career_gallery_by_id($id)
    {
        return $this->db->where('id', $id)->delete('career_galleries');
    }
}

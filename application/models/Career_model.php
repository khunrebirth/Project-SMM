<?php


class Career_model extends CI_Model {

    public function get_career_all()
    {
		$sql = "
			SELECT 
			careers.id,
			careers.sort,
			careers.img_cover,
			careers.img_cover_moblie,
			careers.title,
			careers.slug,
			careers.comment,
			careers.type,
			careers.num,
			careers.content,
            careers.created_at,
            (SELECT COUNT(*) FROM career_galleries WHERE careers.id = career_galleries.career_id) as counter
			FROM careers
			ORDER BY careers.sort ASC
        ";

		$query = $this->db->query($sql);

		return $query->num_rows() > 0 ? $query->result() : [];
    }

	public function get_career_by_id($id)
	{
		$query = $this->db->where('id', $id)->get('careers');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_career_by_slug_th($slug)
	{
		$query = $this->db->where('slug_th', $slug)->get('careers');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_career_by_slug_en($slug)
	{
		$query = $this->db->where('slug_en', $slug)->get('careers');

		return $query->num_rows() > 0 ? $query->row() : false;
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

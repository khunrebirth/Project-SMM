<?php


class Tag_model extends CI_Model {

    public function get_tag_all()
    {
        $query = $this->db->order_by('sort', 'asc')->get('tags');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

	public function get_tag_by_id($id)
	{
		$query = $this->db->where('id', $id)->get('tags');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_tag_by_slug_th($slug)
	{
		$query = $this->db->where('slug_th', $slug)->get('tags');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_tag_by_slug_en($slug)
	{
		$query = $this->db->where('slug_en', $slug)->get('tags');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_tag_by_limit($limit)
	{
		$query = $this->db->order_by('sort', 'asc')->limit($limit)->get('tags');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_tag($data)
    {
        $this->db->insert('tags', $data);

        return $this->db->insert_id();
    }

    public function update_tag_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('tags', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_tag_by_id($id)
    {
        return $this->db->where('id', $id)->delete('tags');
    }
}

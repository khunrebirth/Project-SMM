<?php


class Blog_model extends CI_Model {

    public function get_blog_all()
    {
        $query = $this->db->get('blogs');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_blog_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('blogs');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_blog_by_category_blog_id($category_blog_id)
	{
		$query = $this->db->where('category_blog_id', $category_blog_id)->get('blogs');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_blog($data)
    {
        $this->db->insert('blogs', $data);

        return $this->db->insert_id();
    }

    public function update_blog_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('blogs', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_blog_by_id($id)
    {
        return $this->db->where('id', $id)->delete('blogs');
    }
}

<?php


class Blog_category_model extends CI_Model {

    public function get_blog_category_all()
    {
		$sql = "
			SELECT 
			blog_categories.id,
			blog_categories.status,
			blog_categories.sort,
			blog_categories.icon,
			blog_categories.title,
			blog_categories.slug,
            blog_categories.created_at,
            (SELECT COUNT(*) FROM blogs WHERE blog_categories.id = blogs.category_blog_id) as counter
			FROM blog_categories
			ORDER BY blog_categories.sort ASC
        ";

		$query = $this->db->query($sql);

		return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_blog_category_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('blog_categories');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_blog_by_slug_th($slug)
	{
		$query = $this->db->where('slug_th', $slug)->get('blog_categories');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_blog_by_slug_en($slug)
	{
		$query = $this->db->where('slug_en', $slug)->get('blog_categories');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_blog_category_active()
	{
		$query = $this->db->where('status', 'Y')->get('blog_categories');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_blog_category($data)
    {
        $this->db->insert('blog_categories', $data);

        return $this->db->insert_id();
    }

    public function update_blog_category_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('blog_categories', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_blog_category_by_id($id)
    {
        return $this->db->where('id', $id)->delete('blog_categories');
    }
}

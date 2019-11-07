<?php


class Blog_model extends CI_Model {

    public function get_blog_all()
    {
        $query = $this->db->get('blogs');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_blog_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('blogs');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_blog_by_slug_th($slug)
	{
		$query = $this->db->where('slug_th', $slug)->get('blogs');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_blog_by_slug_en($slug)
	{
		$query = $this->db->where('slug_en', $slug)->get('blogs');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_blog_by_category_blog_id($category_blog_id)
	{
		$query = $this->db
				->select('blogs.*, blog_categories.slug as blog_category_slug')
				->from('blogs')
				->join('blog_categories', 'blog_categories.id = blogs.category_blog_id')
				->where('blogs.category_blog_id', $category_blog_id)
				->get();

		return $query->num_rows() > 0 ? $query->result() : [];
	}

	public function get_last_blog($limit)
	{
		$query = $this->db
			->select('blogs.*, blog_categories.slug as blog_category_slug')
			->from('blogs')
			->join('blog_categories', 'blog_categories.id = blogs.category_blog_id')
			->limit($limit)
			->order_by('created_at', 'desc')
			->get();

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

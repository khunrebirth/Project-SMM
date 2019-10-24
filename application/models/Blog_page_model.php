<?php


class Blog_page_model extends CI_Model {

    public function get_blog_page_all()
    {
        $query = $this->db->get('blog_page');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_blog_page_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('blog_page');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_blog_page($data)
    {
        $this->db->insert('blog_page', $data);

        return $this->db->insert_id();
    }

    public function update_blog_page_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('blog_page', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_blog_page_by_id($id)
    {
        return $this->db->where('id', $id)->delete('blog_page');
    }
}

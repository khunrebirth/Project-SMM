<?php


class Top_client_model extends CI_Model {

    public function get_top_client_all()
    {
        $query = $this->db->order_by('sort', 'asc')->get('top_clients');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

	public function get_client_home_custom($ignore)
	{
		$query = $this->db->where_not_in('id', $ignore)->order_by('sort', 'asc')->get('top_clients');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function get_top_client_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('top_clients');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_top_client_by_limit($limit)
	{
		$query = $this->db->order_by('sort', 'asc')->limit($limit)->get('top_clients');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

	public function get_top_client_by_category_id($category_id)
	{
		$query = $this->db->where('category_id', $category_id)->order_by('sort', 'asc')->get('top_clients');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_top_client($data)
    {
        $this->db->insert('top_clients', $data);

        return $this->db->insert_id();
    }

    public function update_top_client_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('top_clients', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_top_client_by_id($id)
    {
        return $this->db->where('id', $id)->delete('top_clients');
    }
}

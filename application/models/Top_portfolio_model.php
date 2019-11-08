<?php


class Top_portfolio_model extends CI_Model {

    public function get_top_portfolio_all()
    {
        $query = $this->db->order_by('sort', 'asc')->get('top_portfolios');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_top_portfolio_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('top_portfolios');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_top_portfolio_by_category_id($category_id)
	{
		$query = $this->db->where('category_id', $category_id)->order_by('sort', 'asc')->get('top_portfolios');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

	public function get_top_portfolio_by_limit($limit)
	{
		$query = $this->db->order_by('sort', 'asc')->limit($limit)->get('top_portfolios');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_portfolio($data)
    {
        $this->db->insert('top_portfolios', $data);

        return $this->db->insert_id();
    }

    public function update_top_portfolio_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('top_portfolios', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_top_portfolio_by_id($id)
    {
        return $this->db->where('id', $id)->delete('top_portfolios');
    }
}

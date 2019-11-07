<?php


class Portfolio_category_model extends CI_Model {

    public function get_portfolio_category_all()
    {
		$sql = "
			SELECT 
			portfolio_categories.id,
			portfolio_categories.sort,
			portfolio_categories.icon,
			portfolio_categories.title,
            portfolio_categories.created_at,
            (SELECT COUNT(*) FROM portfolios WHERE portfolio_categories.id = portfolios.category_id) as counter
			FROM portfolio_categories
			ORDER BY portfolio_categories.sort ASC
        ";

		$query = $this->db->query($sql);

		return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_portfolio_category_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('portfolio_categories');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_portfolio_category($data)
    {
        $this->db->insert('portfolio_categories', $data);

        return $this->db->insert_id();
    }

    public function update_portfolio_category_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('portfolio_categories', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_portfolio_category_by_id($id)
    {
        return $this->db->where('id', $id)->delete('portfolio_categories');
    }
}

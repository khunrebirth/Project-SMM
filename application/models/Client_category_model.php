<?php


class Client_category_model extends CI_Model {

    public function get_client_category_all()
    {
        $sql = "
			SELECT  client_categories.id,
					client_categories.title, 
					client_categories.created_at,
					COUNT(clients.id) as counter 
			FROM client_categories
			LEFT JOIN clients ON client_categories.id = clients.category_id
			GROUP BY client_categories.id
        ";

        $query = $this->db->query($sql);

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_client_category_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('client_categories');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_client_category($data)
    {
        $this->db->insert('client_categories', $data);

        return $this->db->insert_id();
    }

    public function update_client_category_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('client_categories', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_client_category_by_id($id)
    {
        return $this->db->where('id', $id)->delete('client_categories');
    }
}

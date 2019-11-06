<?php


class Service_client_model extends CI_Model {

    public function get_service_client_all()
    {
		$query = $this->db->get('service_clients');

		return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_service_client_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('service_clients');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_service_client_by_service_id($service_id)
	{
		$query = $this->db->where('service_id', $service_id)->order_by('sort', 'asc')->get('service_clients');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_service_client($data)
    {
        $this->db->insert('service_clients', $data);

        return $this->db->insert_id();
    }

    public function update_service_client_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('service_clients', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_service_client_by_id($id)
    {
        return $this->db->where('id', $id)->delete('service_clients');
    }
}

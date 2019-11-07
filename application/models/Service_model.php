<?php


class Service_model extends CI_Model {

    public function get_service_all()
    {
		$sql = "
			SELECT  services.id,
					services.sort,
					services.title,
					services.icon,
					services.img_on_navbar,
					services.slug,
            		services.created_at,
            		(SELECT COUNT(*) FROM service_ports WHERE services.id = service_ports.service_id) as counter_port,
            		(SELECT COUNT(*) FROM service_clients WHERE services.id = service_clients.service_id) as counter_client
			FROM services
			ORDER BY sort ASC
        ";

		$query = $this->db->query($sql);

		return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_service_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('services');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

	public function get_service_by_slug_th($slug)
	{
		$query = $this->db->where('slug_th', $slug)->get('services');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_service_by_slug_en($slug)
	{
		$query = $this->db->where('slug_en', $slug)->get('services');

		return $query->num_rows() > 0 ? $query->row() : false;
	}

	public function get_service_by_custom($id)
	{
		$query = $this->db->where('id !=', $id)->get('services');

		return $query->num_rows() > 0 ? $query->result() : [];
	}

    public function insert_service($data)
    {
        $this->db->insert('services', $data);

        return $this->db->insert_id();
    }

    public function update_service_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('services', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_service_by_id($id)
    {
        return $this->db->where('id', $id)->delete('services');
    }
}

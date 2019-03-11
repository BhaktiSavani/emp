 public function insertData()
{
    $data = array(
            'user_name' => $this->input->post('username'),
            'mobile' =>$this->input->post('mobile_number')
        );
    $this->db->insert('users', $data);
        if($this->db->affected_rows()>0){
            return $this->db->insert_id();
        }else{
            return false;
        }
}

public function get_product_details($id)
{   
    $this->db->where('id', $id);
    $this->db->select('id, user_name, mobile');
    $this->db->from('users');
    $query = $this->db->get();
    if($query->num_rows() == 1){
        return $query->row();

    }else{
        return false;
    }

}
public function save_qr($id, $image_name)
{
    $this->db->where('id', $id);
    $this->db->set('qrcode_name', $image_name);
    $this->db->update('users');
}
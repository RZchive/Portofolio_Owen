<?php
class M_admin extends CI_Model
{
    //Data_user
    function tambah_user()
    {
        $data = [
            "Nama" => $this->input->post('Nama',true),
            "Email" => $this->input->post('email',true),
            "Image" =>'-',
            "Password" => password_hash($this->input->post('Password'), PASSWORD_DEFAULT),
            "Role_ID" => 1    
        ];
        $this->db->insert('user', $data);
    }

}
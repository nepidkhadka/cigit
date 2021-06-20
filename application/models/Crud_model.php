<?php 
                
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Crud_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insert($data)
    {
     return $this->db->set($data)
                    ->insert('users');
    }

    public function select()
    {
        return $this->db->select('*')
                        ->from('users')
                        ->get();
    }

    public function update($data)
    {
        return $this->db->set($data)
                        ->where('id',$data['id'])
                        ->update('users');
    }

    public function selectByID($id)
    {
        return $this->db->select('*')
                ->from('users')
                ->where('id',$id)
                ->get()
                ->row();
    }

    public function delete($id)
    {
        return $this->db->where('id',$id)
                        ->delete('users');
    }
}

/* End of file Crud_model.php and path /application/models/crud_model.php */
                    

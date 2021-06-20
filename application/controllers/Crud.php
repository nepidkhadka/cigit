<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('/Crud_model', 'crud');
    }

    public function home()
    {
        $this->load->view('home/index');
    }


    public function insert()
    {
        if(isset($_POST['submitdata']))
        {
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            if ($this->form_validation->run() == TRUE)
            {
               $insertdata['name']=$this->input->post('name');
               $insertdata['email']=$this->input->post('email');
               $insertdata['address']=$this->input->post('address');
               
               $result=$this->crud->insert($insertdata);
               if($result)
                   {
                    redirect('/insert');
                   }
                   else
                   {
                       echo"Data not inserted something wrong";
                       exit();
                   }
                }
        }
        $this->load->view('home/insert');
    }

    public function view()
    {
        $data['users']=$this->crud->select();
        $this->load->view('home/viewdata',$data);   
    }

    public function update($id=null)
    {
        if(isset($_POST['updatedata']))
        {
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('id', 'id', 'required');
            if ($this->form_validation->run() == TRUE)
            {
                $updated['id']=$this->input->post('id');
                $updated['name']=$this->input->post('name');
                $updated['address']=$this->input->post('address');
                $updated['email']=$this->input->post('email');

                $result=$this->crud->update($updated);
                if($result)
                {
                    echo "Data updated sucessfully";
                        redirect('/view');
                }
                else
                {
                    echo"Data not updated something wrong";
                    exit();
                }

            }

        }
        $data['users']=$this->crud->selectById($id);
        $this->load->view('home/updatedata',$data);  
    }

    public function delete($id)
    {
        $this->crud->delete($id);
        redirect('view');
    }
}


/* End of file Crud.php and path /application/controllers/crud.php */


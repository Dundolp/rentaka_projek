<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index(){
        $this->load->model('users_model','users');

        $data['list_users']=$this->users->getAll();

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('users/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('users_model','users');
        $data['usr']=$this->users->findById($_id);

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('users/view',$data);
        $this->load->view('layout/footer');
        //die("NIM ".$_nim);
    }

    public function create(){
        $data['judul']='Form Kelola users';
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('users/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("users_model","users");

        $_id = $this->input->post('id');
        $_username= $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');

        $_idedit = $this->input->post('idedit');//hidden field

        $data_usr[]=$_id;// ? 1
        $data_usr[]=$_username;// ? 2
        $data_usr[]=$_password;// ? 3
        $data_usr[]=$_email;// ? 4
        $data_usr[]=$_created_at;// ? 5
        $data_usr[]=$_last_login;// ? 6
        $data_usr[]=$_status;// ? 7
        $data_usr[]=$_role;// ? 8


        if(isset($_idedit)){
            //update data lama
            $data_usr[]=$_idedit; // ? 8
            $this->users->update($data_usr);  
        }else{ // save data baru
            // panggi fungsi save di model 
            $this->users->save($data_usr);   
        }
        
        redirect(base_url().'index.php/users/view?id='.$_id, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("users_model","users");
        $usredit = $this->users->findById($_id);

        $data['judul']='Form Update users';
        $data['usredit']=$usredit;
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('users/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("users_model","users");
        $this->users->delete($_id);
        redirect(base_url().'index.php/users/index', 'refresh');
    }
    
}
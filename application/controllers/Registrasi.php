<?php 
class Registrasi extends CI_Controller{
    public function index(){
        $this->load->view('registrasi/index');
    }
    public function save(){
        // akses ke model registrasi
        $this->load->model('users_model','regis'); //1
        $_username = $this->input->post('username');
        $_password = $this->input->post('pw');
        $_email = $this->input->post('email');
        //$created_at = $this->input->post('created_at');
        //$last_login = $this->input->post('last_login');
        //$status = $this->input->post('status');
        //$_role = $this->input->post('role');

        $data_registrasi[] = $_username; //2
        $data_registrasi[] = $_password;
        $data_registrasi[] = $_email; 
        //$data_registrasi['created_at'] = $created_at;
        //$data_registrasi['last_login'] = $last_login;
        //$data_registrasi['status'] = $status;
        //$data_registrasi['role'] = $_role;

        if((!empty($_idedit))){ //update
            //$data_registrasi['id'] = $_idedit;
            $this->regis->update($data_registrasi);
        } else{
            // data baru
            $this->regis->regis($data_registrasi);
        }
        redirect('login');
    }
}

?>
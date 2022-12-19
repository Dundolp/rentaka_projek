<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index(){
        // render view form login
        $data = [];
        $this->load->view('login/index', $data);
    }
    public function auth(){
        $role = $this->load->model('registrasi_model');
        // $password = $this->input->post('password');
        if ($role == 'administrator' or $role = 'public') {
            $userdata = [
                "role" => $role,
                "logged_in" =>TRUE,
            ];
            // menit ke 47
            // $this->session->set_userdata($userdata);

            redirect('/home');
            // redirect('/mahasiswa');
            // redirect('/dosen');
            // redirect('/matakuliah');
        } else {
            redirect('/login');
        }
    }
    public function otentikasi(){
        $this->load->model('users_model', 'user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('pw');

        $row = $this->user->login($_username, $_password);
        if(isset($row)){ //jika user terdaftar di database
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USER', $row);
            redirect(base_url().'index.php/home/index');
        } else{
            redirect(base_url().'index.php/login?status=f');
            
        }
    }
    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        //$this->session->sess_destroy();
        redirect(base_url().'index.php/home/index');
    }
}
?>
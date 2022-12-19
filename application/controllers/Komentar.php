<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Komentar extends CI_Controller{
    // public function komen(){
    //     $this->load->model('komen_model','komen');
    //     $data['list_komen'] = $this->komen->getAll();
    //     //$this->load->view('home/header');
    //     $this->load->view('komen/index', $data);
    //     //$this->load->view('home/footer');
    // }
    public function index(){
        $this->load->model('komen_model','komen');
        $data['list_komen']=$this->komen->getAll();

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('komen/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('komen_model','komen');
        $data['komen']=$this->komen->findById($_id);

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('komen/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        
        $data['judul']='Form kelola komen';     
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('komen/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("komen_model","komen");
        $id = $this->session->userdata('USER');
        $data = json_decode(json_encode($id),true);
        //$id_user = $this->input->post('id_user');
        $name = $this->input->post('nama');
        $email = $this->input->post('email');
        $message = $this->input->post('komentar');
        $_idedit = $this->input->post('idedit');//hidden field
    
        
        //$data_komen[]=$id_user;
        $data_komen[]=$data['id'];
        $data_komen[]=$name;
        $data_komen[]=$email;
        $data_komen[]=$message;
        

        if(isset($_idedit)){
            //update data lama
            $data_komen[]=$_idedit;
            $this->komen->update($data_komen);
        } else{ // save data terbaru
            //panggil fungsi pada model
            $this->komen->save($data_komen);
        }
        redirect(base_url().'index.php/home/index');
        
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("komen_model","komen");
        $komenedit = $this->komen->findById($_id);

        $data['judul']='Form Update komen';
        $data['komenedit']=$komenedit;
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('komen/update',$data);
        $this->load->view('layout/footer');
    }


    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("komen_model","komen");
        $this->komen->delete($_id);
        redirect(base_url().'index.php/komentar/index', 'refersh');
    }
}
// class Mahasiswa extends CI_Controller {
//     public function index()
//     {
//         $this->load->model ('mahasiswa_model','mhs1');
//         $this->mhs1->id=1;
//         $this->mhs1->nim='010001';
//         $this->mhs1->nama='Faiz Fikri';
//         $this->mhs1->gender='L';
//         $this->mhs1->ipk=3.85;

//         $this->load->model('pasien_model','mhs2');
//         $this->mhs2->id=2;
//         $this->mhs2->kode='020001';
//         $this->mhs2->nama='Pandan Wangi';
//         $this->mhs2->gender='P';
//         $this->mhs1->ipk=3.35;

//         $list_mhs = [$this->mhs1, $this->mhs2];
//         $data['list_mhs']=$list_mhs;
        
//         $this->load->view('header');
//         $this->load->view('mahasiswa/index',$data);
//         $this->load->view('footer');
//     }
// }
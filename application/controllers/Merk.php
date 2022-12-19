<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller {

    public function index(){
        /*
        $this->load->model("mahasiswa_model","mhs1");
        $this->mhs1->id=1;
        $this->mhs1->nama="Muhammad Farhan";
        $this->mhs1->gender="L";
        $this->mhs1->ipk = 3.89;
        $this->load->model("mahasiswa_model","mhs2");
        $this->mhs2->id=2;
        $this->mhs2->nama="Nabillah Putri";
        $this->mhs2->gender="P";
        $this->mhs2->ipk = 3.49;
        //$list_mhs = [$this->mhs1,$this->mhs2];
        $list_mhs = $this->mhs1->getAll();
        
        $data['mahasiswa1']=$this->mhs1;
        */
        $this->load->model('merk_model','merk');

        $data['list_merk']=$this->merk->getAll();

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('merk/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('merk_model','merk');
        $data['mrk']=$this->merk->findById($_id);

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('merk/view',$data);
        $this->load->view('layout/footer');
        //die("NIM ".$_nim);
    }

    public function create(){
        $data['judul']='Form Kelola merk';
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('merk/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("merk_model","merk");

        $_id = $this->input->post('id');
        $_nama= $this->input->post('nama');
        $_produk = $this->input->post('produk');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_mrk[]=$_id;// ? 1
        $data_mrk[]=$_nama;// ? 2
        $data_mrk[]=$_produk;// ? 3

        if(isset($_idedit)){
            //update data lama
            $data_mrk[]=$_idedit; // ? 8
            $this->merk->update($data_mrk);  
        }else{ // save data baru
            // panggi fungsi save di model 
            $this->merk->save($data_mrk);   
        }
        
        redirect(base_url().'index.php/merk/view?id='.$_id, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("merk_model","merk");
        $mrkedit = $this->merk->findById($_id);

        $data['judul']='Form Update merk';
        $data['mrkedit']=$mrkedit;
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('merk/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("merk_model","merk");
        $this->merk->delete($_id);
        redirect(base_url().'index.php/merk/index', 'refresh');
    }
    
}
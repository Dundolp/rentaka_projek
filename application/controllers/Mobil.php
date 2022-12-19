<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

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
        $this->load->model('mobil_model','mobil');

        $data['list_mobil']=$this->mobil->getAll();

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('mobil/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('mobil_model','mobil');
        $data['mbl']=$this->mobil->findById($_id);

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('mobil/view', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola mobil';
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('mobil/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("mobil_model","mobil");

        $_id = $this->input->post('id');
        $_nopol= $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_mbl[]=$_id;// ? 1
        $data_mbl[]=$_nopol;// ? 2
        $data_mbl[]=$_warna;// ? 3
        $data_mbl[]=$_biaya_sewa;// ? 1
        $data_mbl[]=$_deskripsi;// ? 1
        $data_mbl[]=$_cc;// ? 1
        $data_mbl[]=$_tahun;// ? 1
        $data_mbl[]=$_merk_id;// ? 1
        $data_mbl[]=$_foto;// ? 1


        if(isset($_idedit)){
            //update data lama
            $data_mbl[]=$_idedit; // ? 8
            $this->mobil->update($data_mbl);  
        }else{ // save data baru
            // panggi fungsi save di model 
            $this->mobil->save($data_mbl);   
        }
        
        redirect(base_url().'index.php/mobil/view?id='.$_id, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("mobil_model","mobil");
        $mbledit = $this->mobil->findById($_id);

        $data['judul']='Form Update mobil';
        $data['mbledit']=$mbledit;
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('mobil/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("mobil_model","mobil");
        $this->mobil->delete($_id);
        redirect(base_url().'index.php/mobil/index', 'refresh');
    }

    public function upload(){
        $_nopol= $this->input->post('nopol');
        $_id= $this->input->post('id');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 500;
        $config['max_width']            = 10000;
        $config['max_height']           = 5000;

        
        $array = explode('.', $_FILES['fotombl']['name']);
        $extension = end($array);

        //die(print_r($_FILES));
        $new_name = $_nopol.'.'.$extension;
        //die($new_name);
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fotombl'))
        {
            $error = array('error' => $this->upload->display_errors());
            die(print_r($error));
            $this->load->view('upload_form', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/mobil/view?id='.$_id);
    }
}
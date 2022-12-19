<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Sewa extends CI_Controller{
    public function sewa(){
        $this->load->model('Sewa_model','sewa');
        $data['mobil_data'] = $this->sewa->getMobil();
        //$this->load->view('home/header');
        $this->load->view('sewa/sewa', $data);
        //$this->load->view('home/footer');
    }
    public function index(){
        $this->load->model('Sewa_model','sewa');
        $data['list_sewa']=$this->sewa->getAll();

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('sewa/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('Sewa_model','sewa');
        $data['sewa']=$this->sewa->findById($_id);

        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('sewa/view',$data);
        $this->load->view('layout/footer');
    }

    public function succes(){
        $_id = $this->input->get('id');
        $this->load->model('Sewa_model','sewa');
        $data['sewa']=$this->sewa->findById($_id);

        //$this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('sewa/succes',$data);
        //$this->load->view('layout/footer');
    }

    public function create(){
        
        $data['judul']='Form kelola sewa';     
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('sewa/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("Sewa_model","sewa");
        $id = $this->session->userdata('USER');
        $data = json_decode(json_encode($id),true);
        $_id = $this->input->post('id');
        $_tanggal_mulai= $this->input->post('tanggal_mulai');
        $_tanggal_akhir = $this->input->post('tanggal_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id= $this->input->post('mobil_id');
        $_idedit = $this->input->post('idedit');//hidden field
    
        $data_sewa[]=$_id;
        $data_sewa[]=$_tanggal_mulai;
        $data_sewa[]=$_tanggal_akhir;
        $data_sewa[]=$_tujuan;
        $data_sewa[]=$_noktp;
        $data_sewa[]=$data['id'];
        $data_sewa[]=$_mobil_id;

        if(isset($_idedit)){
            //update data lama
            $data_sewa[]=$_idedit;
            $this->sewa->update($data_sewa);
        } else{ // save data terbaru
            //panggil fungsi pada model
            $this->sewa->save($data_sewa);
        }
        redirect(base_url().'index.php/sewa/succes' , 'refresh');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("Sewa_model","sewa");
        $sewaedit = $this->sewa->findById($_id);

        $data['judul']='Form Update sewa';
        $data['sewaedit']=$sewaedit;
        $this->load->view('layout/header');
        //$this->load->view('layout/sidebar');
        $this->load->view('sewa/update',$data);
        $this->load->view('layout/footer');
    }


    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("Sewa_model","sewa");
        $this->sewa->delete($_id);
        redirect(base_url().'index.php/sewa/index', 'refersh');
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
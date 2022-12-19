<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisPerawatan extends CI_Controller {

	//Fungsi menampilkan data
	public function index()
	{
		//load model + bikin objek
        $this->load->model('jenisperawatan_model', 'rwt');
        //array objek
        $list_jenisperawatan = $this->rwt->getAll();

        // data untuk dikirim ke view
        $data['list_perawatan'] = $list_jenisperawatan;

        $this->load->view('layout/header');
        // untuk ngirim data + nampilin ke view
        $this->load->view('jenisperawatan/index', $data);
        $this->load->view('layout/footer');
	}

    public function view(){
        $_id = $this->input->get('id');
        //load model + bikin objek
        $this->load->model('perawatan_model', 'rwt');
        //array objek
        $list_perawatan = $this->rwt->findById($_id);

        // data untuk dikirim ke view
        $data['rwt'] = $list_perawatan;

        $this->load->view('layout/header');
        // untuk ngirim data + nampilin ke view
        $this->load->view('perawatan/view', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->view('layout/header');
        // untuk ngirim data + nampilin ke view
        $this->load->view('perawatan/create');
        $this->load->view('layout/footer');
    }

    public function autonumber(){
        $tabel = 'perawatan';
        $field = 'id';

        $this->load->model('Perawatan_model', 'rwt');
        $lastKode = $this->rwt->autoNumber($tabel, $field);
        // mengambil karakter
        $nourut = (int) substr($lastKode, 1);
        $nourut++;

        $newKode = sprintf('%u', $nourut);


    }

    public function save(){
        $_id = $this->input->get('id');
        //load model + bikin objek
        $this->load->model('perawatan_model', 'rwt');
        
        //array objek
        $id = $this->autonumber();
        $tanggal = $this->input->post('tgl');
        $biaya = $this->input->post('biaya');
        $km_mobil = $this->input->post('km');
        $deskripsi = $this->input->post('desk');
        $id_mobil = $this->input->post('id_mobil');
        $id_jp = $this->input->post('id_jenis_perawatan');
        $idedit = $this->input->post('idedit');
        

        $data[] = $id;
        $data[] = $tanggal;
        $data[] = $biaya;
        $data[] = $km_mobil;
        $data[] = $deskripsi;
        $data[] = $id_mobil;
        $data[] = $id_jp;

        if(isset($idedit)){
            $data[] = $idedit;
            $this->rwt->update($data);
        }else{
            $this->rwt->save($data);
            //panggil fungsi save
        }

        redirect(base_url().'index.php/perawatan/view?id='.$id_mobil, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        //load model + bikin objek
        $this->load->model('perawatan_model', 'rwt');
        //array objek
        $list_perawatan = $this->rwt->findById($_id);

        // data untuk dikirim ke view
        $data['rwt'] = $list_perawatan;

        $this->load->view('layout/header');
        // untuk ngirim data + nampilin ke view
        $this->load->view('perawatan/update', $data);
        $this->load->view('layout/footer');
    }

    public function  delete(){
        $_id = $this->input->get('id');
        //load model + bikin objek
        $this->load->model('perawatan_model', 'rwt');
        //array objek
        $list_perawatan = $this->rwt->delete($_id);


        redirect(base_url().'index.php/perawatan/index', 'refresh');


    }


}
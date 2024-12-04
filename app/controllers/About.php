<?php 

class About extends Controller{
    public function index($nama = 'Stephen Sanjaya', $nim = 233303030012, $pekerjaan = 'Mahasiswa'){
        $data['nama'] = $nama;
        $data['nim'] = $nim;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Pages';
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}

?>
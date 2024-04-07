<?php 

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController 
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    
    public function index()
    {
        // karena sudah membuat method sendiri buat menampilkan,
        // code ini dihapus atau di buat komentar
        // $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Daftar Komik',
            //Di panggil menggunakan ini dan tanpa parameter
            'komik' => $this->komikModel->getKomik()
        ];
        // $komikModel = new \App\Models\KomikModel();

        return view('komik/index', $data);
        
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/detail', $data);
    }
}
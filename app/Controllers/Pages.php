<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index() 
    {
        $data = [
            'title' => 'Beranda | SehatKu'
        ];

        return view('pages/home', $data);
    }

    public function artikel()
    {
        $data = [
            'title' => 'Artikel | SehatKu'
        ];
        return view('pages/artikel', $data);
    }

    public function tips()
    {
        $data = [
            'title' => 'Tips Sehat | SehatKu'
        ];
        return view('pages/tips', $data);
    }

    public function resep()
    {
        $data = [
            'title' => 'Resep Sehat |SehatKu'
        ];
        return view('pages/resep', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang Kami | SehatKu'
        ];
        return view('pages/tentang', $data);
    }

}

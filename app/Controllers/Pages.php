<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index() 
    {
        $data = [
            'title' => 'Home | SehatKu'
        ];
        // echo view('layout/header', $data);
        // echo view('pages/home');
        // echo view('layout/footer');

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | SehatKu'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact |SehatKu'
        ];
        return view('pages/contact', $data);
    }

    public function gayahidup()
    {
        $data = [
            'title' => 'Gaya Hidup | SehatKu'
        ];
        return view('pages/gayahidup', $data);
    }

    public function diet()
    {
        $data = [
            'title' => 'Diet | SehatKu'
        ];
        return view('pages/diet', $data);
    }

    public function olahraga()
    {
        $data = [
            'title' => 'Olahraga | SehatKu'
        ];
        return view('pages/olahraga', $data);
    }

    public function tidursehat()
    {
        $data = [
            'title' => 'Tidur Sehat | SehatKu'
        ];
        return view('pages/tidursehat', $data);
    }

    public function stres()
    {
        $data = [
            'title' => 'Manajemen Stres | SehatKu'
        ];
        return view('pages/stres', $data);
    }

    public function hidrasi()
    {
        $data = [
            'title' => 'Hidrasi | SehatKu'
        ];
        return view('pages/hidrasi', $data);
    }

    public function makanansehat()
    {
        $data = [
            'title' => 'Makanan Sehat | SehatKu'
        ];
        return view('pages/makanansehat', $data);
    }
}

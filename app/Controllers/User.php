<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | Sinergi Langkah Nyata',
        ];
        return view('pages/user/index', $data);
    }
    public function tim()
    {
        $data = [
            'title' => 'Our Team | Sinergi Langkah Nyata',
        ];
        return view('pages/user/tim', $data);
    }
    public function inovasi()
    {
        $data = [
            'title' => 'Innovation | Sinergi Langkah Nyata',
        ];
        return view('pages/user/innovation', $data);
    }
}

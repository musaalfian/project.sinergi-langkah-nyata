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
}

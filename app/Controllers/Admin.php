<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | Admin',
        ];
        return view('pages/admin/index', $data);
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
        return view('pages/user/inovasi', $data);
    }
}

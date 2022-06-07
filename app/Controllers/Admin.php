<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin - Sinergi Langkah Nyata',
        ];
        return view('admin/index', $data);
    }
}

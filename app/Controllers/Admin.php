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
    public function team()
    {
        $data = [
            'title' => 'Team | Admin - Sinergi Langkah Nyata',
        ];
        return view('admin/data-team', $data);
    }
}
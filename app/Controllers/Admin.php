<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function tagline()
    {
        $data = [
            'title' => 'Dashboard | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/tagline', $data);
    }
    public function ubahTagline()
    {
        $data = [
            'title' => 'Dashboard | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/tagline', $data);
    }
    public function tim()
    {
        $data = [
            'title' => 'Team | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/tim', $data);
    }
    public function inovasi()
    {
        $data = [
            'title' => 'Innovation | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/inovasi', $data);
    }
    public function detailInovasi()
    {
        $data = [
            'title' => 'Innovation Detail | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/detail-inovasi', $data);
    }
    public function ubahInovasi()
    {
        $data = [
            'title' => 'Innovation Edit | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/edit-inovasi', $data);
    }
    public function email()
    {
        $data = [
            'title' => 'Users Email | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/email', $data);
    }
}

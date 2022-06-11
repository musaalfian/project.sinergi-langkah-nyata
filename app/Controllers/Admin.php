<?php

namespace App\Controllers;

use App\Models\MInnovation;
use App\Models\MProjectImpact;
use App\Models\MTagline;
use App\Models\MTeam;
use App\Models\MTestimonial;
use App\Models\MUniqueness;
use App\Models\MUsers_email;



class Admin extends BaseController
{
    protected $MInnovation;
    protected $MProjectImpact;
    protected $MTagline;
    protected $MTeam;
    protected $MTestimonial;
    protected $MUniqueness;
    protected $MUsers_email;

    public function __construct()
    {
        $this->MInnovation = new MInnovation();
        $this->MProjectImpact = new MProjectImpact();
        $this->MTagline = new MTagline();
        $this->MTeam = new MTeam();
        $this->MTestimonial = new MTestimonial();
        $this->MUniqueness = new MUniqueness();
        $this->MUsers_email = new MUsers_email();
        $this->db = \Config\Database::connect();
        // $UsersModel = new \Myth\Auth\Models\UserModel();
    }
    public function tagline()
    {
        $tagline = $this->MTagline->find(1);
        $data = [
            'title' => 'Tagline | Admin - Sinergi Langkah Nyata',
            'tagline'   => $tagline
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
    public function simpanUbahTagline()
    {
        $data = [
            'tagline' => $this->request->getVar()
        ];
        $this->MTagline->update(1, $data);
        return redirect()->to('/admin/tagline');
    }
    public function simpanUbahDeskripsiTagline()
    {
        $data = [
            'description_tagline' => $this->request->getVar()
        ];
        $this->MTagline->update(1, $data);
        return redirect()->to('/admin/tagline');
    }
    public function email()
    {
        $email = $this->MUsers_email->findAll();
        $data = [
            'title' => 'Users Email | Admin - Sinergi Langkah Nyata',
            'email'  => $email
        ];
        return view('pages/admin/email', $data);
    }
    public function deleteEmail($id_email)
    {
        $this->MUsers_email->delete($id_email);
        return redirect()->to('/admin/email');
    }
}
<?php

namespace App\Controllers;

use App\Models\MInnovation;
use App\Models\MProjectImpact;
use App\Models\MTagline;
use App\Models\MTeam;
use App\Models\MTestimonial;
use App\Models\MUniqueness;
use App\Models\MUsers_email;



class User extends BaseController
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
    public function index()
    {
        $tagline = $this->MTagline->find(1);
        $innovation = $this->MInnovation->findAll();
        foreach ($innovation as $innovation) {
            $innovation['description_cut'] = explode(".", $innovation['description_innovation'], 4);
            $innovation_data[] = $innovation;
        }
        // dd($innovation_data);
        $data = [
            'title' => 'Beranda | Sinergi Langkah Nyata',
            'tagline'   => $tagline,
            'innovation'   => $innovation_data,
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
    public function saveEmail()
    {
        $data = [
            'email' => $this->request->getVar('email')
        ];
        $this->MUsers_email->insert($data);
        session()->setFlashdata('message-save-email', 'e-mail has been sent.');

        return redirect()->to('/user/index');
    }
}
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
    public function home()
    {
        $tagline = $this->MTagline->find(1);
        $data = [
            'title' => 'Tagline | Admin - Sinergi Langkah Nyata',
            'tagline'   => $tagline
        ];
        return view('pages/admin/home', $data);
    }
    public function ubahTagline()
    {
        $data = [
            'title' => 'Dashboard | Admin - Sinergi Langkah Nyata',
        ];
        return view('pages/admin/home', $data);
    }
    public function saveChangeTagline()
    {
        $data = [
            'tagline' => $this->request->getVar('tagline')
        ];
        $this->MTagline->update(1, $data);
        return redirect()->to('/admin/home');
    }
    public function saveChangeDescriptionTagline()
    {
        $data = [
            'description_tagline' => $this->request->getVar('description_tagline')
        ];
        $this->MTagline->update(1, $data);
        return redirect()->to('/admin/home');
    }
    public function saveChangeImageTagline()
    {
        //get member's image
        $image_tagline = $this->request->getFile('image_tagline');
        $image_tagline_old = $this->request->getVar('image_tagline_old');
        // is upload?
        // dd($image_tagline);
        if ($image_tagline->getError() != 4) {
            // move image file to folder image
            $name_image_tagline = $image_tagline->getRandomName();
            $image_tagline->move('assets/images/tagline', $name_image_tagline);
            unlink('assets/images/tagline/' . $image_tagline_old);
        } else {
            $name_image_tagline = null;
        }
        $data = [
            'image_tagline' => $name_image_tagline
        ];
        $this->MTagline->update(1, $data);
        return redirect()->to('/admin/home');
    }
    public function saveChangeAboutUs()
    {
        $data = [
            'about_us' => $this->request->getVar('about_us')
        ];
        $this->MTagline->update(1, $data);
        return redirect()->to('/admin/home');
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
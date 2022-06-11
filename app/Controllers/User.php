<?php

namespace App\Controllers;

use App\Models\MInnovation;
use App\Models\MProjectImpact;
use App\Models\MTagline;
use App\Models\MTeam;
use App\Models\MTestimonial;
use App\Models\MUniqueness;
use App\Models\MUsers_email;
use App\Models\MSocmed;


class User extends BaseController
{
    protected $MInnovation;
    protected $MProjectImpact;
    protected $MTagline;
    protected $MTeam;
    protected $MTestimonial;
    protected $MUniqueness;
    protected $MSocmed;
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
        $this->MSocmed = new MSocmed();
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
            'title' => 'Home | Sinergi Langkah Nyata',
            'tagline'   => $tagline,
            'innovation'   => $innovation_data,
        ];
        return view('pages/user/index', $data);
    }
    public function team()
    {
        $innovation = $this->MInnovation->findAll();
        $team = $this->MTeam->orderBy('position_team', 'ASC')->findAll();
        foreach ($team as $team) {
            $team['socmed'] = $this->MSocmed->where('id_team', $team['id_team'])->findAll();
            $team_data[] = $team;
        }
        $leader = $this->MTeam->where('position_team', 'leader')->find();
        // dd($team_data);
        $data = [
            'title' => 'Our Team | Sinergi Langkah Nyata',
            'innovation'   => $innovation,
            'team'   => $team_data,
            'leader'   => $leader[0],
        ];
        return view('pages/user/team', $data);
    }
    public function innovation()
    {
        $innovation = $this->MInnovation->findAll();
        foreach ($innovation as $innovation) {
            $innovation['uniq'] = $this->MUniqueness->where('id_innovation', $innovation['id_innovation'])->findAll();
            $innovation['project'] = $this->MProjectImpact->where('id_innovation', $innovation['id_innovation'])->findAll();
            $innovation_data[] = $innovation;
        }
        // dd($innovation_data);
        $data = [
            'title' => 'Innovation | Sinergi Langkah Nyata',
            'innovation'   => $innovation_data,
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
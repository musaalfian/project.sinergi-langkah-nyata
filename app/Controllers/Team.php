<?php

namespace App\Controllers;

use App\Models\MTeam;
use App\Models\MSocmed;



class Team extends BaseController
{
    protected $MTeam;
    protected $MSocmed;

    public function __construct()
    {
        $this->MTeam = new MTeam();
        $this->MSocmed = new MSocmed();
        $this->db = \Config\Database::connect();
        // $UsersModel = new \Myth\Auth\Models\UserModel();
    }

    public function team()
    {
        $socmed = [
            'Intagram',
            'Linkedin',
            'Twitter'
        ];
        $team = $this->MTeam->orderBy('position_team', 'ASC')->findAll();
        foreach ($team as $team) {
            $team['socmed'] = $this->MSocmed->where('id_team', $team['id_team'])->findAll();
            $team_data[] = $team;
        }
        // dd($team_data);
        $sumTeam = $this->MTeam->countAllResults();
        session();
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Team | Admin - Sinergi Langkah Nyata',
            'validation'    => $validation,
            'team'  => $team_data,
            'sumTeam' => $sumTeam,
            'socmed' => $socmed,
        ];
        return view('pages/admin/team', $data);
    }
    public function saveAddTeam()
    {
        $sumTeam = $this->MTeam->countAllResults();
        $id_team = 'SLN' . $sumTeam + 1;

        //get member's image
        $member_img = $this->request->getFile('member_img');
        // is upload?
        // dd($member_img);
        if ($member_img->getError() != 4) {
            // move image file to folder image
            $name_member_img = $member_img->getRandomName();
            $member_img->move('assets/images/team', $name_member_img);
        } else {
            $name_member_img = null;
        }


        // insert data team
        $data = [
            'id_team'   => $id_team,
            'name_team' => $this->request->getVar('name_team'),
            'position_team' => $this->request->getVar('position_team'),
            'motivational_words' => $this->request->getVar('motivational_words'),
            'photo_team'    => $name_member_img,
        ];
        $this->MTeam->insert($data);

        // Socmed
        $socmed = [
            'Intagram',
            'Linkedin',
            'Twitter'
        ];
        foreach ($socmed as $socmed) {
            $data_socmed = [
                'name_social_media' => $socmed,
                'link_social_media' => $this->request->getVar('link_' . $socmed),
                'id_team'   => $id_team
            ];
            // dd($data_socmed);
            $this->MSocmed->insert($data_socmed);
        }
        return redirect()->to('/team/team');
    }
    public function saveEditTeam($id_team)
    {
        //take member's image

        $member_img = $this->request->getFile('member_img_' . $id_team);
        $member_img_old = $this->request->getVar('member_img_old_' .  $id_team);
        // is upload?
        // dd($member_img_old);
        if ($member_img->getError() != 4) {
            // move image file to folder image
            $name_member_img = $member_img->getName();
            $member_img->move('assets/images/team');
            unlink('assets/images/team/' . $member_img_old);
        } else {
            $name_member_img = $member_img_old;
        }

        $data = [
            'name_team' => $this->request->getVar('name_team_' . $id_team),
            'position_team' => $this->request->getVar('position_team_' . $id_team),
            'motivational_words' => $this->request->getVar('motivational_words_' . $id_team),
            'photo_team'    => $name_member_img
        ];
        $this->MTeam->update($id_team, $data);

        // Socmed
        $socmed = [
            'Intagram',
            'Linkedin',
            'Twitter'
        ];
        $this->MSocmed->where('id_team', $id_team)->delete();
        foreach ($socmed as $socmed) {
            $data_socmed = [
                'name_social_media' => $socmed,
                'link_social_media' => $this->request->getVar('link_' . $socmed),
                'id_team'   => $id_team
            ];
            // dd($data_socmed);
            $this->MSocmed->insert($data_socmed);
        }
        return redirect()->to('/team/team');
    }
    public function deleteTeam($id_team)
    {
        $img_team = $this->MTeam->where('id_team', $id_team)->findColumn('photo_team');
        unlink('assets/images/team/' . $img_team[0]);
        $this->MTeam->delete($id_team);
        return redirect()->to('/team/team');
    }
}
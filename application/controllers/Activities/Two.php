<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Two extends CI_Controller
{

    public $dataHeader = [];
    public $dataPage = [];
    public $dataFooter = [];

    public function index()
    {
        $this->dataHeader['title'] = 'Atividade #2 - Prova Prática - Nicolai Furtado';

        $this->load->view('activities/base/header', $this->dataHeader);
        $this->load->view('activities/two/two');
        $this->load->view('activities/base/footer');
    }

}
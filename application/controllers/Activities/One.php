<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class One extends CI_Controller
{

    public $dataHeader = [];
    public $dataPage = [];
    public $dataFooter = [];

    public function index()
    {
        $this->dataHeader['title'] = 'Atividade #1 - Prova Prática - Nicolai Furtado';

        $this->load->view('activities/base/header', $this->dataHeader);
        $this->load->view('activities/one/one');
        $this->load->view('activities/base/footer');
    }

}
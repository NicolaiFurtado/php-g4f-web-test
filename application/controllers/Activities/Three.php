<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property seriesTv seriesTv
 * @property seriesTvIntervalos seriesTvIntervalos
 */

class Three extends CI_Controller
{

    public $dataHeader = [];
    public $dataPage = [];
    public $dataFooter = [];

    public function __construct() {
        parent::__construct();

        $this->load->model('seriesTv');
        $this->load->model('seriesTvIntervalos');
    }

    public function index()
    {
        $this->dataHeader['title'] = 'Atividade #3 - Prova Prática - Nicolai Furtado';

        $this->dataPage['series'] = $this->seriesTv->getAll();

        $this->load->view('activities/base/header', $this->dataHeader);
        $this->load->view('activities/three/three', $this->dataPage);
        $this->load->view('activities/base/footer');
    }

    public function Create(){
        $this->load->view('activities/three/ajax/create', $this->dataPage);
    }

    public function SendCreate(){
        $serieName = $this->input->post('serieName', true);
        $channel = $this->input->post('channel', true);
        $category = $this->input->post('category', true);
        $date = $this->input->post('date', true);
        $time = $this->input->post('time', true);

        if(!$this->seriesTv->checkAvailability($channel, dateFormatter($date, 1), $time)){
            $seriesId = $this->seriesTv->create($serieName, $channel, $category);
            if($seriesId){
                if($this->seriesTvIntervalos->create($seriesId, dateFormatter($date, 1), $time)){
                    redirect('atvThree?msg=Série cadastrada com sucesso!&type=success');
                } else {
                    redirect('atvThree?msg=Não foi possível cadastrar a série, por conta de um erro interno. Tente novamente!&type=error');
                }
            } else {
                redirect('atvThree?msg=Não foi possível cadastrar a série, por conta de um erro interno. Tente novamente!&type=error');
            }
        } else {
            redirect('atvThree?msg=Não foi possível cadastrar a série, pois já existe uma programação nesse horário nesse canal.&type=warning');
        }
    }

    public function Edit(){
        $serieId = $this->input->post('serieId', true);

        $this->dataPage['serie'] = $this->seriesTv->getByColumn('id', $serieId);

        $this->load->view('activities/three/ajax/edit', $this->dataPage);
    }

    public function SendEdit(){
        $serieId = $this->input->post('serieId', true);
        $serieName = $this->input->post('serieName', true);
        $channel = $this->input->post('channel', true);
        $category = $this->input->post('category', true);
        $date = $this->input->post('date', true);
        $time = $this->input->post('time', true);

        if($this->seriesTv->getByColumn('id', $serieId)){
            if(!$this->seriesTv->checkAvailability($channel, dateFormatter($date, 1), $time)){
                if($this->seriesTv->edit($serieName, $channel, $category, $serieId)){
                    if($this->seriesTvIntervalos->edit($serieId, dateFormatter($date, 1), $time)){
                        redirect('atvThree?msg=Série atualizada com sucesso!&type=success');
                    } else {
                        redirect('atvThree?msg=Não foi possível atualizar a série, por conta de um erro interno. Tente novamente!&type=error');
                    }
                } else {
                    redirect('atvThree?msg=Não foi possível atualizar a série, por conta de um erro interno. Tente novamente!&type=error');
                }
            } else {
                redirect('atvThree?msg=Não foi possível atualizar a série, pois já existe uma programação nesse horário nesse canal.&type=warning');
            }
        } else {
            redirect('atvThree?msg=Não foi possível atualizar a série, por conta de um erro interno. Tente novamente!&type=error');
        }
    }

    public function Delete(){
        $serieId = $this->input->post('serieId', true);

        if($this->seriesTv->getByColumn('id', $serieId)){
            $this->seriesTv->delete($serieId);
            $this->seriesTvIntervalos->delete($serieId);
            echo 1;
        } else {
            redirect('atvThree?msg=Não foi possível atualizar a série, por conta de um erro interno. Tente novamente!&type=error');
        }
    }

    public function filter(){
        $title = $_GET['title'] != "" ? $_GET['title'] : null;


        $titleBd = null;
        if($title != null) {
            $titleBd = $title;
        }

        if($title != ""){
            $this->dataPage['series'] = $this->seriesTv->getAllByColumn('titulo', $titleBd);
        } else {
            $this->dataPage['series'] = $this->seriesTv->getAll();
        }

        $this->load->view('activities/base/header', $this->dataHeader);
        $this->load->view('activities/three/three', $this->dataPage);
        $this->load->view('activities/base/footer');
    }

}
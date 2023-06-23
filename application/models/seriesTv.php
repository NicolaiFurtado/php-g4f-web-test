<?php

class seriesTv extends CI_Model
{

    public $TABLE_IN_USE = 'series_tv';

    public function getAll(){
        $this->db->select('series_tv.*, series_tv_intervalos.dia_da_semana, series_tv_intervalos.horario');
        $this->db->from($this->TABLE_IN_USE);
        $this->db->join('series_tv_intervalos', 'series_tv_intervalos.id_serie_tv = series_tv.id', 'left');
        $this->db->order_by('series_tv_intervalos.dia_da_semana', 'ASC');
        return $this->db->get()->result_array();
    }

    public function getByColumn($column, $value){
        $this->db->select('series_tv.*, series_tv_intervalos.dia_da_semana, series_tv_intervalos.horario');
        $this->db->from($this->TABLE_IN_USE);
        $this->db->where('series_tv.'.$column, $value);
        $this->db->join('series_tv_intervalos', 'series_tv_intervalos.id_serie_tv = series_tv.id', 'left');
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    public function getAllByColumn($column, $value){
        $this->db->select('series_tv.*, series_tv_intervalos.dia_da_semana, series_tv_intervalos.horario');
        $this->db->from($this->TABLE_IN_USE);
        $this->db->like('series_tv.'.$column, $value);
        $this->db->join('series_tv_intervalos', 'series_tv_intervalos.id_serie_tv = series_tv.id', 'left');
        $this->db->order_by('series_tv_intervalos.dia_da_semana', 'ASC');
        return $this->db->get()->result_array();
    }

    public function checkAvailability($channel, $date, $time){
        $this->db->select('*');
        $this->db->from($this->TABLE_IN_USE);
        $this->db->where('series_tv.canal', $channel);
        $this->db->where('series_tv_intervalos.dia_da_semana', $date);
        $this->db->where('series_tv_intervalos.horario', $time);
        $this->db->join('series_tv_intervalos', 'series_tv_intervalos.id_serie_tv = series_tv.id', 'left');
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    public function create($serieName, $channel, $category){
        $data = [
            'titulo' => $serieName,
            'canal' => $channel,
            'genero' => $category
        ];
        $this->db->insert($this->TABLE_IN_USE, $data);
        return $this->db->insert_id();
    }

    public function edit($serieName, $channel, $category, $serieId){
        $data = [
            'titulo' => $serieName,
            'canal' => $channel,
            'genero' => $category
        ];
        $this->db->where('id', $serieId);
        $this->db->update($this->TABLE_IN_USE, $data);
        return true;
    }

    public function delete($id){
        $this->db->where("id", $id);
        $this->db->delete($this->TABLE_IN_USE);
        return true;
    }

}
<?php

class seriesTvIntervalos extends CI_Model
{

    public $TABLE_IN_USE = 'series_tv_intervalos';

    public function create($seriesId, $date, $time){
        $data = [
            'id_serie_tv' => $seriesId,
            'dia_da_semana' => $date,
            'horario' => $time
        ];
        $this->db->insert($this->TABLE_IN_USE, $data);
        return $this->db->insert_id();
    }

    public function edit($seriesId, $date, $time){
        $data = [
            'dia_da_semana' => $date,
            'horario' => $time
        ];
        $this->db->where('id_serie_tv', $seriesId);
        $this->db->update($this->TABLE_IN_USE, $data);
        return true;
    }

    public function delete($id){
        $this->db->where("id_serie_tv", $id);
        $this->db->delete($this->TABLE_IN_USE);
        return true;
    }

}
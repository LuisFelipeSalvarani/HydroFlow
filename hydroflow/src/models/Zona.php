<?php

class Zona extends Model {
    protected static $tableName = "zonas";
    protected static $columns = [
        'id',
        'nome_zona',
        'descricao_zona',
        'id_tipo_planta',
        'id_tipo_irrigacao',
        'id_jardim'
    ];

    public function inserir() {
        $this->validar();
        if(!$this->descricao_zona) $this->descricao_zona = null;
        return parent::insert();
    }

    private function validar() {
        $errors = [];

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}
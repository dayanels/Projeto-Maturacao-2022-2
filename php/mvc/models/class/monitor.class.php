<?php

$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . '/models/class/discente.class.php';

class Monitor extends Discente{
    private $fk_Discente;
    private $fk_Docente;
    private $fk_Disciplina;

    public function getFKDiscente(){
        return $this->fk_Discente;
    }

    public function setFKDiscente($fk_Discente){
        $this->fk_Discente = $fk_Discente;
    }

    public function getFKDocente(){
        return $this->fk_Docente;
    }

    public function setFKDocente($fk_Docente){
        $this->fk_Docente = $fk_Docente;
    }

    public function getFKDisciplina(){
        return $this->fk_Disciplina;
    }

    public function setFKDisciplina($fk_Disciplina){
        $this->fk_Disciplina = $fk_Disciplina;
    }
}

<?php

class Disciplina{
    private $nome;   
    private $cod_Disciplina;    
    private $periodo;
    private $data_de_Encerramento;
    private $ativo;
    private $fk_Docente;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCodDisciplina(){
        return $this->cod_Disciplina;
    }

    public function setCodDisciplina($cod_Disciplina){
        $this->cod_Disciplina = $cod_Disciplina;
    }

    public function getPeriodo(){
        return $this->periodo;
    }

    public function setPeriodo($periodo){
        $this->periodo = $periodo;
    }

    public function getDataDeEncerramento(){
        return $this->data_de_Encerramento;
    }

    public function setDataDeEncerramento($data_de_Encerramento){
        $this->data_de_Encerramento = $data_de_Encerramento;
    }
    
    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }
    
    public function getFKCurso(){
        return $this->fk_Docente;
    }

    public function setFKCurso($fk_Docente){
        $this->fk_Docente = $fk_Docente;
    }  
}
?>
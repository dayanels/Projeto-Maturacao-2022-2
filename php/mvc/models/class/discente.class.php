<?php
class Discente{
    private $matricula;
    private $nome;   
    private $senha;
    private $ativo;
    private $fk_Curso;

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    
    public function getFKCurso(){
        return $this->fk_Curso;
    }

    public function setFKCurso($fk_Curso){
        $this->fk_Curso = $fk_Curso;
    }  
}
?>
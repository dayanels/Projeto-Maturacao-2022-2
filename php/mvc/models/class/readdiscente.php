<?php
require_once "./discente.php";
require_once "../dao/daodiscente.php";
require_once "../db/conexao.php";


    $table  = '<table border="1">';
    $table .= '<thead>';
    $table .= '<tr>';
    $table .= '<td>Matricula</td>';
    $table .= '<td>Nome</td>';
    $table .= '<td>Curso</td>';
    $table .= '</tr>';
    $table .= '</thead>';
    $table .= '<tbody>';

        $dao = new DaoDiscente();
        $result = $dao->readAll();
        if ($result != NULL) {

            foreach ($result as $key => $pro) {
            $table .= '<tr>';
            $table .= "<td>{$pro->getMatricula()}</td>";
            $table .= "<td>{$pro->getNome()}</td>";
            $table .= "<td>{$pro->getCurso()}</td>";
            $table .= "<td>{$pro->getSenha()}</td>";
            $table .= '</tr>';
                /*echo '</table> ';*/
            }
        }
        
        $table .= '</tbody>';
        $table .= '</table>';
        

        echo $table;
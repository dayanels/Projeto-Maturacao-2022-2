<?php
    function retornaAtivoEmFormatoTexto($ativo)
    {
        if ($ativo == 1) {
            $ativo = "Ativo";
        } else {
            $ativo = "Inativo";
        }

        return $ativo;
    }
?>

</table>

<h5 class="text-center mt-5">Docentes</h5>

<table class="table text-center table-hover">
    <thead>
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Ativo</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?php
        $dao = new DaoDocente();
        $teachers_on = $dao->getAllActiveTeachers();
        $teachers_off = $dao->getAllInactiveTeachers();

        if ($teachers_on != null or $teachers_off != null) {
            if ($teachers_on != null) {
            foreach ($teachers_on as $teacher) {
                echo '
                    <tr>
                    <td>' . $teacher->matricula . '</td>
                    <td> ' . $teacher->nome . '</td>
                    <td> <font color="green">' . retornaAtivoEmFormatoTexto($teacher->ativo) . '</font> </td>
                    <td> 
                    <a href="?p=admin&adm=change-docente&id='
                    . $teacher->matricula .
                    '" >    Desativar
                    </a>
                    </td>
                    </tr>
                    ';
            }
        }
            if ($teachers_off != null) {
            foreach ($teachers_off as $teacher) {
                echo '
                    <tr>
                    <td>' . $teacher->matricula . '</td>
                    <td> ' . $teacher->nome . '</td>
                    <td> <font color="red">' . retornaAtivoEmFormatoTexto($teacher->ativo) . '</font> </td>
                    <td> 
                    <a href="?p=admin&adm=change-docente&id='
                    . $teacher->matricula .
                    '" >
                                 Reativar
                                 </a>
                    </td>
                    </tr>
                    ';
            }}
        } else {
            echo '
                    <tr>
                        <td colspan="3">Nenhum docente por enquanto</td>
                    </tr>
        
                ';
        }
        ?>


    </tbody>
</table>

</table>

<h5 class="text-center mt-5">Discentes</h5>

<table class="table text-center table-hover">
    <thead>
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Monitor</th>
            <th scope="col">Ativo</th>
            <th scope="col">##</th>
        </tr>
    </thead>
    <tbody>



    </tbody>
</table>

<h5 class="text-center mt-5">Cursos</h5>

<table class="table text-center table-hover">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">cod_curso</th>
            <th scope="col">Ativo</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dao = new DaoCurso();
        $courses_on = $dao->getAllActiveCoursers();
        $courses_off = $dao->getAllInactiveCoursers();

        if ($courses_on != null or $courses_off != null) {
            if($courses_on != null) {
            foreach ($courses_on as $course) {
                echo '
                    <tr>
                    <td>' . $course->nome . '</td>
                    <td> ' . $course->cod_Curso . '</td>
                    <td> <font color="green">' . retornaAtivoEmFormatoTexto($course->ativo) . '</font> </td>
                    <td> 
                    <a href="?p=admin&adm=change-curso&id='
                    . $course->cod_Curso .
                    '" >    Desativar
                    </a>
                    </td>
                    </tr>
                    ';
            }}
            if($courses_off != null) {
            foreach ($courses_off as $course) {
                echo '
                    <tr>
                    <td>' . $course->nome . '</td>
                    <td> ' . $course->cod_Curso . '</td>
                    <td> <font color="red">' . retornaAtivoEmFormatoTexto($course->ativo) . '</font> </td>
                    <td> 
                    <a href="?p=admin&adm=change-curso&id='
                    . $course->cod_Curso .
                    '" >
                                 Reativar
                                 </a>
                    </td>
                    </tr>
                    ';
            }}
        } else {
            echo '
                    <tr>
                        <td colspan="3">Nenhum curso por enquanto</td>
                    </tr>
        
                ';
        }
        ?>


    </tbody>
</table>

</div>
<!--
</table>

<h3 class="text-center mt-5">Solicitações Pendentes</h3>

<table class="table text-center table-hover">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Grupo</th>
            <th scope="col">##</th>
        </tr>
    </thead>
    <tbody>

        

    </tbody>
</table>
-->
</div>
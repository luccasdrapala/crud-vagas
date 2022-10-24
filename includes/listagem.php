<?php

    $resultados = '';
    foreach($vagas as $vaga){
        $resultados .= '<tr>
                          <td>'. $vaga->id .'</td>  
                          <td>'. $vaga->titulo .'</td>  
                          <td>'. $vaga->descricao .'</td>  
                          <td>'. $vaga->ativo .'</td>  
                          <td>'. $vaga->data .'</td>  
                          <td></td>
                       </tr>';
    }

?>

<main>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>
    </section>

    <section>
        
        <table class="table bg-light mt-2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>

    </section>

</main>
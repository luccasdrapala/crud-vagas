<?php

    $resultados = '';
    foreach($vagas as $vaga){
        $resultados .= '<tr>
                          <th>'. $vaga->id .'</th>  
                          <td>'. $vaga->titulo .'</td>  
                          <td>'. $vaga->descricao .'</td>  
                          <td>'. ($vaga->ativo == 's' ? 'Ativo': 'inativo') .'</td>  
                          <td>'. date('Y-m-d - H:i:s', strtotime($vaga->data)) .'</td>  
                          <td>
                            <a href="editar.php?id='.$vaga->id.'">
                                <button type="button" class="btn btn-success">Editar</button>  
                            </a>
                            <a href="excluir.php?id='.$vaga->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>  
                            </a>
                          </td>
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
<?php

    $mensagem = '';

    if(isset($_GET['status'])){
        switch ($_GET['status']) {
            case 'success' :
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso</div>';
                break;  

            case 'error' :
                $mensagem = '<div class="alert alert-danger">Ação inválida</div>';
                break;  
        }
    }
    
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

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                           <td colspan="6" class="text-center">
                                                               Nenhuma vaga encontrada
                                                           </td>
                                                       </td>'
?>

<main>

    <?=$mensagem?>

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
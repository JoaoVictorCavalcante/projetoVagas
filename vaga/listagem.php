<?php

use App\Entity\Vaga;

    $mensagem = '';
    if(isset($_GET['status']))
        switch($_GET['status']){
          case  'success' :
            $mensagem ='<div class="alert alert-success">Ação Executada Com Sucesso</div>';
            break;

            case 'error' :
            $mensagem = '<div class="alert alert-danger">Ação Não Executada</div>';
    
        }
    $resultados = '';

    $vagas = Vaga::getVagas();
    foreach($vagas as $vaga){
        $resultados .= '<tr>
                            <td>'.$vaga->id.'</td>
                            <td>'.$vaga->titulo.'</td>
                            <td>'.$vaga->descricao.'</td>
                            <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                            <td>'.date('d/m/Y à\s H:i:s',strtotime($vaga->data)).'</td>
                            <td>
                               <a href="editar.php?id='.$vaga->id.'">
                               <button type=button class="btn btn-primary">Editar</button>
                               </a>

                                <a href="excluir.php?id='.$vaga->id.'">
                               <button type=button class="btn btn-danger">Excluir</button>
                               </a>
                            </td>
        
                        </tr>';
                            
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                                 <td colspan="6" class="text-center">
                                                                   Nenhuma Vaga Encontrada
                                                                </td>
    
                                                               </tr>'
?>
<main>
   <?=$mensagem?>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>
    </section>
    <section>
        <table class="table table-striped mt-3 bg-light text-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descricao</th>
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
<h4>Sugestões</h4>

<div class="row justify-content-md-center">
    
    <div class="col-md-10 border rounded bg-white p-2">
        <table class="table table-bordered table-striped table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Pessoa</th>
                <th scope="col">Sugestão</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($lista as $item) { ?>
            <tr>
                <td>
                    Nome: <b><?=$item['nome']?></b><br/>
                    E-mail: <?=$item['email']?><br/>
                    Telefone: <?=$item['telefone']?><br/>
                    Região: <?=$item['bairro']?><br/>
                    Idade: <?=$item['idade']?><br/>
                </td>
                <td>
                    Tema: <b><?=$item['tema']?></b><br/>
                    Sugestão: <?=nl2br($item['sugestao']) ?>
                </td>
                <td>
                    <a href="<?=BASE_URL?>sugestoes/deletar/<?=$item['id_sugestao']?>"><span><img src="<?= BASE_URL?>assets/icon/trash.svg"></span></a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
        </table>
    </div>
</div>



<div class="container">
 
    <ul class="pagination">

        <li class="page-item"><a class="page-link" href="<?= BASE_URL;?>sugestoes/?p=1">Primeira</a></li>
            <?php
                for ($pag_ant = $paginaAtual - $max_links; $pag_ant <= $paginaAtual - 1; $pag_ant++){
                    if($pag_ant >= 1){
                        ?>
                    
                        <li class="page-item"><a class="page-link" href="<?= BASE_URL;?>sugestoes/?p=<?= $pag_ant;?>"><?= $pag_ant;?> </a></li>
                        <?php
                    }
                }
            
                echo "<li class='page-item'><strong><span class='page-link'>".$paginaAtual."</span></strong></li>";
            
            for ($pag_dep = $paginaAtual + 1; $pag_dep <= $paginaAtual + $max_links; $pag_dep++){
                
                if($pag_dep <= $paginas){ ?>
                    <li class="page-item"><a class="page-link" href="<?= BASE_URL;?>sugestoes/?p=<?= $pag_dep;?>"> <?= $pag_dep;?></a></li>
                <?php
                }
            }
        ?>

        <li class="page-item"><a class="page-link" href="<?= BASE_URL;?>sugestoes/?p=<?= $paginas;?>"> Última </a></li>
    </ul>
</div>

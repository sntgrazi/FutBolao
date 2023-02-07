<div class="rank">
    <div class="tabela-rank">
        <h1>Ranking</h1>
        <hr>
        <?php 
        include "./_scripts/conexaobd.php";
        $sql = "SELECT usuario, perfil, pontos from login ORDER BY pontos DESC ";
        $query = $con->query($sql); ?>

        <table class='tabela'>
            <tr class="topo-tabela">
                <th>Posição</th>
                <th>Usuário</th>
                <th>Pontos</th>
            </tr>
        <?php 
        $posicao = 1;
        while( $dados = $query->fetch_assoc()){ ?>
            <tr class="conteudo-tabela">
                <td><?php echo $posicao; ?>°</td>
                <td><?php echo $dados['usuario']; ?></td>
                <td><?php echo $dados['pontos']; ?></td>
            </tr>
            <?php
            $posicao += 1;
        } 
        ?>
        </table>
        <?php
        $posicao++;?>
    </div>
</div>
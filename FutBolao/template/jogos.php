<?php include "./_scripts/conexaobd.php"; ?>


<div class="conteudo-jogos">
    <button class="voltarTopo" onclick="voltarTopo()"><img src="./img/seta-cima.png" alt="setaparacima"></button>
    <div>
        <hr>
        <h2>Fase de Grupos</h2>
        <hr>
        <h2>1º RODADA</h2>
        <hr>
    </div>
    <form method="post" action="./_scripts/cad_aposta.php" autocomplete="off">
        <div class="partidas">
            <?php
            $sql = "SELECT * FROM dados_jogos WHERE rodada = '1 RODADA'";
            $query = $con->query($sql);
            $a = 1;
            while ($dados = $query->fetch_array()) {
            ?>
                <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
                <div class="jogos">
                    <div class="info">
                        <h4> <?php echo $dados['tipo']; ?> </h4>
                        <h4> <?php echo $dados['rodada']; ?> </h4>
                    </div>
                    <div class="rodada">
                        <div class="timeA">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timea']; ?>.png">
                                <h3><?php echo $dados['timea']; ?></h3>
                            </div>
                            <input type="text" class="form-control" width="20px" name="timea[]" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                        </div>
                        <span>X</span>
                        <div class="timeB">
                            <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timeb']; ?>.png"><br>
                                <h3><?php echo $dados['timeb']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <h4><?php echo converteData($dados['data']); ?> </h4>
                        <h4><?php echo $dados['horario']; ?> </h4>
                    </div>
                </div>
            <?php $a++;
            } ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </form>


    <div>
        <hr>
        <h2>2º RODADA</h2>
        <hr>
    </div>
    <form method="post" action="./_scripts/cad_aposta.php" autocomplete="off">
        <div class="partidas">
            <?php
            $sql = "SELECT * FROM dados_jogos WHERE rodada = '2 RODADA'";
            $query = $con->query($sql);
            $a = 1;
            while ($dados = $query->fetch_array()) {
            ?>
                <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
                <div class="jogos">
                    <div class="info">
                        <h4> <?php echo $dados['tipo']; ?> </h4>
                        <h4> <?php echo $dados['rodada']; ?> </h4>
                    </div>
                    <div class="rodada">
                        <div class="timeA">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timea']; ?>.png">
                                <h3><?php echo $dados['timea']; ?></h3>
                            </div>
                            <input type="text" class="form-control" width="20px" name="timea[]" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                        </div>
                        <span>X</span>
                        <div class="timeB">
                            <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timeb']; ?>.png"><br>
                                <h3><?php echo $dados['timeb']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <h4><?php echo converteData($dados['data']); ?> </h4>
                        <h4><?php echo $dados['horario']; ?> </h4>
                    </div>
                </div>
            <?php $a++;
            } ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </form>

    <div>
        <hr>
        <h2>3º RODADA</h2>
        <hr>
    </div>
    <form method="post" action="./_scripts/cad_aposta.php" autocomplete="off">
        <div class="partidas">
            <?php
            $sql = "SELECT * FROM dados_jogos WHERE rodada = '3 RODADA'";
            $query = $con->query($sql);
            $a = 1;
            while ($dados = $query->fetch_array()) {
            ?>
                <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
                <div class="jogos">
                    <div class="info">
                        <h4> <?php echo $dados['tipo']; ?> </h4>
                        <h4> <?php echo $dados['rodada']; ?> </h4>
                    </div>
                    <div class="rodada">
                        <div class="timeA">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timea']; ?>.png">
                                <h3><?php echo $dados['timea']; ?></h3>
                            </div>
                            <input type="text" class="form-control" width="20px" name="timea[]" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                        </div>
                        <span>X</span>
                        <div class="timeB">
                            <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timeb']; ?>.png"><br>
                                <h3><?php echo $dados['timeb']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <h4><?php echo converteData($dados['data']); ?> </h4>
                        <h4><?php echo $dados['horario']; ?> </h4>
                    </div>
                </div>
            <?php $a++;
            } ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </form>

    <div>
        <hr>
        <h2>Oitavas de Final</h2>
        <hr>
    </div>
    <form method="post" action="./_scripts/cad_aposta.php" autocomplete="off">
        <div class="partidas">
            <?php
            $sql = "SELECT * FROM dados_jogos WHERE rodada = 'OITAVAS'";
            $query = $con->query($sql);
            $a = 1;
            while ($dados = $query->fetch_array()) {
            ?>
                <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
                <div class="jogos">
                    <div class="info">
                        <h4> <?php echo $dados['tipo']; ?> </h4>
                        <h4> <?php echo $dados['rodada']; ?> </h4>
                    </div>
                    <div class="rodada">
                        <div class="timeA">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timea']; ?>.png">
                                <h3><?php echo $dados['timea']; ?></h3>
                            </div>
                            <input type="text" class="form-control" width="20px" name="timea[]" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                        </div>
                        <span>X</span>
                        <div class="timeB">
                            <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timeb']; ?>.png"><br>
                                <h3><?php echo $dados['timeb']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <h4><?php echo converteData($dados['data']); ?> </h4>
                        <h4><?php echo $dados['horario']; ?> </h4>
                    </div>
                </div>
            <?php $a++;
            } ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </form>

    <div>
        <hr>
        <h2>Quartas de Final</h2>
        <hr>
    </div>
    <form method="post" action="./_scripts/cad_aposta.php" autocomplete="off">
        <div class="partidas">
            <?php
            $sql = "SELECT * FROM dados_jogos WHERE rodada = 'QUARTAS'";
            $query = $con->query($sql);
            $a = 1;
            while ($dados = $query->fetch_array()) {
            ?>
                <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
                <div class="jogos">
                    <div class="info">
                        <h4> <?php echo $dados['tipo']; ?> </h4>
                        <h4> <?php echo $dados['rodada']; ?> </h4>
                    </div>
                    <div class="rodada">
                        <div class="timeA">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timea']; ?>.png">
                                <h3><?php echo $dados['timea']; ?></h3>
                            </div>
                            <input type="text" class="form-control" width="20px" name="timea[]" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                        </div>
                        <span>X</span>
                        <div class="timeB">
                            <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timeb']; ?>.png"><br>
                                <h3><?php echo $dados['timeb']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <h4><?php echo converteData($dados['data']); ?> </h4>
                        <h4><?php echo $dados['horario']; ?> </h4>
                    </div>
                </div>
            <?php $a++;
            } ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </form>

    <div>
        <hr>
        <h2>Semifinal</h2>
        <hr>
    </div>
    <form method="post" action="./_scripts/cad_aposta.php" autocomplete="off">
        <div class="partidas">
            <?php
            $sql = "SELECT * FROM dados_jogos WHERE rodada = 'SEMIFINAL'";
            $query = $con->query($sql);
            $a = 1;
            while ($dados = $query->fetch_array()) {
            ?>
                <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
                <div class="jogos">
                    <div class="info">
                        <h4> <?php echo $dados['tipo']; ?> </h4>
                        <h4> <?php echo $dados['rodada']; ?> </h4>
                    </div>
                    <div class="rodada">
                        <div class="timeA">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timea']; ?>.png">
                                <h3><?php echo $dados['timea']; ?></h3>
                            </div>
                            <input type="text" class="form-control" width="20px" name="timea[]" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                        </div>
                        <span>X</span>
                        <div class="timeB">
                            <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timeb']; ?>.png"><br>
                                <h3><?php echo $dados['timeb']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <h4><?php echo converteData($dados['data']); ?> </h4>
                        <h4><?php echo $dados['horario']; ?> </h4>
                    </div>
                </div>
            <?php $a++;
            } ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </form>

    <div>
        <hr>
        <h2>Final</h2>
        <hr>
    </div>
    <form method="post" action="./_scripts/cad_aposta.php" autocomplete="off">
        <div class="partidas">
            <?php
            $sql = "SELECT * FROM dados_jogos WHERE rodada = 'FINAL'";
            $query = $con->query($sql);
            $a = 1;
            while ($dados = $query->fetch_array()) {
            ?>
                <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
                <div class="jogos">
                    <div class="info">
                        <h4> <?php echo $dados['tipo']; ?> </h4>
                        <h4> <?php echo $dados['rodada']; ?> </h4>
                    </div>
                    <div class="rodada">
                        <div class="timeA">
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timea']; ?>.png">
                                <h3><?php echo $dados['timea']; ?></h3>
                            </div>
                            <input type="text" class="form-control" width="20px" name="timea[]" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2">
                        </div>
                        <span>X</span>
                        <div class="timeB">
                            <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required <?php if (CustomInput($_SESSION['usuario'], $dados['id']) >= 1) {
                                                                                                                            echo "disabled";
                                                                                                                        } ?> maxlength="2" >
                            <div class="dados">
                                <img src="./img/_images/<?php echo $dados['timeb']; ?>.png"><br>
                                <h3><?php echo $dados['timeb']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <h4><?php echo converteData($dados['data']); ?> </h4>
                        <h4><?php echo $dados['horario']; ?> </h4>
                    </div>
                </div>
            <?php $a++;
            } ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </form>
</div>
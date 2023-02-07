<?php include "header.php"; ?>

    <?php include "menu_lateral.php"; ?>

    <?php

    if (!isset($_GET['r'])) {
        include "template/index.php";
    } else {
        switch ($_GET['r']) {
            case 'inicio':
                include "template/index.php";
                break;
            case 'jogos':
                include "template/jogos.php";
                break;
            case 'resultados':
                include "template/resultados.php";
                break;
            case 'ranking':
                include "template/ranking.php";
                break;
            case 'perfil':
                include "template/perfil.php";
                break;
            default:
                include "template/index.php";
        }
    }

    ?>

<?php include "footer.php"; ?>
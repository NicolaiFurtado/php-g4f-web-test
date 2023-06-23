<?php
/**
 * Created by PhpStorm.
 * Project: g4f-php
 * File: one.php
 * User: Nicolai
 * Date: 21/06/2023
 * Time: 22:26
 */

/**
 * @var $ARCHIVE_IN_USE
 */

$ARCHIVE_IN_USE = 'one.php';
?>

<div class="container">
    <div class="text-center pageTitle">
        <h2>Teste Prático G4F - Nicolai Furtado</h2>
        <h4>Atividade #2 - Números Primos</h4>
    </div>

    <div class="pageReturn">
        <a href="<?=site_url('')?>"><button class="returnButton">Página Inicial</button></a>
    </div>

    <div class="pageContent">
        <h5>Escreva um script PHP para gerar um array aleatório com todos os caracteres ASCII, da
            vírgula “,” até a barra vertical (pipe) “|”. Então, remova e descarte de forma randômica, um
            elemento deste array que foi gerado.</h5>

        <h5>
            Em seguida, escreva um código que de forma eficiente retorne e imprima o caracter que
            está faltando.
        </h5>
    </div>

    <div class="returnActivityAnswer"><br><br>
        <?php
        $asciiArray = range(',', '|');

        $pickRandom = rand(1, 80);

        echo "<h2>Caracter e index Removido: " . $asciiArray[$pickRandom] . ' / ' . $pickRandom . '</h2><br><br>';

        unset($asciiArray[$pickRandom]);

        echo "Array Atual:<br>";
        for($a = 0; $a <= count($asciiArray); $a++){
            echo $asciiArray[$a] . "&nbsp;&nbsp;";
        }
        ?>
    </div>
</div>
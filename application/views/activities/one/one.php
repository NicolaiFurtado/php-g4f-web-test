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
        <h4>Atividade #1 - Números Primos</h4>
    </div>

    <div class="pageReturn">
        <a href="<?=site_url('')?>"><button class="returnButton">Página Inicial</button></a>
    </div>

    <div class="pageContent">
        <h5>Escreva um script utilizando apenas JavaScript que imprima todos os números inteiros de  1 até 100. </h5>
        <h5>Ao lado de cada número, imprima os números dos quais ele é múltiplo (entre colchetes e
            separados por vírgula). Se o número for múltiplo apenas de si mesmo, imprima “[PRIMO]”;
            Os resultados deverão ser impressos em uma página HTML. Aspectos que tornem o
            layout da página mais agradável serão considerados.</h5>
    </div>

    <div class="returnActivityAnswer">
        <table id="number-table" class="table">
            <thead>
            <tr>
                <th>Número</th>
                <th>Múltiplos</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>


<script>
    function isPrime(number) {
        if (number < 2) {
            return false;
        }

        for (let i = 2; i < number; i++) {
            if (number % i === 0) {
                return false;
            }
        }

        return true;
    }

    function printNumbersWithMultiples() {
        const numberTable = document.getElementById('number-table');
        const tbody = numberTable.getElementsByTagName('tbody')[0];

        for (let i = 1; i <= 100; i++) {
            const row = document.createElement('tr');
            const numberCell = document.createElement('td');
            const multiplesCell = document.createElement('td');
            let multiples = [];

            for (let j = 1; j <= i; j++) {
                if (i % j === 0) {
                    multiples.push(j);
                }
            }

            numberCell.textContent = i;
            multiplesCell.textContent = multiples.join(', ');

            if (isPrime(i)) {
                numberCell.classList.add('prime');
                multiplesCell.textContent += ' [PRIMO]';
            }

            row.appendChild(numberCell);
            row.appendChild(multiplesCell);
            tbody.appendChild(row);
        }
    }

    printNumbersWithMultiples();
</script>
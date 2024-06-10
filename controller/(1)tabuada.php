<?php
include "../view/(1)tabuada.php";
$augusto = intval($_POST['num1']);

for ($i = 1; $i <= 20; $i++) {
    echo '<li>' . $augusto . ' x ' . $i . ' = ' . ($augusto * $i) . '</li>';
}
echo"<p class="text-center"> Feito por Augusto Akira Miasato </p>"
<?php
include "../view/exerciciosLoops/(1)tabuada.html";
$augusto = intval($_POST['num1']);

echo '<ul class="text-center">';
for ($i = 1; $i <= 20; $i++) {
    echo '<li>' . $augusto . ' x ' . $i . ' = ' . ($augusto * $i) . '</li>';
}
echo '</ul>';
echo '<p class="text-center">Feito por Augusto Akira Miasato</p>';
?>

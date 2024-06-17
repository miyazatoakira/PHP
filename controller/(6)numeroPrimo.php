<?php
include "../view/exerciciosLoops/(6)numeroPrimo.html";

$num1 = intval($_POST['num1']);
$isPrime = "não é Primo";
$i = $num1;
do{
    if($num == 0){
        $isPrime = "é nulo";
    }
    if($num % $i){
        $isPrime += 1;
    }
    $i--;
}
while($i!=2);
if($isPrime == 2){
  $resultado = "é Primo";
}
else if($isPrime > 2){
  $resultado = "não é Primo";
}
echo
"<div class='card mt-4 bg-light text-center position-absolute start-50 translate-middle ' style='width: 18rem'>
    <div class='card-body'>
        <p class='card-text text-dark'>
            O número  $resultado
        </p>
    </div>
    <p class='align-self-center mt-5'>Feito por Augusto Akira Miasato</p>
</div>
    ";
<?php
include "../view/exerciciosLoops/(6)numeroPrimo.html";

$num1 = intval($_POST['num1']);
$isPrime = "não é Primo";
$i = $num1;
do{
    if(($num1 % $i) == 0 ){
        $isPrime = "é Primo";
    }
    if($num1 == 0){
        $isPrime = "é nulo";
    }
    else{
        $isPrime = "não é Primo";
    }
    $i--;
}
while($i!=0);

echo
"<div class='card mt-4 bg-light text-center position-absolute start-50 translate-middle ' style='width: 18rem'>
    <div class='card-body'>
        <p class='card-text text-dark'>
            O número  $isPrime
        </p>
    </div>
    <p class='align-self-center mt-5'>Feito por Augusto Akira Miasato</p>
</div>
    ";
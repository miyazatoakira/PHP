<?php
    include "../view/preco_custo.html";
    
    $nomeProduto = $_POST['txtnome'];
    $valorProducao = $_POST['txtvalor'];
    $valorEmbalagem = $_POST['txtembalagem'];
    $lucro = $_POST['txtlucro'];

    $taxaEntrega = 12.00;
    $precoCusto = $valorProducao + $valorEmbalagem + $taxaEntrega;
    $lucro = $precoCusto * ($percentualLucro / 100);
    $precoVenda = $precoCusto + $lucro;

    echo "Nome do produto: $nomeProduto\n";
    echo "Valor de produção: R$ $valorProducao\n";
    echo "Valor de gasto com embalagem: R$ $valorEmbalagem\n";
    echo "Taxa de entrega: R$ $taxaEntrega\n";
    echo "Total do custo: R$ $precoCusto\n";
    echo "Lucro por produto: R$ $lucro\n";
    echo "Valor de venda indicado: R$ $precoVenda\n";
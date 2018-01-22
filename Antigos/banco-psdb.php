<?php

function listacidades($conexao) {
    $cidades = array();
    $resultado = mysqli_query($conexao, "select * from cidade");

    while($cidade = mysqli_fetch_assoc($resultado)) {
        array_push($cidades, $cidade);
    }

    return $cidades;
}

function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaCidade($conexao, $id) {
    $query = "select * from cidade where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
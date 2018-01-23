<?php

//Função que lista as linhas no inventario
function listas($conexao, $tabela) {
    $listas = array();
    $resultado = mysqli_query($conexao, "select * from {$tabela}");

    while($lista = mysqli_fetch_assoc($resultado)) {
        array_push($listas, $lista);
    }

    return $listas;
}

//Função que retorna uma linha selecionada 
function busca($conexao, $id, $coluna) {
    $query = "select * from usuario where {$coluna} = '{$id}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function buscaVinvular($conexao, $id, $coluna) {
    $query = "select * from vincular where {$coluna} = '{$id}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function buscaUsuario($conexao, $idUsuario) {
    $query = "select * from usuario where nomeUsuario = '{$id}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

//Função que Remove uma linha pelo id
function removeProduto($conexao, $id, $tabela, $coluna) {
    $query = "delete from {$tabela} where {$coluna}= {$id}";
    return mysqli_query($conexao, $query);
}

function insereUsuario($conexao, $nomeUsuario, $projeto, $nomeMaquina, $dataEntrada) {
    $query = "insert into usuario (nomeUsuario, projeto, nomeMaquina, dataEntrada) values ('{$nomeUsuario}', '{$projeto}', '{$nomeMaquina}', '{$dataEntrada}')";
    return mysqli_query($conexao, $query);
}

function insereCPU($conexao, $tipo, $marcaMaquina, $modeloMaquina, $patrimonioMaquina, $serviceTagMaquina, $expressTagMaquina) {
    $query = "insert into cpu (tipo, marcaMaquina, modeloMaquina, patrimonioMaquina, serviceTagMaquina, expressTagMaquina) values ('{$tipo}', '{$marcaMaquina}', '{$modeloMaquina}', '{$patrimonioMaquina}', '{$serviceTagMaquina}', '{$expressTagMaquina}')";

    return mysqli_query($conexao, $query);
}

function insereMonitor($conexao, $marcaMonitor, $modeloMonitor, $polegadas, $snMonitor, $serviceTagMonitor, $expressTagMonitor, $patrimonioMonitor) {
    $query = "insert into monitor (marcaMonitor, modeloMonitor, polegadas, snMonitor, serviceTagMonitor, expressTagMonitor, patrimonioMonitor) values ('{$marcaMonitor}', '{$modeloMonitor}', '{$polegadas}', '{$snMonitor}', '{$serviceTagMonitor}', '{$expressTagMonitor}', '{$patrimonioMonitor}')";
    return mysqli_query($conexao, $query);
}

function insereOffice($conexao, $anoOffice, $snOffice) {
    $query = "insert into office (anoOffice, snOffice) values ('{$anoOffice}', '{$snOffice}')";
    return mysqli_query($conexao, $query);
}

function insereVincular($conexao, $tipo, $marcaMaquina, $modeloMaquina, $patrimonioMaquina, $serviceTagMaquina, $expressTagMaquina) {
    $query = "insert into vincular (COD_VIC, nomeUsuarioVic,  projetoVic,  nomeMaquinaVic,  tipoVic, marcaMaquinaVic, modeloMaquinaVic,    patrimonioMaquinaVic,    serviceTagMaquinaVic,    expressTagMaquinaVic,    marcaMonitor1Vic,    modeloMonitor1Vic,   polegadas1Vic,   snMonitor1Vic,   serviceTagMonitor1Vic,   expressTagMonitor1Vic,   patrimonioMonitor1Vic,   marcaMonitor2Vic,    modeloMonitor2Vic,   polegadas2Vic,   snMonitor2Vic,   serviceTagMonitor2Vic,   expressTagMonitor2Vic,  patrimonioMonitor2Vic,   anoOfficeVic,    snOfficeVic) values ('', '', '', '', '{$tipo}', '{$marcaMaquina}', '{$modeloMaquina}', '{$patrimonioMaquina}', '{$serviceTagMaquina}', '{$expressTagMaquina}', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
    return mysqli_query($conexao, $query);
}

function updateVincular($conexao, $patrimonioMaquinaVic, $nomeUsuarioVic, $projetoVic, $nomeMaquinaVic, $dataEntradaVic, $tipoVic, $marcaMaquinaVic, $modeloMaquinaVic, $serviceTagMaquinaVic, $expressTagMaquinaVic, $marcaMonitor1Vic, $serviceTagMonitor1Vic, $modeloMonitor1Vic, $polegadas1Vic, $snMonitor1Vic, $expressTagMonitor1Vic, $patrimonioMonitor1Vic, $marcaMonitor2Vic, $modeloMonitor2Vic, $polegadas2Vic, $snMonitor2Vic, $serviceTagMonitor2Vic, $expressTagMonitor2Vic, $patrimonioMonitor2Vic, $anoOfficeVic, $snOfficeVic) {
    $query = "UPDATE `vincular` SET 
`nomeUsuarioVic`='{$nomeUsuarioVic}', 
`projetoVic`='{$projetoVic}', 
`nomeMaquinaVic`='{$nomeMaquinaVic}', 
`dataEntradaVic`='{$dataEntradaVic}', 
`tipoVic`='{$tipoVic}', 
`marcaMaquinaVic`='{$marcaMaquinaVic}', 
`modeloMaquinaVic`='{$modeloMaquinaVic}', 
`patrimonioMaquinaVic`='{$patrimonioMaquinaVic}', 
`serviceTagMaquinaVic`='{$serviceTagMaquinaVic}', 
`expressTagMaquinaVic`='{$expressTagMaquinaVic}', 
`marcaMonitor1Vic`='{$marcaMonitor1Vic}', 
`modeloMonitor1Vic`='{$modeloMonitor1Vic}', 
`polegadas1Vic`='{$polegadas1Vic}', 
`snMonitor1Vic`='{$snMonitor1Vic}', 
`serviceTagMonitor1Vic`='{$serviceTagMonitor1Vic}', 
`expressTagMonitor1Vic`='{$expressTagMonitor1Vic}', 
`patrimonioMonitor1Vic`='{$patrimonioMonitor1Vic}', 
`marcaMonitor2Vic`='{$marcaMonitor2Vic}', 
`modeloMonitor2Vic`='{$modeloMonitor2Vic}', 
`polegadas2Vic`='{$polegadas2Vic}', 
`snMonitor2Vic`='{$snMonitor2Vic}', 
`serviceTagMonitor2Vic`='{$serviceTagMonitor2Vic}', 
`expressTagMonitor2Vic`='{$expressTagMonitor2Vic}', 
`patrimonioMonitor2Vic`='{$patrimonioMonitor2Vic}', 
`anoOfficeVic`='{$anoOfficeVic}', 
`snOfficeVic`='{$snOfficeVic}' 
WHERE patrimonioMaquinaVic = '{$patrimonioMaquinaVic}'";
    return mysqli_query($conexao, $query);
}
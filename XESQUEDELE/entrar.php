<?php

if(isset($_GET["acao"])){
if ($_GET["acao"]=="inserir"){
    inserirCadastro();
    }
    if($_GET["acao"]=="alterar"){
        alterarPessoa();
    }
    if($_GET["acao"]=="excluir"){
        excluirPessoa();
    }
    if($_GET["acao"]=="logar")
        logarPessoa();
}

function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "under");
    return $conexao;
}

function inserirCadastro(){
    $banco = abrirBanco();
    $sql = "INSERT INTO cadastro(nome, email, senha)"
            . " VALUES ('{$_GET["nome"]}','{$_GET["email"]}','{$_GET["senha"]}')";
    $banco->query($sql);
    $banco->close();
    voltarLogin();
}

function alterarPessoa(){
    $banco = abrirBanco();
    $sql = "UPDATE `cadastro` SET nome='{$_GET["nome"]}',"
            . "email='{$_GET["email"]}',"
            . "senha='{$_GET["senha"]}' WHERE id='{$_GET["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarLogin();
}

function excluirPessoa(){
    $banco = abrirBanco();
    $sql = "DELETE FROM cadastro WHERE id='{$_GET["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarLogin();
}

function logarPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT FROM cadastro WHERE id='{$_GET["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM cadastro ORDER BY nome";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[]= $row;
    }
    return $grupo;
}

function selectIdPessoa($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM cadastro WHERE id=".$id;
    $resultado = $banco->query($sql);
    $pessoa = mysqli_fetch_assoc($resultado);
        return $pessoa;

}

function voltarLogin(){
header("Location:login.php");
}

function voltarIndex(){
header("Location:index.html");
}
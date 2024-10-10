<?php 
    require 'conexao.php'; // chama arquivo que cria a conexão
    $nome = $_POST['nome'];
    //$nome = filter_input(INPUT_POST, 'nome');
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $sql = $pdo->prepare("INSERT INTO usuario (nome, quantidade, preco) VALUES (:nome, :quantidade, :preco )");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':quantidade',$quantidade);
    $sql->bindValue(':preco',$preco);
    // escrevendo na tabela
    $sql->execute();    
header("Location:index.php");
?>
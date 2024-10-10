<?php 
    require 'conexao.php'; // chama arquivo que cria a 
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $id = $_POST['id'];
    
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome , quantidade = :quantidade , preco = :preco WHERE id = $id");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':quantidade',$quantidade);
    $sql->bindValue(':preco',$preco);
    // escrevendo na tabela
    $sql->execute();
    
header("Location:index.php");

?>
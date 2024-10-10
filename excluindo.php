<?php 
    require 'conexao.php'; // chama arquivo que cria a conexão
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $id = $_POST['id'];

    $sql = $pdo->prepare("DELETE from usuario WHERE id = :id");
    $sql->bindValue(':id',$id);
   
    $sql->execute();
    
header("Location:index.php");

?>
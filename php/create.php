<?php
    require_once 'conexao.php';

    $nome=$_POST['nome'];        
    $idade=$_POST['idade'];        
    $email=$_POST['email'];        
    $celular=$_POST['celular'];   
    
    $query = "insert into pessoa(nome,idade,email,celular)values('$nome','$idade','$email','$celular')";

    if($conexao->query($query) === True){
        echo "$nome inserido com sucesso";
    }
    else{
        echo "Falha ao adicionar";
    }
    $conexao->close();
?>
<br><a href="../index.php"><button>Voltar</button></a>
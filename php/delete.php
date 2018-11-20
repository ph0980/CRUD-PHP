<?php
    require_once 'conexao.php';

    $id = $_POST['id'];
    $nome = "select nome from pessoa where id=$id";
    $resultado = $conexao->query($nome);
    $n=mysqli_fetch_array($resultado);
    $query="delete from pessoa where id=$id";
    if($n['nome']!=""){

        if($conexao->query($query) === True){
            echo $n['nome']." deletado com sucesso";
        }
        else{
            echo "Falha ao deletar";
        }
    }
    else{
        echo "Registro inexistente";
    }
    $conexao->close();
?>
<br><a href="../index.php"><button>Voltar</button></a>
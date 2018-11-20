<?php
    require_once 'conexao.php';

    $id = $_POST['id'];
    $nome=$_POST['nome'];   
    $idade=$_POST['idade'];        
    $email=$_POST['email'];        
    $celular=$_POST['celular']; 


    $id_select = "select id from pessoa where id=$id";
    $resultado = $conexao->query($id_select);
    $i=mysqli_fetch_array($resultado);

    $query="update pessoa set nome='$nome',idade=$idade,email='$email',celular='$celular' where id=$id";
    if($i['id']!=""){
        if($conexao->query($query) === True){
            echo "$nome atualizado com sucesso";
        }
        else{
            echo "Falha ao atualizar";
        }
    }
    else{
        echo "Registro inexistente";
    }
    $conexao->close();
?>
<br><a href="../index.php"><button>Voltar</button></a>
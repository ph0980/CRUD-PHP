<?php 
    require_once 'php/conexao.php'; 
?>
<html>
    <head>
        <meta charset="utf-8"">
        <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    </head>
    <body>
        <a href="adicionar.html"><button>Add</button></a>
        <a href="atualizar.html"><button>Atualizar</button></a>
        <a href="deletar.html"><button>Deletar</button></a>
        <table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>IDADE</th>
                <th>EMAIL</th>
                <th>CELULAR</th>
            </tr>
            <?php
                $query="Select * from pessoa";
                $resultado = $conexao->query($query);

                while($linha = mysqli_fetch_array($resultado)){ ?>
                    <tr>
                        <td><strong><?php echo $linha['id']; ?></strong></td>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['idade']; ?></td>
                        <td><?php echo $linha['email']; ?></td>
                        <td><?php echo $linha['celular']; ?></td>
                    </tr>
                <?php
                }
                $conexao->close();
                ?>
        </table>
    </body>
</html>
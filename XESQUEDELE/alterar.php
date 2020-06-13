<?php 
include("entrar.php");
$grupo = selectAllPessoa();
?>

<html>
    <head>
        <title>Alterar Dados</title>  
        <meta charset="UTF-8">
    </head>
    <body>
    <center>
        <h1>Altere Seus Dados</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($grupo as $pessoa){ ?>

                <tr>
                    <td><?=$pessoa["nome"]?></td>
                    <td><?=$pessoa["email"]?></td>
                    <td><?=$pessoa["senha"]?></td>
                    <td>
                        <form name="alterar" action="edit.php" method="GET">
                            <input type="hidden" name="id" value="<?=$pessoa["id"]?>"/>
                            <input type="submit" value="Editar" name="Editar" /> 
                        </form>
                    </td>
                    <td>
                        <form name="excluir" action="entrar.php" method="GET">
                            <input type="hidden" name="id" value="<?=$pessoa["id"]?>" />
                            <input type="hidden" name="acao" value="excluir"/>
                            <input type="submit" value="Excluir" name="Excluir" />
                            </form>
                    </td>
                </tr>
                    
                <?php }
                
                
                
                
                ?>
                
            </tbody>
        </table>
        
        </br><a href="login.php">Login</a>
    </center>
    </body>
</html>


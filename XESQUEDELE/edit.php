<?php 
include("entrar.php");
$pessoa = selectIdPessoa($_GET["id"]);

?>
    <center>
        <meta charset="UTF-8">
        <h1>Alterar Dados</h1>
        <form action="entrar.php" method="GET">
          <table border="1">
            <tbody>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value="<?=$pessoa["nome"]?>" size="20"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?=$pessoa["email"]?>" size="20"/></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="text" name="senha" value="<?=$pessoa["senha"]?>" size="20"/></td>
                </tr>
                <tr>
                   <td><input type="hidden" name="acao" value="inserir">
                       <input type="hidden" name="id" value="<?=$pessoa["id"]?>" />
                   </td>
                   <td><input type="submit" value="Alterar"></td>
                </tr>
            </tbody>
        </table>
        </form>
    </center>
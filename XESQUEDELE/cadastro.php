<html>
    <head>
        <title>Cadastro</title>  
        <meta charset="UTF-8">
    </head>  
    <body>
    <center>
        <h1>Cadastro</h1>
        <form action="entrar.php" method="GET">
            </br><input type="text" name="nome" placeholder="Digite seu nome"></br>
            </br><input type="email" name="email" placeholder="Digite seu email"></br>
            </br><input type="password" name="senha" placeholder="Digite sua senha"></br>
            <input type="hidden" name="acao" value="inserir">
            </br></br><input type="submit" value="Cadastrar"></br>
            </br><a href="alterar.php">Alterar Dados</a>
        </form>
    </center>
    </body>  
</html>

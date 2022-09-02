<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text/css" href ="css/loginn.css"/>
    <title>Tela de login</title>
   
</head>
<body>
    <a href="home.php">Voltar</a>
        <div>
        <h1 >Faça Login Gratis :)</h1>
            <form action="testLogin.php" method="POST">
                <input type="text" name="email" placeholder="Email">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
        </div>
</body>
</html>
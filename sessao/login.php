<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="efetua_login.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario">
        <label for="senha">Senha:</label>
        <input type="text" name="senha">
        <input type="submit" value="Entrar">
    </form>
    <?php
    if (isset($_COOKIE['autenticacao'])) {
        echo $_COOKIE['autenticacao'];
    }
    ?>
</body>

</html>
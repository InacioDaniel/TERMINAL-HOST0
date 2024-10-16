<?php
session_start();
$db = new SQLite3('base.db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Embaralha a senha

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);
    $stmt->execute();

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" href="img/chat.png">
    <link rel="shortcut icon" href="img/chat.png" type="image/x-icon">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            color: white;
        }
        .tg{
            margin-left: 20%;
            margin-top: 10%;
        }
    </style>
</head>
<body background="chat-cyber/images/background1.png">
    <div class="container tg">
        <h1 style="color:white; text-shadow: 02px 02px 02px blue; margin-left: 23%;">Cadastro</h1>
        <form method="POST">
            <div class="form-group">
                <label>Usuário</label><br>
                <input type="text" class="form-control" name="username" required>
            </div><br>
            <div class="form-group">
                <label>Senha</label><br>
                <input type="password" class="form-control" name="password" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Cadastrar</button><br>
        </form><br><br>
        <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
    </div>
</body>
</html>

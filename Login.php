<?php
session_start();
$db = new SQLite3('base.db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute();
    
    if ($user = $result->fetchArray(SQLITE3_ASSOC)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        }
    }
    $error = "Usuário ou senha inválidos.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="apple-touch-icon" href="img/chat.png">
    <link rel="shortcut icon" href="img/chat.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .bg{
            margin-left: 25%;
            margin-top: 10%;
            color: white;
        }
        .tm{
            width: 580px;
        }
    </style>
</head>
<body background="chat-cyber/images/background1.png" text="white">
    <div class="bg">
        <h1 style="color:white; text-shadow: 02px 02px 02px blue; margin-left: 25%;">Login</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger tm"><?= $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <br>
                <label>Usuário</label><br>
                <input type="text" class="bg-t form-control" name="username" size="76px" required>
            <br>
                <label>Senha</label><br>
                <input type="password" class="bg-t form-control" name="password" size="76px" required>
                <br><br>
           <button type="submit" class="btn btn-primary">Entrar</button>
        </form><br>
        <p>Ainda não tem uma conta? <a href="register.php">Cadastre-se aqui</a></p>
    </div>
</body>
</html>

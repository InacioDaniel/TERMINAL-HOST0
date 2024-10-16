<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="img/chat.png">
    <link rel="shortcut icon" href="img/chat.png" type="image/x-icon">
    <title>Casa</title>
    <style>
        body{
            font-family: arial;
        }
        .pain{
            width: 400px;
            height: 400px;
            background: #f0f0f0;
            color: #000;
            font-weight: bold;
            font-size: 15pt;
            border: 10px solid #f0f0f0;
            border-radius: 8px;
        }
        .painp{
            display: flex;
        }
        .btn-ver{
            border: 2px solid transparent;
            border-radius: 07px;
            font-size: 14pt;
            padding: 15px;
            background: grey;
            color: #ffffff;
            text-shadow: 02px 02px 02px blue;
        }
        .btn-ver:hover{
            background: #f0f0f0;
        }
        .btn-ver:focus{
            background: black;
        }
        .btn-ver:active{
            background: blue;
        }
    </style>
</head>
<body background="chat-cyber/images/background.png" text="white"><br><br><br><br><br><center>
<h2><?= htmlspecialchars($_SESSION['username']); ?>! Seja bem vindo a PLATAFORMA online da comunidade  "TERMINAL HOST". Sinta-se Em Casa!</h2>
<br><br>
<div class="painp">
<div class="pain ">
    <img src="img/chat.png" alt="Chat" width="230px" height="230px">
    <h3>Veja o <b><i>CHAT</i></b> de conversas do <b><i>TERMINAL HOST!</i></b></h3>
    <a href="ch.php"><button class="btn-ver">VER <b><i>CHAT</i></b></button></a>
</div><hr><sub>
<div class="pain">
    <img src="img/sb.png" alt="Sobre" width="230px" height="230px">
    <h3>Veja mais informações sobre o <b><i>TERMINAL HOST!</i></b></h3>
    <a href="sobre/"><button class="btn-ver">VER <b><i>SOBRE</i></b></button></a>
</div>

</div></sub>
</center>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="css/style.css">
    <STyle>
        .T-S{
            text-shadow: 02px 02px 02px red; 
        }
        .links{
            color: white;
            text-shadow: 03px 03px 03px black;
            text-decoration: none;
        }

    </STyle>
    <title>TERMINAL HOST</title>
</head>
<body background="chat-cyber/images/background.png" text="white">
    <br><br><br><br><br>
  <center class="T-S">
    <h1>COMUNIDADE : TERMINAL HOST</h1>
    <H2>SALAS:</H3>
 <br><br><br><br>
   <h2><a class="itchat links" href="chat-cyber/"><img src="../img/c.gif" alt="cyber" width="100px" height="100px"> <br>Cyber-Segurança</a></h2><br><br>
   <h2><a class="itchat links" href="chat-php/"><img src="../img/p.png" alt="php"  width="100px" height="100px"><br>PHP-7</a></h2><br><br>
   <h2><a class="itchat links" href="chat-httpcustom/"><img src="../img/h.png" alt="hc"  width="100px" height="100px"><BR></BR>HTTP CUSTOM</a></h2><br><br>
   </center>
    <script src="js/script.js"></script>
</body>
</html>

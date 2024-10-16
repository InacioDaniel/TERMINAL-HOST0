<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="import" href="index.php">
    <link rel="apple-touch-icon" href="img/chat.png">
    <link rel="shortcut icon" href="img/chat.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>

        .fr {
            width: 100%;
            height: 660px;
        }
        .logotext{
            color: white;
            text-shadow: 05px 05px 05px blue;
        }
        .logotext:hover{
            color: grey;
            box-shadow: 0 0.04rem red;
        }
        .img-size {
            width: 50px;
            height: 50px;
        }
        .bh{
            background: #242222;
            color: white;
            font-family: arial;
            font-weight: bold;
            font-size: 14pt;
        }
    </style>
</head>
<body class="bg-dark text-light">
   <CENter><h5 class="logotext">TERMINAL HOST BY TERMINAL HOST COMUNITY</h5></CENter>
   <nav class="navbar navbar-expand-md bh">
      <a class="navbar-brand" href="?Welcome"><img src="img/chat.png" class="img-size" alt="Chat" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php" target="pg">Inicio/Casa</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="ch.php" target="pg">CHAT</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="home.php?pq='em breve'" target="pg">PYTHON-HAKING/BREVEMENTE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="home.php?pq='em breve'" target="pg">PHP/BREVEMENTE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="sobre/" target="pg">SOBRE</a>
          </li>
        </ul>
        <div class="brand"><h5><img src="img/ac.png" class="img-size" alt="logoAccount"> T_ID: <?= htmlspecialchars($_SESSION['username']); ?>!</h5></div>

      </div>
    </nav>

   

    <iframe src="home.php" frameborder="0" class="fr" name="pg" title="My Iframe"></iframe>
    
 
        <center><h2>Seja Bem-vindo, <b><i> <?= htmlspecialchars($_SESSION['username']); ?>!</i></b></h2>
        <p><a href="logout.php" class="btn btn-danger">Terminar-sessão</a></p></center>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

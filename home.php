<?php
session_start();
require 'conexao_socars.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
<nav class="nav-container">
    <div class="container">
        <a href="modelos.php" class="logo">
            <img src="logo.png" alt="Logo" />
        </a>
        <br><br><br>
        <ul class="nav-link">
            <?php if (isset($_SESSION['acesso'])): ?>
                <li><a href="logout.php" style="--i: 1">Desconectar</a></li>

                <?php if ($_SESSION['acesso'] === 'admin' || $_SESSION['acesso'] === 'admin_principal'): ?>
                    <li><a href="carros_admin.php" style="--i: 2">Edição de carros</a></li>
                    <li><a href="cadastrar_modelo.php" style="--i: 3">Cadastrar Modelo</a></li>
                <?php endif; ?>

                <?php if ($_SESSION['acesso'] === 'admin_principal'): ?>
                    <li><a href="lista_admin.php" style="--i: 4">Lista de administradores</a></li>
                    <li><a href="registro_admin.php" style="--i: 5">Cadastro de administradores</a></li>
                <?php endif; ?>

                <?php if ($_SESSION['acesso'] === 'cliente'): ?>
                    <li><a href="carros.php" style="--i: 6">Ver Carros</a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<br><br><br>

<div class="container">
    <?php if (isset($_SESSION['acesso'])): ?>
        <h1>Seja Bem-vindo!</h1>
        <h3>O seu acesso é de: <?php echo htmlspecialchars($_SESSION['acesso']); ?></h3>
        <h3>O seu nome é: <?php echo htmlspecialchars($_SESSION['nome']); ?></h3>
    <?php else: ?>
        <h3>Você não está logado.</h3>
    <?php endif; ?>
</div>

</body>
</html>

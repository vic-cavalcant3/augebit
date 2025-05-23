<?php
session_start();
require 'conexao.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM funcionarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = $resultado->fetch_assoc();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Credenciais inválidas!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Augebit - Login</title>
    <link rel="stylesheet" href="google">
    <style>
        :root {
            --cor-primaria:rgb(0, 0, 0); 
            --cor-secundaria: #F5F7FA; 
            --cor-destaque: #6c63ff; 
        }

        body {
    font-family: 'Segoe UI', sans-serif;
    position: relative;
    display: flex;
    background:rgb(237, 237, 237);
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    z-index: 0;
}



        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            z-index: 0;
        }

        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo img {
            max-width: 150px; /* Substituir pelo logo real */
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        input {
            width: 100%;
    padding: 12px 14px; 
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    background: white;
    appearance: none; 
    box-sizing: border-box;
    height: 45px
        }

        button {
            background: var(--cor-destaque);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background:rgb(71, 62, 250);
        }

        .links {
            text-align: center;
            margin-top: 1rem;
        }

        .error {
            color: #dc3545;
            margin-bottom: 1rem;
            text-align: center;
        }
        .links p a {
            color: #6c63ff;
             text-decoration: none ;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
           
            <img src="../../img/LogoQualidade.png" alt="Augebit Logo">
        </div>

        <?php if(isset($erro)): ?>
            <div class="error"><?= $erro ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <div class="links">
            <p>Novo usuário? <a  class="azinho" href="cadastro.php">Criar conta</a></p>
        </div>
    </div>
</body>
</html>
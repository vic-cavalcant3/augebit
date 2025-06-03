<?php
session_start();
require 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $setor = $_POST['setor'];

    try {
        $stmt = $conn->prepare("INSERT INTO funcionarios (nome, email, telefone, senha, setor) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $nome, $email, $telefone, $senha, $setor);
        $stmt->execute();
        header("Location: login.php?success=1");
        exit;
    } catch (Exception $e) {
        $erro = "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <style>
         :root {
            --cor-primaria:rgb(0, 0, 0); /* Azul principal (ajustar conforme manual) */
            --cor-secundaria: #F5F7FA; /* Cinza claro */
            --cor-destaque: #6c63ff; /* Laranja para botões */
        }

        body {
    font-family: 'Segoe UI', sans-serif;
    position: relative;
    background: rgb(237, 237, 237);
    display: flex;
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

        input, select {
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

select {
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24'%3E%3Cpath fill='gray' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 12px;
    padding-right: 36px; 
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
            color: var(--cor-destaque);
            text-decoration: none ;
        }
    </style>
    <title>Augebit - Cadastro</title>
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
                <input type="text" name="nome" placeholder="Nome completo" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail corporativo" required>
            </div>
            <div class="form-group">
                <input type="tel" name="telefone" placeholder="Telefone"  required>
            </div>
            <div class="form-group">
                <select name="setor" required>
                    <option value="">Selecione seu setor</option>
                    <option value="TI">TI</option>
                    <option value="RH">RH</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value=" Comercial/Vendas"> Comercial/Vendas</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Jurídico">Jurídico</option>
                    <option value="Pesquisa e Desenvolvimento (P&D)">Pesquisa e Desenvolvimento (P&D)</option>
                </select>
            </div>
            <div class="form-group">
                <input type="password" name="senha" placeholder="Crie uma senha" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>

        <div class="links">
            <p>Já tem conta? <a class="azinho" href="login.php">Fazer login</a></p>
        </div>
    </div>
</body>
</html>
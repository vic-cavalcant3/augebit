<?php
// login.php - Página de login da Augebit
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Augebit - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../img/Elemento.png">
    <style>
        :root {
            --primary-color: #6c63ff;
            --text-color: #2d2d2d;
            --light-gray: #666;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            color: var(--text-color);
            background: #e3e3e3;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header */
               .container { 
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo img { height: 45px; }

        /* Main Content */
        main {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 4rem 0;
        }

        /* Login Container */
        .login-container {
            max-width: 580px;
            width: 100%;
            margin: 0 auto;
            padding: 3rem 2.5rem;
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px rgba(108, 99, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-header img {
            height: 5% ;
        }

        .login-header p {
            color: var(--light-gray);
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 0.875rem 1.25rem;
            border: 2px solid #e0e0e0;
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: var(--transition);
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.2);
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1.5rem 0;
        }

        a.forgot-password {
            color: var(--primary-color);
            font-weight: 500;
            transition: var(--transition);
        }

        a.forgot-password:hover {
            opacity: 0.8;
        }

        /* Login Button */
        .btn-login {
            width: 100%;
            padding: 1rem;
            background: var(--primary-color);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 0.75rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(108, 99, 255, 0.3);
        }

        .signup-text {
            text-align: center;
            margin-top: 2rem;
            color: var(--light-gray);
        }

        .signup-text a {
            color: var(--primary-color);
            font-weight: 500;
            transition: var(--transition);
        }

        .signup-text a:hover {
            opacity: 0.8;
        }

        /* Responsivo */
        @media (max-width: 640px) {
            .login-container {
                padding: 2rem 1.5rem;
                margin: 0 1rem;
            }
            
            .options {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    
    <main>
        <div class="login-container">

            <div class="login-header">
            <img src="../img/logoQualidade.png" alt="Augebit">
            </div>
            
            <form>
            <div class="form-group">
                    <label>Nome</label>
                    <input type="text" required>
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" required>
                </div>
                
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" required>
                </div>
                
                <div class="options">
                    <a href="#" class="forgot-password">Esqueceu a senha?</a>
                </div>
                
                <button type="submit" class="btn-login">Entrar</button>
            </form>
            
            <p class="signup-text">
                Não tem uma conta? <a href="cadastro.php">Criar conta</a>
            </p>
        </div>
    </main>
</body>
</html>
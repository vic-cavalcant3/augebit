<?php
// index.php - Página inicial profissional da Augebit
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AUGEBIT</title>
    <!-- Fonte Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6c63ff;
            --text-color: #2d2d2d;
            --light-gray: #666;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Reset e tipografia */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            color: var(--text-color); 
            line-height: 1.6;
            overflow-x: hidden;
        }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* Cabeçalho */
        header { 
            padding: 1.5rem 0;
            position: sticky;
            top: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
        }
        .container { 
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo img { 
            height: 45px;
    
        }
        nav {
            display: flex;
            flex-direction: row ;
        }
        nav ul { 
            display: flex; 
            gap: 2.5rem; 
        }
        nav a { 
            font-weight: 500; 
            position: relative;
            padding: 0.5rem 0;
            transition: var(--transition);
        }
        nav ul li a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: var(--primary-color);
        transition: var(--transition);
    }
    nav ul li a:hover::after,
    nav ul li a.active::after {
        width: 100%;
    }
       
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: calc(100vh - 100px);
            padding: 4rem 0;
            margin: 0 auto;
        }
        .hero-text {
            flex: 0 1 600px;
            padding-right: 4rem;
        }
        .hero-text h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .hero-text p {
            font-size: 1.125rem;
            color: var(--light-gray);
            margin-bottom: 2.5rem;
            max-width: 480px;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2.25rem;
            font-size: 1rem;
            font-weight: 600;
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            color: var(--primary-color);
            transition: var(--transition);
        }
        .btn:hover {
            background-color: var(--primary-color);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(108, 99, 255, 0.25);
        }
        .hero-image {
            flex: 0 1 600px;
            position: relative;
        }
        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 1rem;
            transform: translateY(0);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* Responsivo */
        @media (max-width: 1024px) {
            .container {
                padding: 0 1.5rem;
            }
            .hero {
                flex-direction: column-reverse;
                text-align: center;
                gap: 3rem;
                padding: 6rem 0 4rem;
            }
            .hero-text {
                padding-right: 0;
                max-width: 680px;
            }
            .hero-text h1 {
                font-size: 2.75rem;
            }
            .hero-text p {
                margin: 0 auto 2.5rem;
            }
        }

        @media (max-width: 640px) {
            .container {
                padding: 0 1rem;
            }
            nav ul {
                gap: 1.5rem;
            }
            .hero-text h1 {
                font-size: 2.25rem;
            }
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
        .btn-header {
        display: inline-flex;
        align-items: center;
        padding: 0.75rem 1.75rem;
        font-size: 0.9375rem;
        font-weight: 600;
        border: 2px solid var(--primary-color);
        border-radius: 50px;
        color: var(--primary-color);
        transition: var(--transition);
        margin-left: 2rem;
    }

    .btn-header:hover {
        background-color: var(--primary-color);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(108, 99, 255, 0.25);
    }

    /* Ajustes no container do header para espaçamento */
    nav {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    /* Ajustes Responsivos */
    @media (max-width: 1024px) {
        .btn-header {
            margin-left: 1.5rem;
            padding: 0.625rem 1.5rem;
        }
        nav ul {
            gap: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .btn-header {
            display: none;
        }
        nav ul {
            gap: 1rem;
        }
    }
    </style>
</head>
<body>
<header>
    <div class="container">
        <a href="index.php" class="logo"><img src="src/img/logo.png" alt="Augebit"></a>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="./avaliacao/avaliacao.php">Avaliações</a></li>
                <li><a href="#">Cultura</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
            <a href="#" class="btn-header">Cadastro</a>
        </nav>
    </div>
</header>
    <main>
        <section class="hero container">
            <div class="hero-text">
                <h1>Design estratégico<br>e funcional.</h1>
                <p>Transformamos ideias em soluções tangíveis através de um design centrado no usuário.</p>
                <a href="#" class="btn">Saiba mais</a>
            </div>
            <div class="hero-image">
                <img src="src/img/Elemento.png" alt="Projetos de design industrial">
            </div>
        </section>
    </main>
</body>
</html>
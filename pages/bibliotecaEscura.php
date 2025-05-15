<?php
// biblioteca.php - Biblioteca Multimídia Augebit
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Augebit - Biblioteca Multimídia</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    :root {
    --primary-color: #6c63ff;
    --text-color: #2d2d2d;
    --light-gray: #666;
    --dark-white:rgb(194, 194, 194);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

* { margin: 0; padding: 0; box-sizing: border-box; }
body { 
    font-family: 'Inter', sans-serif; 
    color: var(--text-color);
    background: #000;
}

header { 
    padding: 1.5rem 0;
    position: sticky;
    top: 0;
    background: rgba(0, 0, 0, 0.95);
    backdrop-filter: blur(10px);
    z-index: 1000;
}
.container { 
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 2rem;
}
.logo img { height: 45px; }

/* Filtros */
.filters {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin: 2rem 0;
}

.filter-btn {
    padding: 0.5rem 1.25rem;
    border-radius: 50px;
    background: #000;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 2.25rem;
    font-size: 0.875rem;
    font-weight: 600;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    transition: var(--transition);
}


.filter-btn:hover {
    background-color: var(--primary-color);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(108, 99, 255, 0.25);
}

.filter-btn.active {
    border-color: var(--primary-color);
    background: var(--primary-color);
    color: #fff;
}

/* Grid de Conteúdo */
.content-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
    padding: 2rem 0;
}

.resource-card {
    background: #000;
    border-radius: 1rem;
    padding: 1.5rem;
    transition: var(--transition);
    border: 2px solid transparent;
}

.resource-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(108, 99, 255, 0.1);
    border-color: var(--primary-color);
}

.resource-type {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.article { background:rgb(40, 50, 58); color: #1a73e8; }
.video { background:rgb(85, 72, 71); color: #d93025; }
.podcast { background:rgb(56, 50, 61); color: #8a4dff; }
.ebook { background:rgb(37, 43, 38); color: #188038; }

.resource-card h3 {
    font-size: 1.25rem;
    color: var(--dark-white);
    margin-bottom: 0.75rem;
}

.resource-card p {
    color: var(--dark-white);
    margin-bottom: 1rem;
    line-height: 1.5;
}

.resource-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
}

.resource-link svg {
    width: 18px;
    height: 18px;
    transition: var(--transition);
}

.resource-link:hover svg {
    transform: translateX(3px);
}

/* Categorias */
.category-section {
    margin: 4rem 0;
}

.category-title {
    color: var(--dark-white);
    font-size: 2rem;
    margin-bottom: 2rem;
    position: relative;
    padding-left: 1.5rem;
}

.category-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 8px;
    height: 80%;
    background: var(--primary-color);
    border-radius: 4px;
}

/* Responsivo */
@media (max-width: 768px) {
    .container {
        padding: 0 1.5rem;
    }
    
    .category-title {
        font-size: 1.75rem;
    }
}
</style>
<body>
<header>
    <div class="container">
        <a href="#" class="logo"><img src="src/img/logo.png" alt="Augebit"></a>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Portfólio</a></li>
                <li><a href="#">Cultura</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

    <main class="container">
        <!-- Filtros -->
        <div class="filters">
            <button class="filter-btn active">Todos</button>
            <button class="filter-btn">Artigos</button>
            <button class="filter-btn">Vídeos</button>
            <button class="filter-btn">Podcasts</button>
            <button class="filter-btn">E-books</button>
        </div>

        <!-- Saúde Mental -->
        <section class="category-section">
            <h2 class="category-title">Saúde Mental</h2>
            <div class="content-grid">
                <div class="resource-card">
                    <div class="resource-type article">Artigo</div>
                    <h3>Gerenciando o Estresse no Ambiente Corporativo</h3>
                    <p>Técnicas comprovadas para reduzir a ansiedade e melhorar a produtividade.</p>
                    <a href="#" class="resource-link">
                        Acessar
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-type video">Vídeo</div>
                    <h3>Mindfulness para Iniciantes</h3>
                    <p>Guia prático de 15 minutos para meditação no local de trabalho.</p>
                    <a href="#" class="resource-link">
                        Assistir
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Finanças Pessoais -->
        <section class="category-section">
            <h2 class="category-title">Finanças Pessoais</h2>
            <div class="content-grid">
                <div class="resource-card">
                    <div class="resource-type ebook">E-book</div>
                    <h3>Investindo para o Futuro</h3>
                    <p>Guia completo para planejamento financeiro e investimentos conscientes.</p>
                    <a href="#" class="resource-link">
                        Baixar
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-type podcast">Podcast</div>
                    <h3>Hábitos Financeiros Saudáveis</h3>
                    <p>Entrevista com especialistas em educação financeira corporativa.</p>
                    <a href="#" class="resource-link">
                        Ouvir
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Carreira -->
        <section class="category-section">
            <h2 class="category-title">Desenvolvimento de Carreira</h2>
            <div class="content-grid">
                <!-- Conteúdo similar -->
            </div>
        </section>

        <!-- Equilíbrio Vida-Trabalho -->
        <section class="category-section">
            <h2 class="category-title">Equilíbrio Vida-Trabalho</h2>
            <div class="content-grid">
                <!-- Conteúdo similar -->
            </div>
        </section>
    </main>
</body>
</html>
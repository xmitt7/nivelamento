<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--link para icones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <!--header/Navbar-->
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">Saúde Mental e Bem-Estar</h2>
            </a>
            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>
                <li class="nav-item">
                    <a href="#heropage" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">fale Conosco</a>
                </li>
                <li class="nav-item">
                    <a href="view/login.php" class="nav-link">login</a>
                </li>
            </ul>
            <button id="menu-open-button" class="fas fa-bars"></button>

        </nav>
    </header>

    <main>
        <section class="hero-section" id="heropage">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Bem-vindo ao nosso site de Saúde Mental e Bem-Estar!</h2>
                    <h3 class="subtitle">Cuidando da sua mente, promovendo o seu bem-estar.</h3>
                    <p class="description">Nosso site é dedicado a fornecer recursos, informações e apoio para promover a saúde mental e o bem-estar. Aqui, você encontrará uma variedade de artigos, dicas e ferramentas para ajudá-lo a cuidar da sua saúde mental, lidar com o estresse, ansiedade e outros desafios emocionais. Estamos comprometidos em criar um espaço acolhedor e informativo para que você possa encontrar o suporte necessário para viver uma vida mais saudável e equilibrada.</p>

                    <div class="buttons">
                        <a href="#" class="button order-now">Order now</a>
                        <a href="#" class="button contact-us">Contact us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="./assets/img/saude mental/ChatGPT Image 11 de fev. de 2026, 21_00_59.png" alt="Hero" class="hero-image">
                </div>
            </div>
        </section>

        <section class="about-section" id="about">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="./assets/img/saude mental/ChatGPT Image 18 de fev. de 2026, 01_39_02.png" alt="About" class="about-image">
                    
                </div>
                <div class="about-details">
                    <h2 class="section-title">Sobre Nós</h2>
                    <p class="text">Somos uma equipe dedicada a promover a saúde mental e o bem-estar. Nosso objetivo é fornecer recursos, informações e apoio para ajudar as pessoas a cuidar de sua saúde mental, lidar com desafios emocionais e viver uma vida mais equilibrada. Acreditamos que a saúde mental é fundamental para o bem-estar geral e estamos comprometidos em criar um espaço acolhedor e informativo para todos que buscam apoio e orientação.</p>
                </div>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <h2 class="section-title">Entre em Contato</h2>
            <div class="section-content">
                <ul class=contact-info-list>
                    <li class="contact-info">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>av. paulo schroeder 1138, Joinville, SC</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-envelope"></i>
                        <p>contato@saudemental.com</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-phone"></i>
                        <p>(47) 9999-9999</p>
                    </li>
                </ul>
                <form action="#" class="contact-form">
                    <input type="text" placeholder="Nome" class="form-input" required>
                    <input type="email" placeholder="Email" class="form-input" required>
                    <textarea placeholder="Mensagem" class="form-input" required></textarea>
                    <button type="submit" class="submit-button">Enviar</button>
            </div>
        </section>


    </main>
    <script src="./assets/js/script.js"></script>
</body>

</html>
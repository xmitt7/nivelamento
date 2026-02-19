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
                    <a href="#depressao" class="nav-link">Depressão</a>
                </li>
                <li class="nav-item">
                    <a href="#ansiedade" class="nav-link">Ansiedade</a>
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
                    <h2 class="title">Sua saúde mental importa.</h2>

                    <h3 class="subtitle">
                        Um espaço seguro para entender, cuidar e fortalecer sua mente.
                    </h3>

                    <p class="description">
                        Criamos este site para oferecer informações confiáveis, orientação prática e apoio emocional
                        sobre temas como ansiedade, depressão, estresse e bem-estar psicológico.
                        Aqui você encontra conteúdos claros, acolhedores e baseados em conhecimento,
                        pensados para ajudar você a enfrentar desafios emocionais com mais consciência,
                        equilíbrio e segurança.
                    </p>

                    <div class="buttons">
                        <a href="#contact" class="button contact-us">Fale Conosco</a>
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
                    <p class="text">
                        Somos uma iniciativa dedicada à promoção da saúde mental e do bem-estar emocional.
                        Nosso propósito é tornar a informação acessível, clara e acolhedora, ajudando
                        pessoas a compreenderem melhor suas emoções, enfrentarem desafios psicológicos
                        e desenvolverem uma relação mais saudável consigo mesmas.
                        Acreditamos que cuidar da mente é essencial para uma vida equilibrada,
                        e estamos comprometidos em oferecer um espaço seguro, informativo e respeitoso para todos.
                    </p>

                </div>
            </div>
        </section>

        <section class="about-section depressao" id="depressao">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="./assets/img/saude mental/depressao.png" alt="Depressão" class="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title">Depressão</h2>
                    <p class="text">
                        A depressão é um transtorno mental que afeta o humor, os pensamentos e o comportamento.
                        Ela vai muito além da tristeza passageira, podendo causar desânimo constante, falta de
                        energia, perda de interesse em atividades antes prazerosas, alterações no sono e no apetite.
                        Em casos mais graves, pode gerar sentimentos de culpa excessiva, inutilidade e pensamentos negativos recorrentes.
                        O tratamento pode envolver acompanhamento psicológico, psiquiátrico e mudanças no estilo de vida.
                    </p>
                </div>
            </div>
        </section>

        <section class="about-section ansiedade" id="ansiedade">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="./assets/img/saude mental/ansiedade.png" alt="Ansiedade" class="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title">Ansiedade</h2>
                    <p class="text">
                        A ansiedade é uma reação natural do corpo diante de situações de perigo ou pressão.
                        No entanto, quando se torna intensa, frequente e desproporcional, pode se transformar
                        em um transtorno. Entre os principais sintomas estão preocupação excessiva, tensão constante,
                        irritabilidade, dificuldade de concentração, insônia e sintomas físicos como taquicardia
                        e falta de ar. O tratamento pode incluir terapia, técnicas de respiração, atividade física
                        e, em alguns casos, acompanhamento médico.
                    </p>
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
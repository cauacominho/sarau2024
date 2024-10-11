<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CONFIG - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT-AWESOME CONFIG - ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MATERIALS GOOGLE CONFIG - ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- CSS CONFIG  -->
    <link rel="stylesheet" href="./src/css/global.css">

    <title>Sarau Cultural LF - 2024</title>

</head>

<body class="body">

    <div class="container d-lg-none d-flex justify-content-between align-items-center mt-5">
        <a class="text-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            <span class="material-symbols-outlined pt-2">
                menu
            </span>
        </a>
        <a href="./participantes" class="btn-default-line">Ver participantes</a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block mt-3 pb-5">
        <div class="container d-flex justify-content-between">
            <div class="navbar-nav d-flex justify-content-evenly">
                <a class="nav-link" href="#sobre">Sobre</a>
                <a class="nav-link" href="#cronograma">Cronograma</a>
                <a class="nav-link" href="#inscricao">Inscreva-se</a>
                <a class="nav-link" href="#midias">Mídias</a>
                <a class="nav-link" href="#projeto">Sobre o site</a>
            </div>
            <a href="./participantes" class="btn-default-line">Ver participantes</a>
        </div>
    </nav>

    <div class="image-container d-flex justify-content-center align-items-center mt-5">
        <img src="./src/img/artep.png" alt="arte1" class="img-fluid">
    </div>

    <div style="height: 200px;"></div>

    <div class="sec-2" id="sobre">
        <div class="container text-light fs-5 py-5">
            <p>
                Bem-vindo ao Sarau Cultural com o tema anos 2000 a 2024, um evento que celebra as transformações artísticas, culturais e tecnológicas que marcaram as últimas duas décadas. Este sarau é um espaço aberto para a expressão criativa, onde artistas, músicos, poetas e performers se reúnem para compartilhar suas interpretações e experiências desse período tão dinâmico.
            </p>
            <p>
                Ao longo do evento, exploraremos as diversas manifestações culturais que emergiram entre 2000 e 2024, desde a revolução das redes sociais e o impacto da internet na comunicação, até as inovações na música, no cinema e nas artes visuais. Através de apresentações ao vivo, exibições de arte e discussões interativas, refletiremos sobre como essas mudanças moldaram nossa sociedade e continuam a influenciar nosso modo de viver.
            </p>
            <p>
                Participe dessa jornada única e mergulhe em um universo de criatividade e reflexão, onde passado e presente se encontram para celebrar o que há de mais vibrante na cultura contemporânea. Este é mais do que um evento; é um convite para reviver e reimaginar os momentos que definiram as últimas duas décadas.
            </p>
            <p>
                Junte-se a nós e seja parte dessa celebração cultural inesquecível!
            </p>
        </div>
    </div>

    <div style="height: 100px;"></div>

    <div class="container">

        <div class="font-italiana title text-light mb-3">
            Cronograma Sarau 2024
        </div>

        <div id="cronograma" class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h3>Data</h3>
                            <div class="fs-5">21 de novembro de 2024</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h3>Horário</h3>
                            <div class="fs-5">19h às 22h50</div>
                            <div class="opacity-50">Horário normal de aula</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h3>Participantes</h3>
                            <div class="fs-5">19h15</div>
                            <div class="opacity-50">Os alunos participantes e participantes de fora irão se organizar às 19:15</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h3>Alunos</h3>
                            <div class="fs-5">19h30</div>
                            <div class="opacity-50">Os alunos não participantes irão descer às 19:30</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h3>Particiaçãodo sorteio do Instagram</h3>
                            <div class="fs-5">Até 21/11 às 19h</div>
                            <div class="opacity-50">Sorteio feito no Instagram. <a href="#" class="fw-bold">Ver sobre</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 150px;"></div>

        <div class="container">
            <div class="row" id="inscricao">
                <div class="col-md-6 text-center mb-4">
                    <div class="images">
                        <img class="set-img" src="./src/img/dancando.png" alt="">
                        <img class="set-img" src="./src/img/cantor.png" alt="">
                        <img class="set-img" src="./src/img/tocando.png" alt="">

                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="font-italiana title text-light mb-3">Participe do Sarau!</h2>
                    <p class="opacity-50 text-light pb-3">
                        Traga sua arte, música, poesia ou performance e compartilhe sua visão sobre as últimas duas décadas! Junte-se a nós para celebrar a cultura contemporânea em um evento cheio de criatividade e expressão. Inscreva-se e faça parte dessa experiência única.
                    </p>
                    <a href="./inscription.php" class="btn-default-line">Faça sua inscrição aqui</a>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 150px;"></div>

    <div class="sec-3">
        <div style="height: 300px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <div class="font-italiana title text-light mb-2">
                Acompanhe as
                fotos do evento
            </div>

            <a id="midias" href="#" class="d-flex justify-content-center align-items-center text-primary fs-3">
                <span class="material-symbols-outlined fs-3">
                    open_in_new
                </span>
                <div>https://drive.google.com/</div>
            </a>
        </div>
    </div>


    <div style="height: 150px;"></div>


    <footer class="text-light py-5" id="projeto">
        <div class="container">
            <div class="row align-items-center">
                <!-- Coluna 1 -->
                <div class="col-md-4 text-center text-md-start mb-5 mb-md-3">
                    <h5 class="text-uppercase">Sobre o Projeto</h5>
                    <p class="mb-1"><i class="fa-solid fa-code me-1"></i> Caua Cominho</p>
                    <a href="https://github.com/cauacominho?tab=repositories" class="text-light mb-0"><i class="fas fa-code-branch me-2"></i> Projeto open-source <i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
                <!-- Coluna 2 -->
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <h5 class="text-uppercase">Escola</h5>
                    <p class="mb-0">Escola Municipal Dr. Leandro Franceschini - 2024</p>
                </div>
                <!-- Coluna 3 -->
                <div class="col-md-4 text-center text-md-end">
                    <h5 class="text-uppercase">Redes Sociais</h5>
                    <a href="https://www.linkedin.com/in/cauacominho/" class="text-light me-3" target="_blank" aria-label="LinkedIn">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="https://github.com/cauacominho" class="text-light me-3" target="_blank" aria-label="GitHub">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                    <a href="#" class="text-light" target="_blank" aria-label="Twitter">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="small mb-0">&copy; 2024 Caua Cominho. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>



    <!-- SIDEBAR -->
    <?php require "./src/widgets/navigation/sidebar.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
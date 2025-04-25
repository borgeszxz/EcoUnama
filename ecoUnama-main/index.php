<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOOTSTRAP ICONS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ===== BOOTSTRAP ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="styles/initPage.css">
    <link rel="stylesheet" href="styles/sobre.css">
    <link rel="stylesheet" href="styles/info.css">
    <link rel="stylesheet" href="styles/saibaMais.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>SerRecicla</title>
</head>

<body>
    <!-- ===== SECTION INICIAL ===== -->
    <section class="initPage" id="initPage">
        <header>
            <nav>
                <a class="logo" href="index.php"><i class="bi bi-arrow-repeat"></i> SERRECICLA</a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a class="topicos" href="#initPage">INICIO</a></li>
                    <li><a class="topicos" href="#sobre">SOBRE</a></li>
                    <li><a class="topicos" href="#contacts">CONTATOS</a></li>
                    <li><a class="topicos" href="#saibaMais">SERVICOS</a></li>
                </ul>
            </nav>
        </header>

        <div class="containerDestaque hidden">
            <h1 class="hidden">EcoUNAMA</h1>
            <h5 class="hidden">Cada entrega conta,<br>
                cada dado importa.
            </h5>
            <button class="botaoDestaque hidden" id="botaoReserva"><a href="#sobre">Saiba mais...</a></button>
        </div>
    </section>

    <!-- ===== SEGUNDA SECTION ===== -->
    <section class="sobre" id="sobre">
        <div class="paraiso1">
            <h1 class="tittleParaiso1 hidden-up ">Ser Recicla: <span class="destaqueText1">Juntos por um Futuro Melhor.</span></h1>
        </div>
        <div class="containerSobre">
            <!-- Container dos cards -->
            <div class="cards-container">
                <!-- Card 1 -->
                <div class="card-custom hidden-up">
                    <h5 class="card-title">
                        <i class="bi bi-globe-americas"></i> Compromisso com o Futuro
                    </h5>
                    <p class="card-text">
                        Em 2025, Belém será sede da COP 30, e o Ser Recicla surge como uma resposta educativa e inovadora às urgências ambientais.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="card-custom hidden-up">
                    <h5 class="card-title">
                        <i class="bi bi-lightbulb"></i> Tecnologia e Educação
                    </h5>
                    <p class="card-text">
                        O Ser Recicla une ferramentas tecnológicas e práticas pedagógicas para ensinar a importância da reciclagem e da consciência ambiental.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="card-custom hidden-up">
                    <h5 class="card-title">
                        <i class="bi bi-recycle"></i> Ação Sustentável
                    </h5>
                    <p class="card-text">
                        Mais do que um projeto, o Ser Recicla é um movimento com ações práticas que mostram como pequenas atitudes geram grandes mudanças.
                    </p>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <a class="cta" href="#saibaMais">
                <span class="next">NEXT</span>
                <span>
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                        </g>
                    </svg>
                </span>
            </a>
        </div>
    </section>

    <!-- ===== SECTION DE FITA DE MOTIVACOES ===== -->
    <section class="fitaInformacao">
        <div class="containerPalavras">
            <h6>Reciclar é cuidar do futuro!</h6>
            <h6 class="verde">Natureza pede: reduza, reutilize, recicle!</h6>
            <h6>Mude o mundo, comece pelo seu lixo.</h6>
            <h6 class="verde">Mais verde, menos desperdício!</h6>
            <h6>Sua atitude hoje transforma o amanhã.</h6>
        </div>
    </section>

    <!-- ===== SECTION PARA SABER MAIS SOBRE O PROJETO ===== -->
    <section class="saibaMais" id="saibaMais">
        <div class="container">
            <img class="iconSimble hidden-up" src="img/simbleRecicle.png" alt="Ícone de Reciclagem" />

            <div class="boxSaiba">
                <h2 class="hidden">
                    Cada escolha <span class="verde">verde</span> que você faz hoje planta esperança no amanhã do planeta.
                </h2>
                <h6 class="hidden-right">
                    O futuro começa com pequenas ações. Separar o lixo, reutilizar, reciclar... são gestos simples que ecoam na natureza. Quando cuidamos do nosso planeta, estamos cuidando de nós mesmos e de todos que ainda virão. Faça a diferença. Seja a mudança que o mundo precisa.
                </h6>

                <div class="btnWrapperAnimado">
                    <div class="btnLinkAnimado">
                        <a href="pages/pageRecicla.php">Saiba Mais</a>
                        <div class="btnIconAnimado">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                                <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="footer hidden-up" id="contacts">
        <footer class="footer">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
                <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/UnamaOficial">
                        <i class="bi bi-facebook"></i>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/school/unama/posts/?feedView=all">
                        <i class="bi bi-linkedin"></i>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/computacaounamabelem?igsh=dmU1a21lOWF2b3d1">
                        <i class="bi bi-instagram"></i>
                    </a></li>
            </ul>
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="#initPage">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="#sobre">About</a></li>
                <li class="menu__item"><a class="menu__link" href="#saibaMais">Services</a></li>
                <li class="menu__item"><a class="menu__link" href="img/team.txt" download="team">Team</a></li>
                <li class="menu__item"><a class="menu__link" href="#contacts">Contact</a></li>

            </ul>
            <p>&copy;2025 Cataquese | All Rights Reserved</p>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script src="scripts/efeitoScroll.js"></script>
    <script src="scripts/mobileNav.js"></script>
</body>

</html>
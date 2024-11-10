<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Padoca</title>
        <link rel="stylesheet" href="Css/reset.css">
        <link rel="stylesheet" href="Css/index.css">
        <link rel="shortcut icon" href="../padoca/Imagens/bread-icon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
    </head>

    <body>
        <header>
            <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow-lg p-3 mb-5 bg-white rounded"> <!--Barra Superior-->
                <div class="container-fluid">
                    <a class="navbar-brand mb-0 h1" href="index.php">
                        Padoca
                    </a>
                    <p>O sistema da sua padaria em boas mãos</p>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="termosdeusos.html">Termos</a>
                            </li>
                        
                        </ul>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#notifications">
                            Notificações <span class="badge text-bg-success">3</span>
                        </button>
                        <div class="mw-auto" style="width: 7px;"></div>
                        <a class="btn btn-outline-success" href="login.php">Login</a>
                        <div class="mw-auto" style="width: 7px;"></div>
                        <a class="btn btn-outline-success" href="cadastre-se.php">Cadastre-se</a>
                    </div>
                </div>
            </nav>

            <!--Aquela mensagem de login que aparece-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div class="mh-auto" style="height: 10px;"></div>
                            <a href="Login.html" class="btn btn-outline-success">Esqueci a senha</a>
                        </div>
                        <div class="modal-footer">
                            <a href="Cadastre-se.php" class="btn btn-outline-success">Cadastre-se</a>
                            <a href="login.php" class="btn btn-outline-success">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="modal fade" id="notifications" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Notificações</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="modal-dialog">Agora nós temos a área de suporte ao usuário</p>
                            <p class="modal-dialog">Você pode conferir quem são os criadores na aba Criadores</p>
                            <p class="modal-dialog">Faça seu login ou cadastro para conferir suas informações</p>
                        </div>
                        <div class="modal-footer">
                            <!--Fundo onde tá os botões no outro-->
                        </div>
                    </div>
                </div>
            </div>           
        </header>

        <section class="banner">
            <div class="card mx-auto border-success border-bottom img-card"> <!--Card inicial grande-->
                <img src="Imagens/images/padoca-banner.jpeg" class="card-img img-fluid" alt="...">
                <div class="card-img-overlay">
                </div>
            </div>
        </section>

        <div class="main-content">
            <main>

                <div class="main-top">
                    <section class="vantagens">
                        <div class="card-group border-success mb-3 mx-auto"> <!--Grupo de Cards que aparecem com imagem-->
                            <div class="card border-success mb-3"> <!--Card 1-->
                                <div class="card-body">
                                    <h5 class="card-title">Facilidade</h5>
                                    <p class="card-text">Gerencie o estoque de sua padaria com muito mais facilidade e assertividade com o sistema de gerenciamento Padoca. Faça o seu cadastro para ter todos esses privilégios gratuitamente.</p>
                                    <p class="card-text"><small class="text-body-secondary">Para todos os usuários</small></p>
                                    <img class="img-index" src="Imagens/icons/facil.png" class="card-img-bottom align-center" alt="...">
                                </div>
                            </div>
                            <div class="card border-success mb-3"> <!--Card 2-->
                                <div class="card-body">
                                    <h5 class="card-title">Confiança</h5>
                                    <p class="card-text">Sistema desenvolvido para ter sua confiança a todo momento, sempre mantendo suas informações em segurança e confidencialidade para obtermos a sua confiança.</p>
                                    <p class="card-text"><small class="text-body-secondary">Sempre confiável</small></p>
                                    <img class="img-index" src="Imagens/icons/confianca.png" class="card-img-bottom align-center" alt="...">
                                </div>
                            </div>
                            <div class="card border-success mb-3"> <!--Card 3-->
                                <div class="card-body">
                                    <h5 class="card-title">Velocidade</h5>
                                    <p class="card-text">Focando para sempre obter o melhor desempenho para acompanhar o seu crescimento de perto, e sempre eficaz e rapido para poder fazer seu gerenciamento do dia a dia.</p>
                                    <p class="card-text"><small class="text-body-secondary">Melhor desempenho</small></p>
                                    <img class="img-index" src="Imagens/icons/rapidez.png" class="card-img-bottom align-center" alt="...">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="main-middle">
                    <div class="card-middle">
                        <section class="destaques">
                            <div class="card text-center mx-auto" style="width: 96%;"> <!--Area de destaques-->
                                <div class="card-header">
                                    <h3>Destaque</h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-center">Consulte nossos termos de usos</p>
                                    <a href="termosdeusos.html" class="btn btn-outline-success">Consultar</a>
                                </div>
                                <div class="card-footer text-muted">
                                    12/11/2024
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="card-middle">
                        <section class="ajuda">
                            <div class="card text-center mx-auto" style="width: 96%;"> <!--Area de destaques-->
                                <div class="card-header">
                                    <h3>Precisa de ajuda?</h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-center">Não deixe de nos contatar</p>
                                    <button class="btn btn-outline-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Suporte ao usuário</button>
                                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                    <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Aba de suporte ao usuário</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                
                                <div class="offcanvas-body">
                                            
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Minha senha não está funcionando
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Entre contato com o suporte do site</div>
                                                </div>
                                            </div>
                            
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Não está carregando a página
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Limpe a memória cache</div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            O site não responde
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Verifique sua conexão</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="card-footer text-muted">
                                Caso ainda tenha alguma dúvida, contate nossa equipe na área Criadores
                            </div>
                                    </div>
                        </section>
                    </div>
                </div>
            </main>
        </div>

        <footer id="footer">
            <div class="footer-container">

                <div class="footer-container-top">
                    
                    <div class="footer-container-top-columns footer-logo">
                        <img src="" alt="Logotipo da Padoca">
                    </div>

                    <section class="nossos-clientes">
                        <div class="footer-container-top-columns footer-clientes footer-logos">
                            <h3>Nossos Clientes</h3>
                            <img src="Imagens/logos/client-le-pain.png" alt="Logotipo da padaria LePain, um cliente de nossos clientes">
                            <img src="Imagens/logos/client-galeria-dos-paes.png" alt="Logotipo da padaria Galeria dos Pães, um cliente de nossos clientes">
                            <img src="Imagens/logos/client-graoipiranga.png" alt="Logotipo da padaria Grão Ipiranga, um cliente de nossos clientes">
                        </div>
                    </section>    

                    <section class="redes-sociais">
                        <div class="footer-container-top-columns footer-social-logos footer-logos">
                            <h3>Nossas redes</h3>
                            <p><a href="https://www.facebook.com/padoca"><img src="Imagens/logos/logo-facebook.png" alt="Logotipo da rede social Facebook em preto e branco"></a></p>
                            <p><a href="https://www.instagram.com/padoca"><img src="Imagens/logos/logo-instagram.png" alt="Logotipo da rede social Instagram em preto e branco"></a></p>
                            <p><a href="https://www.x.com/padoca"><img src="Imagens/logos/logo-twitter.png" alt="Logotipo da rede social Twitter em preto e branco"></p>
                        </div>
                    </section>
                </div>
                
                <div class="footer-container-middle">
                    <section class="localizacao">
                        <div class="footer-container-top-columns footer-clientes footer-logos">
                            <h3>Onde estamos</h3>
                            <p>Nossa empresa está localizada no coração da cidade</p>
                            <iframe src="https://www.google.com/maps/place/A+Padoca/@-23.5160562,-46.6552385,14z/data=!4m10!1m2!2m1!1spadoca!3m6!1s0x94ce5896b0c71df7:0xc4c40274d65278c1!8m2!3d-23.5160562!4d-46.6191896!15sCgZwYWRvY2FaCCIGcGFkb2NhkgEKcmVzdGF1cmFudOABAA!16s%2Fg%2F1ptwblfy1?entry=ttu&g_ep=EgoyMDI0MTEwNi4wIKXMDSoASAFQAw%3D%3D" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </section>
                </div>

                <div class="footer-container-bottom">
                        
                    <div class="div-itens">
                        <ul class="list">
                            <li>Legal</li>
                            <li>Central de privacidade</li>
                            <li>Política de privacidade</li>
                            <li>Cookies</li>
                            <li>Sobre anúncios</li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>

</html>
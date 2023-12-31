<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMaster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="..\css\home.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <!--incio da section header-->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="" class="logo">Task<span>Master</span></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">Sobre</a>
            <a href="#products">Oferecemos</a>
            <a href="#review">Avaliações</a>
            <a href="#contact">Contatos</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-user" id="login-icon"></a>
            <a href="#" id="theme-toggler"><span class="active"><i class="fas fa-moon"></i></span></a>
        </div>
    </header>

    <!-- Pop-up de Login -->
    <div class="login-popup" id="login-popup">
        <div class="login-form">
            <div class="close-icon" onclick="closeLoginPopup()">
                <i class="fas fa-times"></i>
            </div>
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Usuário:</label>
                    <input type="text" class="form-control" name="username" placeholder="Digite seu usuário">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
                </div>
                <div class="signup-invite">
                    Não fez conta ainda? <span onclick="openSignupPopup()">Cadastre-se aqui</span>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>

    <!-- Pop-up de Cadastro -->
    <div class="signup-popup" id="signup-popup">
        <div class="signup-form">
            <div class="close-icon" onclick="closeSignupPopup()">
                <i class="fas fa-times"></i>
            </div>
            <h2>Cadastro</h2>
            <form action="cadastro.php" method="post">
                <div class="form-group">
                    <label for="username">Usuário:</label>
                    <input type="text" class="form-control" name="username" placeholder="Escolha um usuário">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" class="form-control" name="password" placeholder="Crie uma senha">
                </div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>

    <!--fim da section header-->



    <!--INCIO DA HOME-->
    <section class="home" id="home">

        <div class="content">
            <h3>TaskMaster</h3>
            <span>Sua solução em gestão de tarefas e produtividade.</span>
            <p>O TaskMaster é uma ferramenta inovadora que ajuda você a organizar suas tarefas diárias de forma eficiente. Com uma interface intuitiva e recursos poderosos, ele transforma a maneira como você gerencia seu tempo, aumentando sua produtividade e ajudando a alcançar seus objetivos com mais facilidade.</p>
            <a onclick="openSignupPopup()" class="btn">Cadastre-se</a>

        </div>
    </section>

    <!--FIM DA HOME-->

    <!--INICIO DO SOBRE-->
    <section class="about" id="about">
        <h1 class="heading"> <span>Sobre</span> Nós </h1>

        <div class="row">

            <div class="video-container">
                <video src="..\img\about-vid2.mp4" loop autoplay muted></video>
            </div>

            <div class="content">
                <h3>Por que escolher a gente?</h3>
                <p>Na TaskMaster, dedicamo-nos a proporcionar soluções inovadoras para a gestão de tarefas e
                    produtividade. Com nossa tecnologia avançada e interface intuitiva, facilitamos o gerenciamento
                    diário de tarefas para pessoas e empresas de todos os tamanhos.</p>

                <p>Nosso compromisso é com a excelência e a melhoria contínua, garantindo que nossos usuários tenham
                    sempre as melhores ferramentas à disposição. Oferecemos suporte confiável e uma experiência de
                    usuário sem igual, focada na eficiência e na simplicidade.</p>
                <a href="#" class="btn">Saiba mais</a>
            </div>

        </div>
    </section>

    <!--FIM DO SOBRE-->

    <!--INICIO DOS PRODUTOS-->
    <section class="products" id="products">
        <h1 class="heading"> Conheça as <span>funcionalidades</span> do TaskMaster</h1>

        <div class="box-container">

            <div class="diferenciais">
                <div class="box-diferenciais">
                    <img src="../img/icon1.svg" />
                    <h3>Organização e Produtividade</h3>
                    <p>Com o TaskMaster, gerencie suas tarefas e projetos de forma eficiente. Nossa interface intuitiva
                        permite que você planeje seu dia com facilidade, aumentando sua produtividade.</p>
                </div>
            </div>

            <div class="diferenciais">
                <div class="box-diferenciais">
                    <img src="../img/icon2.svg" />
                    <h3>Facilidade e Flexibilidade</h3>
                    <p>O TaskMaster se adapta ao seu estilo de trabalho. Com ferramentas flexíveis, você pode
                        personalizar o app para atender às suas necessidades, tornando o gerenciamento de tarefas mais
                        simples e eficaz.</p>
                </div>
            </div>

            <div class="diferenciais">
                <div class="box-diferenciais">
                    <img src="../img/icon3.svg" />
                    <h3>Suporte e Confiabilidade</h3>
                    <p>Nossa equipe está sempre disponível para ajudá-lo. Com o TaskMaster, você tem a garantia de um
                        app confiável e um suporte dedicado para auxiliá-lo em todas as suas necessidades.</p>
                </div>
            </div>

        </div>
    </section>

    <!--INICIO DOS ICONES-->
    <h1 class="heading"> Tecnologias <span>Utilizadas</span> </h1>
    <section class="icons-container">

        <div class="icons">
            <img src="../img/icon-5.png" alt="PHP">
            <div class="info">
                <h3>PHP</h3>
                <span>Back-end</span>
            </div>
        </div>

        <div class="icons">
            <img src="../img/icon-4.png" alt="HTML">
            <div class="info">
                <h3>HTML</h3>
                <span>Estrutura da página</span>
            </div>
        </div>

        <div class="icons">
            <img src="../img/icon-3.png" alt="CSS">
            <div class="info">
                <h3>CSS</h3>
                <span>Estilo visual</span>
            </div>
        </div>

        <div class="icons">
            <img src="../img/icon-2.png" alt="JavaScript">
            <div class="info">
                <h3>JavaScript</h3>
                <span>Interatividade</span>
            </div>
        </div>

        <div class="icons">
            <img src="../img/icon-1.png" alt="Bootstrap">
            <div class="info">
                <h3>Bootstrap</h3>
                <span>Design responsivo</span>
            </div>
        </div>

    </section>


    <!--FIM DOS ICONES-->
    <!--FIM DOS PRODUTOS-->
    <!--INICIO DOS CRIADORES-->

    <section class="teachers" id="teachers">

        <h1 class="heading">Desen<span>volvedores</span></h1>

        <div class="swiper teachers-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="../img/marcos.jpg">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>João Marcos</h3>
                </div>


                <div class="swiper-slide slide">
                    <img src="../img/davi.jpeg">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>Lucas Davi</h3>
                </div>


                <div class="swiper-slide slide">
                    <img src="../img/kerven.jpeg">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>Kerven Kildhery</h3>
                </div>


                <div class="swiper-slide slide">
                    <img src="https://media.licdn.com/dms/image/D4D03AQGdb_aYrYVK1w/profile-displayphoto-shrink_800_800/0/1678224832394?e=1707350400&v=beta&t=P4Sq1W-gOYgRn1ju_tLx6IquC2qhDv3Ci5YWjOuvukw">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>Jean Arruda</h3>
                </div>




                <div class="swiper-pagination"></div>

            </div>
    </section>

    <!--Fim dos funcinarios-->

    <!--INICIO DAS AVALICOES-->

    <section class="review" id="review">

        <h1 class="heading"> Avaliações dos <span>Clientes</span></h1>

        <div class="box-container">

            <!-- Avaliação 1 -->
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>O TaskMaster mudou a maneira como organizo meu dia. É incrivelmente fácil de usar e me ajuda
                    a ficar em dia com todas as minhas tarefas!</p>
                <div class="user">
                    <img src="../img/pic-1.jpg" alt="Foto de Anne">
                    <div class="user-info">
                        <h3>Anne</h3>
                        <span>cliente satisfeita</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <!-- Avaliação 2 -->
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>O TaskMaster mudou a maneira como organizo meu dia. É incrivelmente fácil de usar e me ajuda
                    a ficar em dia com todas as minhas tarefas!</p>
                <div class="user">
                    <img src="../img/pic-2.jpg" alt="Foto de Carlos">
                    <div class="user-info">
                        <h3>Karla</h3>
                        <span>cliente satisfeito</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <!-- Avaliação 3 -->
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>TaskMaster é uma ferramenta essencial para mim agora. A forma como organiza as tarefas é
                    perfeita e o lembrete de tarefas pendentes é super útil.</p>
                <div class="user">
                    <img src="../img/pic-3.jpg" alt="Foto de Maria">
                    <div class="user-info">
                        <h3>Maria</h3>
                        <span>cliente satisfeita</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

        </div>

    </section>


    <!--FIM DAS AVALICOES-->


    <!--INICIO DOS CONTATOS-->
    <section class="contact" id="contact">

        <h1 class="heading"> <span> Fale </span> Conosco</h1>

        <div class="row">
            <form id="myForm">
                <input type="text" placeholder="name" class="box" required>
                <input type="email" placeholder="email" class="box" required>
                <input type="number" placeholder="number" class="box" required>
                <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10" required></textarea>
                <input type="submit" value="send message" class="btn" id="btn">
            </form>
            <div class="image">
                <img src="../img/contact-img.svg" alt="">
            </div>
        </div>
    </section>
    <!--FIM DOS CONTATOS-->

    <!--INICIO DO FOOTER-->
    <section class="footer">
        <div class="credit"> criado por <span> TaskMaster</span>| todos os direitos reservados </div>
    </section>
    <!--FIM DO FOOTER-->



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="..\JS\home.js"></script>


</body>

</html>
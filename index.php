<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/img/favicon.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">

<!-- Folhas de estilos de cada página serão carregadas aqui -->
    <link rel="stylesheet" href="" id="pageCSS">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <title>Mulheres.Tech - Layout 1</title>
</head>

<body>

    <a id="top"></a>

    <div id="wrap">

        <header>
            <a href="home" title="Página inicial">
                <i class="fa-solid fa-laptop-code fa-fw" title="Logotipo do site"></i>
            </a>
            <h1>
                Mulheres.Tech
                <small>A programação é feminina</small>
            </h1>
        </header>

        <nav>
            <a href="home" title="Página inicial"><i class="fa-solid fa-house-chimney fa-fw"></i><span>Início</span></a>
            <a href="contacts" title="Faça contato"><i class="fa-solid fa-comments fa-fw"></i><span>Contatos</span></a>
            <a href="about" title="Sobre a gente"><i class="fa-solid fa-circle-info fa-fw"></i><span>Sobre</span></a>
            <a href="profile" title="Perfil do usuário"><i class="fa-regular fa-user fa-fw"></i></a>
        </nav>

<!-- Bloco de conteúdo que irá aparecer para cada página diferente acessada-->
<main id="content"></main>

        <footer>

            <div id="fsup">
                <nav id="fsocial">
                    <h4>Redes sociais:</h4>
                    <a href="https://facebook.com/Luferat" target="_blank" title="Acesse nosso Facebook">
                        <i class="fa-brands fa-square-facebook fa-fw"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://youtube.com/Luferat" target="_blank" title="Nosso canal no Youtube">
                        <i class="fa-brands fa-square-youtube fa-fw"></i>
                        <span>Youtube</span>
                    </a>
                    <a href="https://github.com/Luferat" target="_blank" title="Acesse nosso GitHub">
                        <i class="fa-brands fa-square-github fa-fw"></i>
                        <span>GitHub</span>
                    </a>
                </nav>

                <nav id="ftools">
                    <h4>Acesso rápido:</h4>
                    <a href="contacts" title="Faça contato conosco">
                        <i class="fa-solid fa-comments fa-fw"></i>
                        <span>Contatos</span>
                    </a>
                    <a href="about" title="Conheça mais">
                        <i class="fa-solid fa-circle-info fa-fw"></i>
                        <span>Sobre</span>
                    </a>
                    <a href="policies" title="Leia as políticas de privacidade">
                        <i class="fa-solid fa-user-lock fa-fw"></i>
                        <span>Sua privacidade</span>
                    </a>
                </nav>

            </div>

            <div id="finf">
            <a href="home" title="Página inicial"><i class="fa-solid fa-house-chimney fa-fw"></i></a>
            <div id="copy">&copy; 2022 Vitória Soares</div>
            <a href="#top" title="Topo da página"><i class="fa-solid fa-circle-up fa-fw"></i></a>
            </div>

        </footer>
        
        <span>&nbsp;</span>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="script.js"></script>

</body>
</html>
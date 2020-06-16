<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icon-trash.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/carousel-noticias.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT0QRmEq57etc7rLJUtlu1XpdH06j4Pr8&callback=initMap" async defer></script>
    <title>Lixo Eletrônico - Deposite aqui!</title>
</head>

<body>
    <header id="home">
        <nav class="navbar navbar-expand-lg navigation border-bottom">
            <a class="navbar-brand" href="#"><img height="50px" src="imagens/icon-trash.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-right">
                    <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#about">Sobre nós</a>
                    <a class="nav-item nav-link" href="#buscar">Buscar</a>
                    <a class="nav-item nav-link" href="#saibaMais">Saiba+</a>
                    <a class="nav-item nav-link" href="#cadastro">Cadastre-se</a>
                </div>
            </div>
        </nav>

        <div class="video-container">
            <video class="video-bg" src="video/video-home.mp4" autoplay="true" loop="true"></video>
        </div>

        <div class="row showcase-top text-center">
            <div class="header-content">
                <h1>Tem lixo eletrônico em casa e não sabe como realizar o descarte?<h1>
                        <h4>Conheça algumas empresas que realizam essa coleta perto de você.</h4>
                        <a href="#buscar" class="btn btn-success btn-buscar">Buscar</a>
            </div>
        </div>

    </header>

    <main>
        <!--about-->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2 class="showcase-left">Lixo Eletrônico Aqui!<br><strong>Sobre nós</strong></h2>
                        <p class="lead showcase-rigth">Projeto acadêmico desenvolvido pelo curso de graduação de Sistemas de Informação da faculdade Multivix<br>com o objetivo de realizar uma intervenção
                            no meio digital com o tema sustentabilidade. Com base em pesquisas realizadas, notou-se a dificuldade da população em saber realizar o descarte correto de lixo eletrônico, a ideia foi desenvolver um site
                            para que empresas possam se cadastrar e informar seus dados para contato e as pessoas pudessem realizar uma busca no site e identificar o local mais próximo de sua casa para o descarte desses tipos de materiais. </p>
                    </div>
                </div>
            </div>
        </section>
        <!--end about-->

        <!--busca-->
        <section id="buscar" class="busca showcase-top">
            <div class="container">
                <div class="col-12 text-center mt-4">
                    <h2 class="titulo-busca"><strong>Busque as empresas mais próximas a você!</strong></h2>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <select class="form-control" id="estados" name="estados">
                            <option value="0">Selecione um Estado</option>
                            <?php
                            include "conexao.php";
                            $busca = $link->query("select * from te_estados");
                            if ($busca || $busca->num_rows > 0) {

                                while ($linha = $busca->fetch_object()) {
                            ?>
                                    <option value="<?= $linha->id_estados ?>">
                                        <?= $linha->nome ?>
                                    </option>
                            <?php

                                }
                            } else {

                                echo "Ocorreu um erro ao buscar os Estados.";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <select class="form-control" id="cidades">
                            <option value="0">Selecione uma cidade</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <button style="width: 100%" class="btn btn-success" id="btnBuscar">Buscar</button>
                    </div>
                </div>
                <div id="dados" class="row">
                </div>
            </div>
        </section>
        <!--end busca-->

        <!--saiba+ -->
        <section id="saibaMais" class="saiba-mais">
            <div class="col-md-12 text-center">
                <h2 class="titulo-mais">Saiba +<br><strong>Notícias e curiosidades</strong></h2>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="showcase-left">
                            <h4><strong>Por que o lixo eletrônico é tão prejudical?</strong></h4>
                            <p style="font-size: 14px;">Eletrônicos quando descartados em lixões, podem liberar substâncias tóxicas na água, solo e ar, como por exemplo, chumbo, arsênio, mercúrio, cobre, cádmio e zinco.
                                Esses materiais podem causar problemas respiratórios e danos ao sistema nervoso, além de prejudicar o meio ambiente. </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="showcase-rigth">
                            <h4><strong>Por que se gera tanto e-lixo no Brasil?</strong></h4>
                            <p>O grande número de lixo eletrônico no Brasil é devido a grande demandas pelos aparelhos eletrônicos. O Brasil lidera o ranking de países da América Latina que mais produzem e.lixo.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="showcase-left">
                            <h4><strong>Mas afinal, o que é lixo eletrônico?</strong></h4>
                            <p style="font-size: 14px;">Todos os aparelhos que dependem do uso de corrente elétrica ou de campos eletromagnéticos são caracterizados eletrônicos. Existem quatro grupos de classificação:</p>
                            <ul class="item">
                                <li><strong>Linha branca:</strong> refrigeradores e congeladores, fogões, lavadoras de roupa e louça, secadoras e condicionadores de ar; </li>
                                <li><strong>Linha marrom:</strong> monitores e televisores de tubo, plasma, LCD e LED, aparelhos de DVD e VHS, equipamentos de áudio e filmadoras;</li>
                                <li><strong>Linha azul:</strong> batedeiras, liquidificadores, ferros elétricos, furadeiras, secadores de cabelo, espremedores de frutas, aspiradores de pó e cafeteiras;</li>
                                <li><strong>Linha verde:</strong> computadores desktop e laptops, acessórios de informática, tablets e telefones celulares.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="showcase-rigth">
                            <h4><strong>Materias primas geradas com a reciclagem</strong></h4>
                            <p>O processo de reciclagem pode transformar eletrônicos em matéria-prima ou subproduto com valor comercial.
                                A suacata eletrônica nos fornece materiais que ganham vida nova e geram renda. Abaixo listaremos alguns produtos extraídos de materiais eletrônicos:
                            </p>
                            <ul class="item">
                                <li><strong>Plásticos:</strong> podem ser reciclados por processo mecânico, químico ou energético;</li>
                                <li><strong>Estanho e cobre:</strong> podem ser obtidos a partir de placas de circuito eletrônico microcomputadores, pelo processo de lixiviação;</li>
                                <li><strong>Alumínio:</strong> o processo de reciclagem inclui retirada de impurezas, picotagem e fundição. O material é derretido e transformado em alumínio líquido, base para lingotes ou chapas de alumínio.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container cta-100 ">
                <div class="container">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">NOTÍCIAS</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="imagem" src="https://cdn-istoedinheiro-ssl.akamaized.net/wp-content/uploads/sites/17/2020/02/lixo_eletronico-768x432.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <h5>Decreto obriga empresas a recolherem lixo eletrônico</h5>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Atualmente, existem, segundo o governo, um total de 173 pontos de coleta de eletroeletrônicos no Brasil. O acordo, agora regulamentado em decreto, prevê que esse...</p>
                                                        </div>
                                                        <div class="mt"> <a href="https://www.istoedinheiro.com.br/decreto-obriga-empresas-a-recolherem-lixo-eletronico/" tabindex="0" class="btn bg-blue-ui white read" target="_blank">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">NOTÍCIAS</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="imagem" src="http://www.engeplus.com.br/cache/noticia/0141/0141948/entenda-as-novas-regras-para-recolhimento-de-lixo-eletronico.jpg?t=20200216083434"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <h5>Entenda as novas regras para recolhimento de lixo eletrônico</h5>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Assinado na última semana pelo presidente Jair Bolsonaro, o decreto 10.240 de 2020 estabelece as regras para implementação do sistema de logística reversa para produtos eletroeletrônicos...</p>
                                                        </div>
                                                        <div class="mt"> <a href="http://www.engeplus.com.br/noticia/geral/2020/entenda-as-novas-regras-para-recolhimento-de-lixo-eletronico" tabindex="0" class="btn bg-blue-ui white read" target="_blank">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">VÍDEOS</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="imagem" src="https://www.saneamentobasico.com.br/wp-content/uploads/2020/03/residuos-solidos-1.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <h5>Lixo eletrônico: visitamos uma cooperativa de reciclagem</h5>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Canaltech. A Coopermiti opera hoje com 30 cooperados em um galpão de 2 mil metros quadrados, onde processa toneladas de lixo eletrônico todos os meses.</p>
                                                        </div>
                                                        <div class="mt"> <a href="https://www.youtube.com/watch?v=-u5enIcOA5w" tabindex="0" class="btn bg-blue-ui white read" target="_blank">Assistir</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->
                                    <div class="carousel-item ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">NOTÍCIAS</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="imagem" src="https://diariodocomercio.com.br/wp-content/uploads/2020/01/lixo-eletronico-131-696x464.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <h5>Brasil é o país que mais produz lixo eletrônico na América Latina</h5>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>O Brasil é quem lidera a posição de produtor de lixo eletrônico na América Latina, ocupa o 7º lugar nesse ranking, ficando atrás de China, Estados Unidos, Japão, Índia...</p>
                                                        </div>
                                                        <div class="mt"> <a href="https://diariodocomercio.com.br/livre/brasil-e-o-pais-que-mais-produz-lixo-eletronico-na-america-latina/" tabindex="0" class="btn bg-blue-ui white read" target="_blank">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">CURIOSIDADES</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="imagem" src="https://cdn4.ecycle.com.br/cache/images/2018-08/50-650-computador-velho.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <h5>Dez coisas para fazer com computador velho </h5>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Computadores não devem ser jogados no lixo comum. Eles possuem diversas peças com resíduos químicos que causam problemas ao entrarem em contato direto...</p>
                                                        </div>
                                                        <div class="mt"> <a href="https://www.ecycle.com.br/component/content/article/48-eletronicos/122-reciclagem-computador.html" tabindex="0" class="btn bg-blue-ui white read" target="_blank">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">CURIOSIDADES</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="imagem" src="https://cdn4.ecycle.com.br/cache/images/guia_da_reciclagem/50-650-placa-750.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <h5>Entenda os processos por trás da reciclagem de equip. eletrônicos </h5>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>A Organização Internacional do Trabalho (OIT) estima que a geração mundial de lixo eletrônico, também conhecido como e-lixo, alcance a ordem de dezenas de milhões... </p>
                                                        </div>
                                                        <div class="mt"> <a href="https://www.ecycle.com.br/component/content/article/44-guia-da-reciclagem/1823-entenda-os-processos-por-tras-da-reciclagem-de-equipamentos-eletronicos.html" tabindex="0" class="btn bg-blue-ui white read" target="_blank">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--.row-->
                                    </div>
                                    <!--.item-->
                                </div>
                                <!--.carousel-inner-->
                            </div>
                            <!--.Carousel-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--end saiba+ -->

        <!--cadastro-->
        <section id="cadastro" class="cadastro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mt-4">
                        <h2 class="showcase-left">Sua empresa recolhe lixo eletrônico?<br><strong>Cadastre-se em nosso site!</strong></h2>
                        <p class="lead showcase-rigth">Preencha o formulário abaixo para cadastro.</p>

                        <div class="d-flex flex-row-reverse">
                            <span>* Campos obrigatórios:</span>
                        </div>

                        <form id="form-cadastro" name="form" action="cadastro.php" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <input class="form-control" name="name" type="text" placeholder="Nome da empresa *" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" name="email" type="email" placeholder="E-mail">
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="Telefone *" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" name="site" type="text" placeholder="Site">
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <select class="form-control" id="coleta" name="coleta" required>
                                        <option value="">Realiza coleta em domicílio? *</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="row text-left ">
                                    <label>Localização: </label><img src="imagens/signs.png" class="img-localizacao" title="A localização precisa facilitará ao usuário a encontrar sua empresa, se possível, preencha todos os campos.">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <select class="form-control" id="estadoCad" name="estadoCad" required>
                                        <option value="0">Selecione um Estado *</option>
                                        <?php
                                        include "conexao.php";
                                        $busca = $link->query("select * from te_estados");
                                        if ($busca || $busca->num_rows > 0) {

                                            while ($linha = $busca->fetch_object()) {
                                        ?>
                                                <option value="<?= $linha->id_estados ?>">
                                                    <?= $linha->nome ?>
                                                </option>
                                        <?php

                                            }
                                        } else {

                                            echo "Ocorreu um erro ao buscar os Estados.";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <select class="form-control" id="cidadeCad" name="cidadeCad" required>
                                        <option value="0">Selecione uma cidade *</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" name="latitude" id="latitude" type="text" placeholder="Latitude">
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" name="longitude" id="longitude" type="text" placeholder="Longitude">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="descricao" name="descricao" style="resize: none" placeholder="Faça uma breve descrição sobre sua empresa *" required></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input class="form-control" id="logo" name="logo" type="text" placeholder="Link da logomarca de sua empresa">
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-success">Enviar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!--end cadastro-->
    </main>

    <footer>
        <!-- Copyright -->
        <div class="page-footer text-center py-3">© 2020 Copyright:
            <a href="#"> LixoEletrônicoAqui.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script>
        $("#estados").on("change", function() {

            $.ajax({
                url: 'cidades.php',
                type: 'POST',
                data: {
                    id: $("#estados").val()
                },
                beforeSend: function() {
                    $("#cidades").html("Carregando...");
                },
                success: function(data) {
                    $("#cidades").css({
                        'display': 'block'
                    });
                    $("#cidades").html(data);
                },
                error: function(data) {
                    $("#cidades").css({
                        'display': 'block'
                    });
                    $("#cidades").html("Houve um erro ao carregar");
                }
            });
        });

        $("#estadoCad").on("change", function() {

            $.ajax({
                url: 'cidades.php',
                type: 'POST',
                data: {
                    id: $("#estadoCad").val()
                },
                beforeSend: function() {
                    $("#cidadeCad").html("Carregando...");
                },
                success: function(data) {
                    $("#cidadeCad").css({
                        'display': 'block'
                    });
                    $("#cidadeCad").html(data);
                },
                error: function(data) {
                    $("#cidadeCad").css({
                        'display': 'block'
                    });
                    $("#cidadeCad").html("Houve um erro ao carregar");
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/formulario.js"></script>
</body>

</html>
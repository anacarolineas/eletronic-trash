<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/carousel-noticias.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navigation border-bottom">
            <a class="navbar-brand" href="#"><img height="50px" src="imagens/icon-trash.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-right">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#about">Sobre nós</a>
                    <a class="nav-item nav-link" href="#">Locais</a>
                    <a class="nav-item nav-link" href="#saibaMais">Saiba+</a>
                    <a class="nav-item nav-link" href="#cadastro">Cadastre-se</a>
                </div>
            </div>
        </nav>

        <div class="video-container">
            <video class="video-bg" src="video/video-home.mp4" autoplay="true" loop="true"></video>
        </div>

        <div class="row text-center">
            <div class="header-content">
                <h1>Tem lixo eletrônico em casa e não sabe como realizar o descarte?<h1>
                        <h4>Conheça algumas empresas que realizam essa coleta perto de você.</h4>
                        <button class="btn btn-success">Buscar</button>
            </div>
        </div>

    </header>

    <main>
        <!--about-->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center pb20">
                        <h2>We Are Wunderkind<br><strong>Something You Love</strong></h2>
                        <p class="lead">We create experiences that <span class="color">transform brands</span>, grow businesses<br>and make people’s lives better. Building brands and driving sales with powerful ideas.</p>
                    </div>

                    <div class="col-sm-6 feature-left">
                        <i class="icon-telescope size-3x color"></i>
                        <i class="icon-telescope back-icon"></i>
                        <div class="feature-left-content">
                            <h4><strong>We're Creative</strong><br>Crafting With Love</h4>
                            <p>Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 feature-left">
                        <i class="icon-circle-compass size-3x color"></i>
                        <i class="icon-circle-compass back-icon"></i>
                        <div class="feature-left-content">
                            <h4><strong>We're Cool Nerds</strong><br>Coding With Fun</h4>
                            <p>Duis vel est nec sapien suscipit gravida. Integer vitae tortor dui. Donec libero quam, euismod sit amet enim ac, varius dictum.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 feature-left">
                        <i class="icon-genius size-3x color"></i>
                        <i class="icon-genius back-icon"></i>
                        <div class="feature-left-content">
                            <h4><strong>We're Passionate</strong><br>Available When You Need Us</h4>
                            <p>Maecenas sit amet eros luctus dui volutpat sollicitudin id vitae est. Vivamus laoreet adipiscing metus vel fermentum. Sed velit.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 feature-left">
                        <i class="icon-layers size-3x color"></i>
                        <i class="icon-layers back-icon"></i>
                        <div class="feature-left-content">
                            <h4><strong>We're Professional</strong><br>New York Based</h4>
                            <p>Integer ornare, tellus eget lobortis cursus, metus enim ultricies eros, vitae porttitor elit sapien quis justo. Duis vitae.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--end about-->

        <!--mapa-->
        <section class="map">
            <div class="container">

            </div>
            <iframe height="550" width="100%" src="https://maps.google.com/maps?q=Renaissance%20New%20York%20Hotel%2057%2C%20New%20York%2C%20USA&t=m&z=17&output=embed&iwloc=near" border="0" marginwidth="0" marginheight="0"></iframe>
        </section>
        <!--end mapa-->

        <!--saiba+ -->
        <section id="saibaMais" class="saiba-mais m-3">
            <div class="col-md-12 text-center">
                <h2>Saiba +<br><strong>Notícias e curiosidades</strong></h2>
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
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">Maio 25</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <a href="#" tabindex="0">
                                                                <h5>News Title</h5>
                                                            </a>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                                        </div>
                                                        <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">Augu 01</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <a href="#" tabindex="0">
                                                                <h5>News Title</h5>
                                                            </a>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                                        </div>
                                                        <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">Augu 01</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <a href="#" tabindex="0">
                                                                <h5>News Title</h5>
                                                            </a>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                                        </div>
                                                        <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Leia mais...</a> </div>
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
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">Augu 01</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <a href="#" tabindex="0">
                                                                <h5>News Title</h5>
                                                            </a>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                                        </div>
                                                        <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">Augu 01</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <a href="#" tabindex="0">
                                                                <h5>News Title</h5>
                                                            </a>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                                        </div>
                                                        <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Leia mais...</a> </div>
                                                        <!--Read More Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item-box-blog">
                                                    <div class="item-box-blog-image">
                                                        <!--Date-->
                                                        <div class="item-box-blog-date bg-blue-ui"> <span class="mon">Augu 01</span> </div>
                                                        <!--Image-->
                                                        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                                                    </div>
                                                    <div class="item-box-blog-body">
                                                        <!--Heading-->
                                                        <div class="item-box-blog-heading">
                                                            <a href="#" tabindex="0">
                                                                <h5>News Title</h5>
                                                            </a>
                                                        </div>
                                                        <!--Text-->
                                                        <div class="item-box-blog-text">
                                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                                        </div>
                                                        <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Leia mais...</a> </div>
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
                    <div class="col-md-12 text-center">
                        <h2>Sua empresa recolhe lixo eletrônico?<br><strong>Cadastre-se em nosso site!</strong></h2>
                        <p class="lead">Preencha o formulário abaixo para cadastro.</p>

                        <form id="form-cadastro">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <input class="form-control" name="name" type="text" placeholder="Nome da empresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" name="email" type="email" placeholder="E-mail">
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" type="tel" name="telefone" placeholder="Telefone">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input class="form-control" name="site" type="text" placeholder="Site">
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <select class="form-control" id="realizaColetaDomicilio">
                                        <option value="0">Realiza coleta em domicílio?</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                            </div>

                            <label class="text-left">Localização:</label>
                            <div class="form-row">
                                <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <input class="form-control" name="latituide" type="text" placeholder="Latitude">
                                </div>
                                <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <input class="form-control" name="longitude" type="text" placeholder="Longitude">
                                </div>
                                <div class="form-group col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <input class="form-control" name="longitude" type="text" placeholder="Número">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="3" style="resize: none" placeholder="Faça uma breve descrição sobre sua empresa"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="uploadImgLogo">Logo da empresa.</label>
                                <input type="file" class="form-control-file" id="uploadImgLogo">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>

</html>
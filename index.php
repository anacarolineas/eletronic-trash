<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                    <a class="nav-item nav-link" href="#">Saiba+</a>
                    <a class="nav-item nav-link" href="#">Cadastre-se</a>
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
        <section class="saiba-mais m-3">
            <div class="col-md-12 text-center">
                <h2>Saiba +<br><strong>Notícias e curiosidades</strong></h2>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-200">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Post title</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
         

            <div class="col-6">

            </div>
        </section>

        <!--end saiba+ -->

        <!--cadastro-->
        <section class="cadastro">
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

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <input class="form-control" name="email" type="email" placeholder="E-mail">
                                    </div>                    
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <input class="form-control" type="tel" name="telefone" placeholder="Telefone">
                                    </div>
                                </div>
                            </div>    

                            <label class="text-left">Localização:</label>  
                            <div class="form-group">
                                <div class="row">                           
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <input class="form-control" name="latituide" type="text" placeholder="Latitude">
                                    </div>                    
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <input class="form-control" name="longitude" type="text" placeholder="Longitude">
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <input class="form-control" name="longitude" type="text" placeholder="Número">
                                    </div>
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
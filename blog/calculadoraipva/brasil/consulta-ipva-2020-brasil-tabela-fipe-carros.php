<!DOCTYPE html>
<html lang="en">
    <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162241736-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162241736-3');
</script>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Calculadora IPVA</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
        <link href="/css/boxicons/css/boxicons.min.css" rel="stylesheet">
    </head>
    <body id="page-top">
      
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" >
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="https://nfeguard.com.br" >NF-e GUARD</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0" >
                        <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="#page-top" >Calculadora</a></li>
                        <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="#about" >Nós Acreditamos</a></li>
                       <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger"  href="#services">Sistemas</a></li>-->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger"  href="#portfolio">Marcas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger"  href="#contact">Contato</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger"  href="https://nfeguard.com.br/blog/calculadoraipva/brasil/consulta-ipva-2020-brasil-tabela-fipe-motos">Motos</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger"  href="https://nfeguard.com.br/blog/calculadoraipva/brasil/consulta-ipva-2020-brasil-tabela-fipe-caminhoes">Caminhões</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Tabela Fipe - Carros</h1>
                        <h2 style="color: white;">Saiba agora o valor do seu IPVA</h2>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <div class="row no-gutters">
                            <form name="formFipe" id="formFipe" method="POST" action="../controller/controllerFipeCaminhoes.php">
          <div class="row no-gutters">
              <div class="col-md-4 form-group pr-md-1">
            <select name="brand" id="brand"  style="width: 100%; border-radius: 4px;" required>
              <option class="form-control" value="">Selecione a marca</option>
            </select>
            <br>
          </div>
          <div class="col-md-4 form-group pr-md-1">
            <select name="vehicles" id="vehicles" style="width: 100%; border-radius: 4px;" required>
              <option class="form-control" value="">Selecione o automóvel</option>
            </select>
            <br>
          </div>
          <div class="col-md-4 form-group pr-md-1">
            <select name="year" id="year" style="width: 100%; border-radius: 4px;" required>
              <option class="form-control" value="">Selecione o ano</option>
            </select>
          </div>
          <br>
          <br>
          
          <div class="col-md-6 form-group pr-md-1">
            <p style="color: white;">
              Valor Tabela FIPE 2020: 
            </p>
            
            <b style="color:white; font-weight:bold; font-size:20px;">
              <p name="preco" id="preco" required></p>
            </b>
          </div>
          <div class="col-md-4 form-group pr-md-1">
            <p style="color: white;">
              Valor IPVA <span style="font-size:12px;">(aproximado 3%)</span>
            </p>
          
            <p name="valoripva" id="valoripva" required></p>
            <br>
          </div>
          <div class="col-md-12 form-group pr-md-1">
             <div class="social-links" style="text-align: center;">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://nfeguard.com.br/blog/calculadoraipva/brasil/consulta-ipva-2020-brasil-tabela-fipe-carros" class="facebook">
              <i class="bx bxl-facebook" style="font-size: 2em;"></i>
            </a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=http://nfeguard.com.br/blog/calculadoraipva/brasil/consulta-ipva-2020-brasil-tabela-fipe-carros" target="_blank" class="linkedin">
              <i class="bx bxl-linkedin" style="font-size: 2em;"></i>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://twitter.com/intent/tweet?text=http://bit.ly/CalculadoraIPVA - Você já se perguntou quanto vai pagar de IPVA esse ano de 2020?" class="twitter">
              <i class="bx bxl-twitter" style="font-size: 2em;"></i>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="whatsapp://send?text=http://nfeguard.com.br/blog/calculadoraipva/brasil/consulta-ipva-2020-brasil-tabela-fipe-carros" data-action="share/whatsapp/share" target="_blank" class="whatsapp" >
              <i class="bx bxl-whatsapp" style="font-size: 2em;" ></i>  
            </a>
            <br><br><center style="color: white;">Compartilhe!</center><br>
        </div>

          </div>

          </div>
       </form>

      
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Nós Acreditamos</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Nós acreditamos em ajudar as pessoas a encontrar exatamente o que ela precisa.</p>
                        <p class="text-white-50 mb-4">Nós acreditamos que a facilidade deve estar ao seu lado.</p>
                        <p class="text-white-50 mb-4">Nós acreditamos que o seu tempo é valioso.</p>
                        <p class="text-white-50 mb-4">Nós acreditamos que o seu negócio é o nosso maior bem.</p>
                       <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Sistemas</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Compras e Orçamento</h3>
                            <p class="text-muted mb-0">Gere e controle ordens de compra, orçamento para empresas e clientes.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">CRM Marketing</h3>
                            <p class="text-muted mb-0">Controle as fases do seu processo de vendas e vincule produtos e/ou serviços em um só lugar.</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </section> -->
        <!-- Portfolio section-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-sm-6" style="text-align: center; margin-top: 35px;">
                        <!--<a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg>"-->
                            <img class="img-fluid" src="/assets/img/volvo_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <!--<div class="project-name">Project Name</div>-->
                            </div></a
                        >
                    </div>
                    <div class="col-lg-3 col-sm-6" style="text-align: center; margin-top: 35px;">
                        <!--<a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg>"-->
                            <img class="img-fluid" src="/assets/img/honda_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <!--<div class="project-name">Project Name</div>-->
                            </div></a
                        >
                    </div>
                    <div class="col-lg-3 col-sm-6" style="text-align: center; margin-top: 35px;">
                       <!-- <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg>"-->
                            <img class="img-fluid" src="/assets/img/ford_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                               <!-- <div class="project-name">Project Name</div>-->
                            </div></a
                        >
                    </div>
                    <div class="col-lg-3 col-sm-6" style="text-align: center; margin-top: 35px;">
                      <!--  <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">-->
                            <img class="img-fluid" src="/assets/img/audi_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                               <!-- <div class="project-name">Project Name</div>-->
                            </div><!--</a>-->
                    </div>
                    <div class="col-lg-3 col-sm-6" style="text-align: center;">
                       <!-- <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg"
                            >--><img class="img-fluid" src="/assets/img/mbenz_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <!--<div class="project-name">Project Name</div>-->
                            </div><!--</a>>-->
                    </div>
                    <div class="col-lg-3 col-sm-6" style="text-align: center;">
                       <!-- <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">-->
                            <img class="img-fluid" src="/assets/img/chevrolet_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                             <!--   <div class="project-name">Project Name</div>-->
                            </div><!--</a>-->
                    </div>
                     <div class="col-lg-3 col-sm-6" style="text-align: center;">
                       <!-- <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg"-->
                            <img class="img-fluid" src="/assets/img/vw_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                              <!--  <div class="project-name">Project Name</div>-->
                            </div></a>
                    </div>
                     <div class="col-lg-3 col-sm-6" style="text-align: center;">
                        <!--<a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">-->
                            <img class="img-fluid" src="/assets/img/landrover_consulta_valor_ipva_tabela_fipe.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                               <!-- <div class="project-name">Project Name</div>-->
                            </div><!--</a>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section--
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
            </div>
        </section>-->
        <!-- Contact section-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Deixe seu Comentário!</h2>
                        <hr class="divider my-4" />
                        <!--<p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>-->
                    </div>
                </div>
                <div class="row">
                    <!-- facebook comment plugin -->
                    
                    
                    <!--<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                        ><-- Make sure to change the email address in BOTH the anchor text and the link target below!--<a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                    </div>-->
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted">&copy; Copyright <strong><span>NFE Guard</span></strong>. Todos os Direitos Reservados. Feito com muito &hearts; por <a href="#">SOPA SYSTEMS</a></div></div> 
                    
                
        </footer>

         <!-- jQuery Plugins -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/javascript.js"></script>
        <script src="/js/zepto.min.js"></script>
     <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
        
        <!-- Bootstrap core JavaScript -->
      
       <script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
<script language="JavaScript" type="text/javascript">
  TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_sm_124x32.png", "POSDV", "none");
</script>
 </body>
</html>

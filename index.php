
<?php require_once('header.php');?>
<div id="preloader"></div>
    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "images/bg/bg1.jpg",
            "images/bg/bg2.jpg",
            "images/bg/bg3.jpg"
        ], {duration: 5000, fade: 500, centeredY: true });

        $("#mapwrapper").gMap({ controls: false,
            scrollwheel: false,
            markers: [{
                latitude:40.7566,
                longitude: -73.9863,
            icon: { image: "images/marker.png",
                iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
            icon: {
                image: "images/marker.png",
                iconsize: [26, 46],
                iconanchor: [12, 46],
                infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
            zoom: 14 });
    });
    </script>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                	<span class="home-icon pe-7s-gleam bounce-in" style="padding: 0px;"><img src="images/LOGOALTA.png" width="70px;" height="auto"></span>
                                    <h2 class="boxed animation animated-item-1 fade-down">Residencial para Idosos em Alphaville SP</h2>
                                    <p class="boxed animation animated-item-2 fade-up">A Vivenda Quinta das Flores é um residencial 60+ em Alphaville SP com um novo conceito de moradia, espaço dia e reabilitação...</p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="#services">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">

        <section id="about-us" class="white">
        	<div class="container">
	            <div class="gap"></div>
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="center gap fade-down section-heading">
	                        <h2 class="main-title">Um Pouco Sobre a Vivenda Quinta das Flores</h2>
	                        <hr>
	                        <p>Residencial para Idosos em Alphaville SP</p>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-10 col-md-offset-1 fade-up">
	                    <p>A Vivenda Quinta das Flores é um residencial 60+ em Alphaville SP com um novo conceito de moradia, espaço dia e reabilitação. Diferente das antigas casas de repouso, possui ambientes diferenciados de acordo com a necessidade de cuidado de cada cliente. Possui alas e jardins para convivência e preza a autonomia dos idosos e o relacionamento com a sociedade e familiares.</p>

	                    <p>Nossa localização é privilegiada, com fácil acesso pelas Rodovias Castelo Branco, Rodoanel e Anhanguera.</p>
	                </div>
	                <div class="col-md-4 fade-up">

	                </div>
	            </div>
               <div class="gap"></div>
                <div class="row fade-up">
                    <div class="col-md-6">
                      	<div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg"/>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>

	            <div class="gap"></div>
	            <div class="center gap fade-down section-heading">
	                <h2 class="main-title">Estrutura</h2>
	                <hr>
	            </div>
	            <div class="gap"></div>

	            <div id="meet-the-team" class="row">
	                <div class="col-md-4 col-xs-4">
	                    <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team01.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
	                        <div class="team-content fade-up">
	                            <h5>Residencial</h5>
	                            <p>Residencial projetado para terceira idade com 22 suites com ar condicionado quente e frio, espaço ecumênico, sala de estar, piscina aquecida e salão de eventos.</p>
	                            
	                        </div>
	                    </div>
	                </div>

	                <div class="col-md-4 col-xs-4">
	                    <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team02.jpg" alt=""/>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
	                        <div class="team-content fade-up">
	                            <h5>Enfermagem 24h</h5>
	                            <p>Atendimento 24h por profissionais altamente qualificados. A equipe multidisciplinar com profissionais especializados em gerontologia garantem a promoção, prevenção e reabilitação da saúde segundo as mais modernas técnicas e procedimentos.</p>
	                            
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-4 col-xs-4">
	                    <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team03.jpg" alt=""/>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
	                        <div class="team-content fade-up">
	                            <h5>Jardins</h5>
	                            <p>O Residencial é envolto por 20.000m2 de ãrea verde, com jardins, cascatas, gazebos, chafariz, pomar  e horta orgânica, tudo com total acessibilidade.</p>
	                        </div>
	                    </div>
	                </div>
	            </div><!--/#meet-the-team-->

                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Nossos Diferenciais</h2>
                    <hr>
                </div>
                <div class="gap"></div>

                <div id="meet-the-team" class="row">
                    <div class="col-md-4 col-xs-4">
                        <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team01.jpg" alt=""/>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="team-content fade-up">
                                <h5>Motorista 24h</h5>
                                <p>Motorista 24h para levar a consultas, compromissos ou atividades de lazer.</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                        <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team02.jpg" alt=""/>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="team-content fade-up">
                                <h5>Refeições</h5>
                                <p>As refeições são  servidas à la carte com cardápio elaborado por nutricionista com a colaboração do morador.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team03.jpg" alt=""/>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="team-content fade-up">
                                <h5>Atividades</h5>
                                <p>As atividades são escolhidas por você de acordo com avaliação de seus médicos e terapeutas.</p>
                            </div>
                        </div>
                    </div>
                </div><!--/#meet-the-team-->
                <div class="gap"></div>
                <div class="gap"></div>
            </div>
        </section>
        </section>

        <!-- <section id="stats" class="divider-section">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                            <h1><span class="counter">246000</span></h1>
                            <h3>HOURS SAVED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">16875</span></h1>
                            <h3>FRESH IDEAS</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">99999999</span></h1>
                            <h3>HUGE PROFIT</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                            <h1><span class="counter">54875</span></h1>
                            <h3>THINGS IN BOXES</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </section> -->

        

            <section id="testimonial-carousel" class="divider-section">
            <div class="gap"></div>
	            <div class="container">
	                <div class="row">
                    	<div class="center gap fade-down section-heading">
                            <h2 class="main-title">What They Have Been Saying</h2>
                            <hr>
                            <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                            <div class="gap"></div>
                        </div>
	                    <div class='col-md-offset-2 col-md-8 fade-up'>
	                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	                            <!-- Bottom Carousel Indicators -->
	                            <ol class="carousel-indicators">
	                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
	                                <li data-target="#quote-carousel" data-slide-to="1"></li>
	                                <li data-target="#quote-carousel" data-slide-to="2"></li>
	                            </ol>
	                            <!-- Carousel Slides / Quotes -->
	                            <div class="carousel-inner">
	                              <!-- Quote 1 -->
	                                <div class="item active">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="images/team/team01.jpg" style="width: 100px;height:100px;"/>
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                                <!-- Quote 2 -->
	                                <div class="item">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="images/team/team02.jpg" style="width: 100px;height:100px;"/>
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                                <!-- Quote 3 -->
	                                <div class="item">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="images/team/team03.jpg" style="width: 100px;height:100px;"/>
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="gap"></div>
	      		</div>
      		</section>

            <section id="blog" class="white">
                <div class="container">
                    <div class="center gap fade-down section-heading">
                   		<div class="gap"></div>
                        <h2 class="main-title">From The Blog</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio02.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio06.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio11.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                    <div class="gap"></div>
                </div>
       		</section>

			<div id="mapwrapper">
				<div id="map"></div>
			</div>

            <section id="contact" class="white">
                <div class="container">
                	<div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Get In Touch</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-4 fade-up">
                            <h3>Contact Information</h3>
                            <p><span class="icon icon-home"></span>Time Square, New York<br/>
                                <span class="icon icon-phone"></span>+36 65984 405<br/>
                                <span class="icon icon-mobile"></span>+36 65984 405<br/>
                                <span class="icon icon-envelop"></span> <a href="#">email@infinityteam.com</a> <br/>
                                <span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
                                <span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>
                            </p>
                        </div><!-- col -->

                        <div class="col-md-8 fade-up">
                            <h3>Drop Us A Message</h3>
                            <br>
                            <br>
                            <div id="message"></div>
                            <form method="post" action="sendemail.php" id="contactform">
                                <input type="text" name="name" id="name" placeholder="Name" />
                                <input type="text" name="email" id="email" placeholder="Email" />
                                <input type="text" name="website" id="website" placeholder="Website" />
                                <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                                <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="gap"></div>
                </div>
            </section>
        

<?php require_once('footer.php'); ?>
</div>
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="js/init.js"></script>
</body>
</html>

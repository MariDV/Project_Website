<?php require_once('header.php'); ?>

    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "http://placehold.it/800x600",
            "http://placehold.it/800x600",
            "http://placehold.it/800x600"
        ], {duration: 5000, fade: 500});

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
    
    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">Serviços</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="services" class="white">
            <div class="container">
            <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-windows fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Centro Dia</h3>
                                <p>O serviço de Espaço Dia inicia a partir das 8h  com uma verificação dos sinais vitais e um delicioso café da manhã, aqueles que fazem uso de medicação é seguida a prescrição médica pela equipe de saúde. A seguir é proposto uma caminhada ao sol. As 10h é oferecido um suco ou fruta e as 10:30h inicia-se a atividade da manhã. As 12h é servido o almoço seguido por um período de siesta e as 14:30 inicia-se as atividades da tarde seguida de um lanche.  Oferecemos serviço de leva e traz nos condomínios da região. Para saber mais nos envie um whatsapp.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-android fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Moradia</h3>
                                <p>O serviço de moradia  foi idealizado para acolher o cliente e seus familiares. Desde o primeiro contato procuramos ouvir os anseios da família e do cliente para poder oferecer um serviço que passe segurança e conforto.</p>

                                <p>Entendemos que o processo de institucionalização  é doloroso e por isso estamos preparados para juntos construir este novo modelo de cuidado.</p>

                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-apple fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Primeiros Passos</h3>
                                <p>O serviço inicia-se com uma consulta médica com nossa geriatra que juntamente com a equipe multidisciplinar  traça o plano de cuidado e faz o acompanhamento diário dos residentes. A partir deste plano de cuidado a nutricionista adequa as  dietas e acompanha juntamente com os demais profissionais a evolução e as adequações quando necessárias. As refeições são servidas à la carte com tempero tipo caseiro buscando trazer prazer as refeições.</p>

                                <p>A equipe de saúde  faz um atendimento humanizado, com profissionais altamente qualificados, experientes promovendo a saúde e a qualidade de vida para atender o cliente  24 horas.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-linux fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Reabilitação</h3>
                                <p>Nossos serviços de  reabilitação motora e cognitiva  promovem o engajamento em atividades que tem como objetivo a melhora clinica,  do quadro motor e cognitivo apresentada por cada idoso com a supervisão  médica, além da socialização. É considerado os objetivos de recuperação, a história ocupacional, os interesses e as habilidades que o idoso desenvolveu ao longo da vida. A reabilitação é um processo dinâmico que sofre ajustes de acordo com as atividades e dificuldades apresentadas  pelo idoso e seu cuidador. São realizadas avaliações sistemáticas abrangentes, que  permitam dar uma melhor qualidade de vida ao idoso.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-dribbble fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Hotelaria</h3>
                                <p>A hotelaria vem suprir a necessidade das famílias e dos idosos de um serviço desenhado para dar conforto, segurança e qualidade de vida aos hospedes em casos de férias, viajem , reforma do imóvel dentre outras. Os apartamentos são equipados com TV, ar condicionado quente/frio, internet wireless e campainha de emergência. O serviço inclui 06 refeições  diárias, enfermagem 24h e atividades em grupo para integração e convivência.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-google-plus fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Cuidado Holistico</h3>
                                <p>Com o objetivo de melhorar a qualidade de vida do idoso e para  facilitar a rotina desses assistidos e de suas famílias criamos um serviço de visão holística de cuidado.

                                <p>O cliente do Cuidado Holistico tem acesso a serviços profissionais e terapêuticos adicionais, no conforto de sua casa, que podem ser contratados sob demanda, a qualquer momento, sendo eles:</p>

                                <small>Cuidadores 8 horas, 12 horas e 24 horas.</small>

                                <small>Aluguel de equipamentos de suporte domiciliar como cadeira de rodas reclinável, cadeira higiênica acolchoada, cama elétrica com altura variável, andador articulado, colchão pneumático e poltrona de repouso.</small>

                                <small>Contratação de visitas de profissionais nutricionistas, psicólogos, fisioterapeutas, fonoaudiólogos, procedimentos de curativos e aplicações de medicamentos por técnicos de enfermagem.</small>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div>
            <div id="content-wrapper">
        <section id="portfolio" class="white">
            <div class="container">
                <div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Galeria de Fotos</h2>
                        <hr>
                        <p>É uma solução completa em  gerenciamento, segurança, comodidade e orientação em saúde 24 horas, ligue para saber mais ou nos envie um whatsapp.</p>
                    </div>
                    <ul class="portfolio-items col-3 isotope fade-up">
                        <li class="portfolio-item apps isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla bootstrap isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item bootstrap wordpress isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla wordpress apps isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla html isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item wordpress html isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla wordpress apps isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla html isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item wordpress html isotope-item">
                            <div class="item-inner">
                                <img src="http://placehold.it/800x600" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                    </ul>
                </div>
            </section>
    </div>
        </section>
    <?php require_once('footer.php');?>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>
</body>
</html>

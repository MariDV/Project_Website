 <? require_once('header.php') ?>
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
    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">Quem Somos</h2>
                                    <hr>
                                    <p>UM ESTILO DE VIDA</p>
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
                    <div class="col-md-12 fade-up">
                        <p>A Vivenda nasceu de um sonho de dois engenheiros que cuidaram de seus familiares idosos e decidiram fazer um projeto inovador, idealizado e projetado para terceira idade. Onde o objetivo  tem sido criar um ambiente humanizado de cuidado em que os clientes se sintam em casa e que seus familiares possam vir e desfrutar de momentos prazerosos  em espaços criados para convivência. Nossa equipe multidisciplinar é formada em gerontologia nos melhores centros de estudos do estado de São Paulo, tais como Einstein e São Camilo</p>

                        <p>A escolha do lugar, de clima aprazível e com uma paisagem linda, o projeto cuidadoso das instalações: apartamentos, áreas comuns, jardins, e atividades de saúde e lazer, tudo foi imaginado e planejado para oferecer aos clientes a melhor qualidade de vida dentro das possibilidades de cada um.</p>

                        <p>Suites confortáveis, para uma ou duas pessoas, podem ser decoradas pelo cliente, todas equipadas com sistema de TV, internet wireless e campainha de emergência.</p>

                        <p>O restaurante foi decorado criando um ambiente elegante e sofisticado para apreciar refeições balanceadas e saborosas de uma cozinha dedicada a proporcionar a nossos clientes momentos memoráveis à mesa com seus amigos. O cardápio é elaborado por nutricionista considerando as necessidades individuais.</p>

                        <p>A sala de Fisioterapia e o ambulatório estão equipados com todos os aparelhos necessários para o cuidado com a saúde em tempo integral.</p>

                        <p>No segundo andar, um mezanino permite avistar o atrium e dá acesso a um terraço de 300m2 para atividades e eventos, que oferece uma vista espetacular dos arredores, com suas colinas, bosques, lagos e jardins enquanto se saboreia um delicioso café ou chá.</p>
                    </div>
                    <div class="col-md-4 fade-up">

                    </div>
                </div>

                <div class="gap"></div>
                <div id="meet-the-team" class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="http://placehold.it/400x400" alt="">
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="http://placehold.it/400x400" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="http://placehold.it/400x400" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="http://placehold.it/400x400" alt="">
                        </div>
                    </div>
                </div><!--/#meet-the-team-->
                <div class="gap"></div>
                <div class="gap"></div>
            </div>
        </section>
        <?php require_once('footer.php')?>
    </div>
    

    
    

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>
</body>
</html>

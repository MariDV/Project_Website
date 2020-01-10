<?php require_once('header.php')?>
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
                                    <h2 class="main-title">Entre em Contato</h2>
                                    <hr>
                                    <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <div id="mapwrapper">
            <div id="map"></div>
        </div>
        <section id="contact" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 fade-up">
                        <h3>Contato</h3>
                        <p><span class="icon icon-home"></span>Santana de Parnaíba, São Paulo<br/>
                            <span class="icon icon-phone"></span>11 65984 405<br/>
                            <span class="icon icon-mobile"></span>11 65984 405<br/>
                            <span class="icon icon-envelop"></span> <a href="#">atendimento@vivendaquintadasflores.com.br</a> <br/>
                            <span class="icon icon-facebook"></span> <a href="#">Vivenda Quinta das Flores</a> <br/>
                        </p>
                    </div><!-- col -->

                    <div class="col-md-8 fade-up">
                        <h3>Mande sua mensagem</h3>
                        <br>
                        <br>
                        <div id="message"></div>
                        <form method="post" id="contact_form">
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
    </div>

    <?php require_once('footer.php') ?>
    </div>

    

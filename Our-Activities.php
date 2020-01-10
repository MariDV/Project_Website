<?php require_once('header.php');?>
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
                                    <h2 class="main-title">Nossas Atividades</h2>
                                    <hr>
                                    <p>Nossas atividades  são divididas em regulares e comemorativas. Dentre as atividades regulares temos fisioterapia, arteterapia, musicoterapia, terapia ocupacional, oficina de memória, Heiki, entre outros. As comemorativas são aniversários, carnaval, páscoa, dia da mulher, dia das mães, festa junina, dia dos pais, dia do idoso, natal, reveillon.</p>
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
                <div class="content">
                      <h1 class="section-header">Nossos Videos</h1>
                      <div class="section-header-underline"></div>
                      <div class="video-gallery">
                        <div class="gallery-item">
                          <img src="https://i.pinimg.com/originals/75/f9/97/75f997ee6acf59dc51bbea05eae36677.jpg" alt="North Cascades National Park" />
                          <div class="gallery-item-caption">
                            <div>
                              <h2>North Cascades</h2>
                              <p>The mountains are calling</p>
                            </div>
                            <a class="vimeo-popup" href="https://vimeo.com/3653567"></a>
                          </div>
                        </div>

                        <div class="gallery-item ">
                          <img src="https://cdn.davemorrowphotography.com/wp-content/uploads/2016/08/Mount-Rainier-Star-Photography-Workshops-and-Tours-Header-900x394.jpg" alt="Mt. Rainier" />
                          <div class="gallery-item-caption">
                            <div>
                              <h2>Mt. Rainier</h2>
                              <p>14410 feet of adventure</p>
                            </div>
                            <a class="vimeo-popup" href="https://vimeo.com/179049611"></a>
                          </div>
                        </div>

                        <div class="gallery-item">
                          <img src="https://wqtcq1f34a8kduuv3sc0e76o-wpengine.netdna-ssl.com/wp-content/uploads/2018/06/12394537_web1_180620-pdn-goat-web.jpg" alt="Olympic National Park" />
                          <div class="gallery-item-caption">
                            <div>
                              <h2>Olympic National Park</h2>
                              <p>Mountains, rain forests, wild coastlines</p>
                            </div>
                            <a class="vimeo-popup" href="https://vimeo.com/108785446"></a>
                          </div>
                        </div>

                        <div class="gallery-item">
                          <img src="https://www.sciencenewsforstudents.org/sites/default/files/main/articles/cvob0070_openerfree.jpg" alt="Mount St. Helens" />
                          <div class="gallery-item-caption">
                            <div>
                              <h2>Mount St. Helens</h2>
                              <p>The one and only</p>
                            </div>
                            <a class="vimeo-popup" href="https://vimeo.com/171540296"></a>
                          </div>
                        </div>

                      </div>
                    </div>
                <div class="gap"></div>
            </div>
        </section>
    

<?php require_once('footer.php') ?>
    </div>


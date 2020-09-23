<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <?php get_header() ?>
        <div class="slider mt-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=slider'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <div class="carousel-item active">
                  <a href=""><img src="<?php echo $featured_img_url ?>" class="d-block w-100" alt="..."></a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=slider&offset=1'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <div class="carousel-item">
                  <a href=""><img src="<?php echo $featured_img_url ?>" class="d-block w-100" alt="..."></a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
           <a href=""><div class="caption1">Risus Dolor Fermentum Aenean Fusce</div></a> 
           <a href=""><div class="caption2">Mollis Elit Egestas Euismod Bibendum</div></a> 
        </div>

        <div class="intro-section">
            <div class="text1">We offer great pricess for your business</div>
            <div class="text2">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed
                posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna.
            </div>
            <div class="text1">
                <button>See All Price</button>
            </div>
        </div>
        <div class="Service-Section">
            <div class="text-title">What Do We Provide</div>
            <div class="text-content">Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta
                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/logis.png" alt="">
                        </div>
                        <div class="col-10">
                            <div class="product-title">Logistic
                                Solution</div>
                            <div class="border-bottom"></div>
                            <div class="text-content">Donec elit non mi porta gravida at eget metus. Cras justo odio,
                                dapibus ac
                                facilisis in, egestas eget quam. Vestibulum ligula porta felis cras ridiculus dapibus,
                                aenean eu
                                leo quam.</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/money.png" alt="">
                        </div>
                        <div class="col-10">
                            <div class="product-title">Money Protection</div>
                            <div class="border-bottom"></div>
                            <div class="text-content">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/strate.png" alt="">
                        </div>
                        <div class="col-10">
                            <div class="product-title">Strategic Development</div>
                            <div class="border-bottom"></div>
                            <div class="text-content">Mollis est non commodo luctus, nisi erat porttitor ligula, eget
                                lacinia odio sem elit. Aenean lacinia bibendum nulla consectetur. Integer posuere erat a
                                ante venenatis dapibus.</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/market.png" alt="">
                        </div>
                        <div class="col-10">
                            <div class="product-title">Marketing Management</div>
                            <div class="border-bottom"></div>
                            <div class="text-content">Morbi leo risus, porta ac consectetur, vestibulum at eros.
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia
                                bibendum nulla sed consectetur. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="About-Section">
            <div class="row">
                <div class="col">
                    <div class="product-title">Latest Posts</div>
                    <div class="border-bottom"></div>
                    <div class="row">
                        <div class="col-3">
                            <img src="<?php bloginfo('template_directory') ?>/images/home3-slider1.jpg" alt="">
                            <div class="date">21 JAN</div>
                        </div>
                        <div class="col-9">
                            <div class="product-title">Tortor Purus Mollis Quam</div>
                            <div class="text-content">Praesent commodo cursus magna, Maecenas faucibus mollis interdum.
                                Praesent commodo cursus magna,</div>
                        </div>
                    </div>
                    <div class="border-bottom-full"></div>
                    <div class="row">
                        <div class="col-3">
                            <img src="<?php bloginfo('template_directory') ?>/images/latter.jpg" alt="">
                            <div class="date">15 JAN</div>
                        </div>
                        <div class="col-9">
                            <div class="product-title">Fringilla Venenatis Cursus Egestas</div>
                            <div class="text-content">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper
                                nulla non metus auctor fringilla.</div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product-title">Why Choose Us</div>
                    <div class="border-bottom"></div>
                    <div class="text-About-Section">Duis mollis, est non commodo luctus, nisi porttitor ligula, eget
                        lacinia
                        odio sem nec elit.
                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam. Aenean lacinia bibendum nulla sed
                        consectetur. Nulla vitae elit libero, a pharetra augue.</div>
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
                        </div>
                        <div class="col-11 text-About-Section">
                            Donec ullamcorper nulla non metus auctor.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
                        </div>
                        <div class="col-11 text-About-Section">
                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
                        </div>
                        <div class="col-11 text-About-Section">
                            Praesent commodo cursus magna.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 mt-2">
                            <img src="<?php bloginfo('template_directory') ?>/images/icon.png" alt="">
                        </div>
                        <div class="col-11 text-About-Section">
                            Nullam id dolor id nibh ultricies vehicula ut.
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product-title">Testimonials</div>
                    <div class="border-bottom"></div>
                    <div class="Testimonials1">
                        <div class="text-About-Section">Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas
                            faucibus mollis interdum.
                            Nulla vitae elit libero, a pharetra augue. </div>
                        <div class="product-title">by Ted Mosby </div>
                    </div>
                    <div class="Testimonials2">
                        <div class="text-About-Section">Fusce dapibus, tellus ac cursus, tortor mauris condimentum nibh
                            vitae elit libero pharetra. </div>
                        <div class="product-title">by Jamie Lee </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer() ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
<div class="header ">
            <div class="row">
                <div class="col-4">
                    <a href=""><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt=""></a>
                </div>
                <div class="col-8">
                    <?php wp_nav_menu( 
                      array( 
                          'theme_location' => 'header-menu', 
                          'container' => 'false', 
                          'menu_id' => 'header-menu', 
                          'menu_class' => 'menu'
                       ) 
                    ); ?>
                    <!-- <ul>
                        <li>HOME</li>
                        <li>ABOUT</li>
                        <li>PORTFOLIO</li>
                        <li>SERVICE</li>
                        <li>BLOG</li>
                        <li>CONTACT</li>
                    </ul> -->
                </div>
            </div>
            <div class="text-header">
                We are <span>Wiretree</span>, digital & branding agency based in Jupiter and we would love to turn ideas
                into beautiful things.
            </div>
        </div>
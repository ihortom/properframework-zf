<?php
/**
 * Topbar
 */
?>
    <div class="contain-to-grid">
        <nav id="topmenu" class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
    <!--                        <h1><a href="#">My Site</a></h1>-->
                </li>
                 <!--Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="middle top-bar-section">
                <?php 
                    if (has_nav_menu('primary')) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'depth'          => '2', 
                            'link_before'    => '<span>', 
                            'link_after'     => '</span>',
                            'items_wrap'     => '<ul>%3$s</ul>',
                            'walker'         => new Top_Bar_Walker()
                        ) );
                    }
                ?>
            </section>
        </nav>
    </div>

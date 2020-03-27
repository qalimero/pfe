<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<footer class="footer__content">
    <div class="prefooter">

        <a href="#"><p>Données personnelles</p></a>
        <a href="#"><p>Mentions légales</p></a>

    </div>
</footer>

<nav class="menu__container">
    <div class="menu__navbar">

        <div class="header-navigation-wrapper">

            <?php
            if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
                ?>

                <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

                    <ul class="primary-menu reset-list-style">

                        <?php
                        if ( has_nav_menu( 'primary' ) ) {

                            wp_nav_menu(
                                array(
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'primary',
                                )
                            );

                        } elseif ( ! has_nav_menu( 'expanded' ) ) {

                            wp_list_pages(
                                array(
                                    'match_menu_classes' => true,
                                    'show_sub_menu_icons' => true,
                                    'title_li' => false,
                                    'walker'   => new TwentyTwenty_Walker_Page(),
                                )
                            );

                        }
                        ?>

                    </ul>

                </nav><!-- .primary-menu-wrapper -->

                <?php
            }

            if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
                ?>

                <div class="header-toggles hide-no-js">

                    <?php
                    if ( has_nav_menu( 'expanded' ) ) {
                        ?>

                        <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

                            <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
                            </button><!-- .nav-toggle -->

                        </div><!-- .nav-toggle-wrapper -->

                        <?php
                    }

                    if ( true === $enable_header_search ) {
                        ?>

                        <div class="toggle-wrapper search-toggle-wrapper">

                            <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg( 'search' ); ?>
										<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
									</span>
                            </button><!-- .search-toggle -->

                        </div>

                        <?php
                    }
                    ?>

                </div><!-- .header-toggles -->
                <?php
            }
            ?>

        </div><!-- .header-navigation-wrapper -->

    </div>
</nav>
<?php wp_footer(); ?>
</body>
</html>
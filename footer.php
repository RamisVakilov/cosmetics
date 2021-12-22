<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cosmetic
 */

?>

<footer class="footer">
        <div class="footer__menu">
            <div class="container">
                <?php
					the_custom_logo();
				?>
                <?php
                    wp_nav_menu( [
                        'menu'            => 'footer_menu', 
                        'container'       => false, 
                        'menu_class'      => 'menu__main', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul  class="menu__main">%3$s</ul>',
                        'depth'           => 1 //вложенность элементов меню(1-х уровневое)
                    ] );
                ?>
                <div class="menu__cell"> 
                     <a href="tel:<?php echo get_option('site_telephone');?>" class="menu__cell-link icon-cell">
                                <?php echo get_option('site_telephone');?>
                     </a>
                      <a href="mailto:<?php echo get_option('site_mail');?>" class="menu__cell-link icon-mail">
                            <?php echo get_option('site_mail');?>
                    </a>
                </div>
                <div class="burger-footer">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
        </div>
     
    </footer>
	<?php wp_footer(); ?>
</body>
</html>

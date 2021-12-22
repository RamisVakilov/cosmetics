<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cosmetic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body
	<?php body_class(); ?>
>
    <header class="header">
        <!-- бургер -->
            <div class="burger">
                <span></span>
				<span></span>
				<span></span>
            </div>
            <!-- скрытое меню -->
            <div class="burger__menu">
                <div class="container">
                <?php
                    wp_nav_menu( [
                        'menu'            => 'general', 
                        'container'       => false, 
                        'menu_class'      => 'menu__main', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul  class="menu__main">%3$s</ul>',
                        'depth'           => 2 //вложенность элементов меню(2-х уровневое)
                    ] );
                ?>
                </div>
            </div>
			<div class="burger__menu-footer">
                <div class="container">
                <?php
                    wp_nav_menu( [
                        'menu'            => 'footer_menu', 
                        'container'       => false, 
                        'menu_class'      => 'menu__main', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul  class="menu__main">%3$s</ul>',
                        'depth'           => 2 //вложенность элементов меню(2-х уровневое)
                    ] );
                ?>
                </div>
            </div>				
			
            <!-- Самый верх -->
            <div class="header__info">
                <div class="container">
                    <div class="info__location">
                        <p class="icon-location">
                            <?php
                                echo get_option('shop_location');
                            ?>
                        </p>
                        <p class="icon-time">
                            <?php
                                echo get_option('shop_time'); 
                            ?>
                        </p>
                     </div>
                
                    <div class="info__social">
                        <a href="#!" class="icon-vk"></a>
                        <a href="#!" class="icon-instagram"></a>
                        <a href="#!" class="icon-facebook"></a>
                    </div>
                </div>
                
            </div>
            
            <!-- Меню Логотип и телефонф -->
            <div class="header__menu">
                <div class="container">
                    <?php
						the_custom_logo();
					?>
                  
                    <?php
                    wp_nav_menu( [
                        'menu'            => 'general', 
                        'container'       => false, 
                        'menu_class'      => 'menu__main', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul  class="menu__main">%3$s</ul>',
                        'depth'           => 2 //вложенность элементов меню(2-х уровневое)
                    ] );
                    ?>
               
                    <div class="menu__cell"> 
                        <a href="tel:<?php echo get_option('');?>" class="menu__cell-link icon-cell">
                            <?php echo get_option('site_telephone');?>
                        </a>
                        <a href="mailto:<?php echo get_option('site_mail')?>" class="menu__cell-link icon-mail">
                            <?php echo get_option('site_mail')?>
                        </a>
                    </div>
                </div>
                
            </div>
         
               
    </header>


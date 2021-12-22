<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cosmetic
 */

get_header();
?>
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb__main">
                <li class="breadcrumb__post">
                    <a href="#!" class="breadcrumb__link">
                        Главая
                    </a>    
                </li>
                <li class="breadcrumb__post">
                    <a href="#!" class="breadcrumb__link">
                        Блог
                    </a>    
                </li>
                <li class="breadcrumb__post">
                    <a href="#!" class="breadcrumb__link breadcrumb__link-last">
                        Декабрь-Пик продаж косметических средств
                    </a>    
                </li>
            </ul>
        </div>
    </div>
    <article class="cosmetics">
        <div class="cosmetics__upper">
            <div class="container">
                
                <?php
                        $img = get_field('upper_photo',19);
                        if (!empty($img)): 
                ?>
                        <img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>" class="cosmetics__img cosmetics__img_upper">
                <?php endif;  ?>
                  <!-- Верхнее описание           -->
                <div class="cosmetics__descr">
                    <h2 class="cosmetics__title">
                        <?php the_field('title',19); ?>
                    </h2>
                    <p >
                       <?php
                            the_field('upper_descr',19);
                       ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="cosmetics__empty"></div>

        <!-- Нижний блок -->
        <div class="cosmetics__lower">
            <div class="container">
                <!-- Нижнее описание -->
                <div class="cosmetics__descr">
                    <p >
                      <?php
                            the_field('bottom_descr',19);
                       ?>
                    </p>
                </div>

                <?php
                        $img = get_field('bottom_photo',19);
                        if (!empty($img)): 
                ?>
                        <img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>" class="cosmetics__img cosmetics__img_lower">
                <?php endif;  ?>
            </div>
         </div>
        <!-- -----------------------------  -->
    </article>
    <div class="back">
            <div class="container">
                <a href="#!" class="back__link">
                    <span></span>
                    Назад к списку
                </a>
            </div>
        </div>     
	

<?php

get_footer();

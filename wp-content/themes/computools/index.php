<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>">

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico"
          type="image/x-icon"/>
    <?php wp_head(); ?>
</head>
  <body>
    <main>
        <?php if( have_rows('flex_content') ): while ( have_rows('flex_content') ) : the_row(); ?>
            <?php if( get_row_layout() == 'block_left_img' ): ?>
                <?php 
                    $bgColor = get_sub_field('lf_img_bg_color');
                    
                    $sectionClass = ($bgColor == 'gray') ? 'vision section__padding bg--gray' : 'vision section__padding';
                ?>
        
                <section class="<?php echo $sectionClass; ?>">
                    <div class="container">
                        <div class="vision__wrapper">
                            <div class="vision__image">
                                <?php if(get_sub_field('lf_img_title')) : ?>
                                    <h2 class="section__title uppercase fs-56"><?php the_sub_field('lf_img_title'); ?></h2>
                                <?php endif; ?>
                                <div class="vision__image-wrapper">
                                    <?php 
                                        $image = get_sub_field('lf_img_image');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="vision__image"/>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="vision__content">
                                <?php the_sub_field('lf_img_txt'); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if( get_row_layout() == 'block_cases' ): ?>
                <section class="cases section__padding bg--gray">
                    <div class="container">
                        <?php if(get_sub_field('cases_title')) : ?>
                            <h2 class="section__title mb-84 uppercase fs-56"><?php the_sub_field('cases_title'); ?></h2>
                        <?php endif; ?>
                        <div class="cases-items mb-84">
                            <?php 
                            $related_cases = get_sub_field('cases');
                            if( $related_cases ): ?>
                                <?php foreach( $related_cases as $post): ?>
                                    <?php setup_postdata($post); ?>
                                    <div class="item">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="link-arrow"></div>
                                            <div class="item__image-wrapper">
                                                <?php 
                                                if( has_post_thumbnail() ): ?>
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="item__info">
                                                <h3 class="item__info-title uppercase fs-33"><?php the_title(); ?></h3>
                                                <p class="item__info-text fs-19">
                                                    <?php 
                                                    $content = get_the_content();
                                                    echo wp_trim_words($content, 165);
                                                    ?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                        <?php
                            $show_more_link = get_sub_field('cases_btn');
                            if( $show_more_link ):
                            ?>
                                <div class="block__btn">
                                    <a href="<?php echo esc_url($show_more_link['url']); ?>" class="block__btn-link" <?php if($show_more_link['target']) { echo 'target="'. esc_attr($show_more_link['target']) .'"'; } ?>>
                                        <p class="block__btn-link-text uppercase fs-19"><?php echo esc_html($show_more_link['title']); ?></p>
                                        <div class="block__btn-link-dots"></div>
                                    </a>
                                </div>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endif; ?>

            <?php if( get_row_layout() == 'block_slider' ): ?>
                <section class="reasons section__padding bg--gray">
                    <div class="container">
                        <?php if(get_sub_field('slider_title')) : ?>
                            <h2 class="section__title mb-84 uppercase fs-56"><?php the_sub_field('slider_title'); ?></h2>
                        <?php endif; ?>
                        <?php if(get_sub_field('slider_txt')) : ?>
                            <div class="section__text fs-28">
                                <?php the_sub_field('slider_txt'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="items owl-carousel owl-theme">
                            <?php if( have_rows('items') ): while ( have_rows('items') ) : the_row(); ?>
                                <div class="item">
                                    <?php if(get_sub_field('item_num')) : ?>
                                        <p class="item__num uppercase fs-200"><?php the_sub_field('item_num'); ?></p>
                                    <?php endif; ?>
                                    <div class="item__info">
                                        <?php if(get_sub_field('item_title')) : ?>
                                            <h4 class="item__info-title uppercase fs-33"><?php the_sub_field('item_title'); ?></h4>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('item_txt')) : ?>
                                            <p class="item__info-text fs-19"><?php the_sub_field('item_txt'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </main>

    <?php wp_footer(); ?>
  </body>
</html> 
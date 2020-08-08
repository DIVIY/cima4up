<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?> 
<script> var slide = true; var vo_theme_dir = "<?php echo get_template_directory_uri() ?>";</script>
<?php if (get_option('vo_ad_top')) : ?>
      <div class="boxAdTop">
          <center>
              <?php echo get_option('vo_ad_top'); ?>
          </center>
      </div>
  <?php endif; ?> 
<?php
    if (!wp_is_mobile()) :
        $query = array('post_type' => 'post', 'offset' => '0', 'posts_per_page' => 20, 'meta_query' => array('relation' => 'or', array('key' => 'pin', 'value' => 'on')));
        $sticky = new WP_Query($query);
        if ($sticky->have_posts()):?>
        <div class="boxPin">
            <div class="container-fluid">
                <div class="row">
                        <div id="slidePin">
                        <?php while ($sticky->have_posts()):
                            $sticky->the_post();
                            $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
                            $thui = (has_post_thumbnail()) ? $img_url : esc_url(get_template_directory_uri()) . '/images/no_image.png';
                            $description = get_post_meta($post->ID, 'description', true);
                            ?>
                            <div class="blockPin" style="max-width: 300px;"> 
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
                                    <div class="title"> 
                                        <p><?php wp_trim_words(the_title(), 8, '...'); ?> </p>
                                    </div>
                                    <?php if (has_post_thumbnail()) : the_post_thumbnail('poster1', array('itemprop' => 'image')); ?>
                                    <?php else : ?>
                                        <img class="img-responsive" src="<?php echo $thui; ?>" width="300" height="300" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"/>
                                    <?php endif; ?>
                                    <div class="descraption">
                                        <div class="content">
                                          <?php echo wp_trim_words($description, 10, '...'); ?>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                    <?php endwhile; ?>
                    </div>
                        <div class="clearfix"></div>

                </div>
                    <?php wp_reset_query(); ?>
        <?php endif; ?>
            </div>
        </div>
      </div>
  <?php endif; ?>
<div id="">
    
                
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="getItems">
            <?php
                if (have_posts()) :?>
                    <?php while (have_posts()) :the_post(); ?> 
                      <article class="post">
                          <div class="col-xs-5th col-sm-5th col-md-5th col-lg-5th">
                            <?php
//                                $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
//                                $image_thumb = wp_get_attachment_image_src($img_url, 'slider');
//                                $thui = (has_post_thumbnail()) ? $image_thumb : esc_url(get_template_directory_uri()) . '/images/no_image.png';
//                                $quality = get_the_terms($post->ID, 'quality', '');
//                                $genres = get_the_terms($post->ID, 'genres', '');
//                                $lang = get_post_meta($post->ID, 'lang', true);
//                                $runtime = get_post_meta($post->ID, 'time', true);
//                                $views = get_post_meta($post->ID, 'post_views_count', true);
//                                $postViesws = ($views && !empty($views)) ? $views : 0;
                                require( get_template_directory() . '/inc/temp/data/content.php' );
                            ?>
                          </div> 
                      </article> 
                    <?php endwhile; ?> 
                 <?php else : ?>
                  <div class="col-md-12 col-sm-12 col-xs-12 fRight">
                      <div class="noResult alert alert-danger alert-dismissable">
                          <h1><?php _e('لا يوجد ملفات لنقوم بعرضعها', 'VO'); ?></h1>
                      </div>
                  </div>
                <?php endif; ?> 
        </div>
        <div class="navigation"><?php wpex_pagination(); ?></div>
    </div>
</div> 
<?php get_footer(); ?>


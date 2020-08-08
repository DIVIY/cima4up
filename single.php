<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?> 
<script type="text/javascript">var vo_theme_dir = "<?php echo get_template_directory_uri() ?>", vo_postID = "<?php echo $post->ID; ?>";</script>
<div id="breadcrumbs">
    <div class="container">
        <?php breadcrumbs(); ?>
    </div>
</div>
<?php
    $quality = get_the_terms($post->ID, 'quality', '');
    $actor = get_the_terms($post->ID, 'actor', '');
    $releaseYear = get_the_terms($post->ID, 'releaseYear', '');
    $genres = get_the_terms($post->ID, 'genres', '');
    $writers = get_the_terms($post->ID, 'writer', '');
    $directors = get_the_terms($post->ID, 'director', '');
    $postTag = get_the_terms($post->ID, 'post_tag', '');
    $assemblies = get_the_terms($post->ID, 'assemblies', '');
    $imgUrl = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
    $thui = (has_post_thumbnail()) ? $imgUrl : esc_url(get_template_directory_uri()) . '/images/no_image.png';
    update_post_meta($post->ID, 'post_views_count', get_post_meta($post->ID, 'post_views_count', true) + 1);
    $story = get_post_meta($post->ID, 'story', true);
    $tagSeo = get_post_meta($post->ID, 'tags_seo', true);
    $titleSeo = get_post_meta($post->ID, 'name_seo', true);
    $descSeo = get_post_meta($post->ID, 'desc_seo', true);
    $runtime = get_post_meta($post->ID, 'time', true);
    $lang = get_post_meta($post->ID, 'lang', true);
    $trailer = get_post_meta($post->ID, 'trailer', true);
    $sticky = get_post_meta($post->ID, 'sticky', true);
    $downloads = get_post_meta($post->ID, 'downloads', true);
    $description = get_post_meta($post->ID, 'description', true);
    $imdb_id = get_post_meta($post->ID, 'imdb_id', true);
    $series = get_the_terms($post->ID, 'series', '');
    $seasons = get_the_terms($post->ID, 'seasons', '');
    $ep = get_post_meta($post->ID, 'episode', true);
    $redirect = get_post_meta($post->ID, 'redirect', true);
    $servers = get_post_meta($post->ID, 'servers', true);
    $adTop = get_option('vo_ad_top');
    $adCenter = get_option('vo_ad_center');
    $adRight = get_option('vo_ad_right');
    $adLeft = get_option('vo_ad_left');
    if (!empty($redirect))
    {
        header("Location: $redirect");
        exit();
    }
    // Begin Views
elseif(isset ($_GET['do']) && $_GET['do'] == "views"){?>
    <div class="servers">
        <div class="container-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <?php 
                    if ( !empty( $servers ) ):
                        $active = "active";
                        foreach ( $servers as $key => $server ) :
                            if ( !empty( $server["code"] ) ) :
                                $serverName = (!empty( $server["name_server"] )) ? $server["name_server"] : "سيرفر المشاهدة";
                                echo "<li class=\"$active\" id=\"s_$key\" onClick=\"getServer(this.id,$key);\"> <i class=\"fa fa-video-camera\"></i> " . $serverName . "</li>";
                                $active = false;
                            endif;
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
            if (empty($series)) : ?>
            <div class="col-md-2 col-sm-2 hidden-xs fRight">
                <?php if (!empty( $adRight )) : ?>
                    <div class="boxAdRight">
                       <center><?php echo $adRight;?></center>
                   </div>
                <?php endif; ?>
           </div>
            <div class="col-md-8 col-sm-8 col-xs-12 fRight">
                <div class="boxVideos">
                    <div class="getCode">
                        <?php 
                        if (!empty($servers)):
                            foreach ($servers as $key => $server) :
                                  if (!empty($server["code"])) :
                                      echo $server["code"];
                                      break;
                                  endif;
                              endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="boxAddThis">
                    <div class="social_position addthisFilm">
                        <div class="addthis_sharing_toolbox"></div>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-531f21056f1feee8"></script>
                    </div>
                </div>
           </div>
           <div class="col-md-2 col-sm-2 hidden-xs fRight">
            <?php if (!empty( $adLeft )) :?>
                 <div class="boxAdLeft">
                    <center><?php echo $adLeft;?></center>
                    </div>
            <?php endif; ?>
            </div>
            <?php else : // is series ?>
            <div class="col-md-3 col-sm-4 col-xs-12 fRight">
                <div class="episodes boxAdRight">
                    <h2><?php _e('مشاهدة الحلقات'); ?></h2>
                    <ul>
                    <?php foreach ( $series as $seri ): ?>
                        <?php $seriesSlug = $seri->slug;?>
                    <?php endforeach;?>
                    <?php foreach ($seasons as $serSsea): ?>
                        <?php $getSerSsea = $serSsea->slug;?>
                    <?php endforeach;?>
                    <?php $args = array('post_type' => 'post', 'meta_key' => 'episode', 'orderby' => 'meta_value_num', 'posts_per_page' => -1, 'tax_query' => array(array('taxonomy' => 'series', 'field' => 'slug', 'terms' => $seriesSlug),  array('taxonomy' => 'seasons', 'field' => 'slug', 'terms' => $getSerSsea)), 'order' => 'ASC');?>
                    <?php $getEpisode = new WP_Query( $args );?>
                    <?php if ($getEpisode->have_posts() ) : ?>
                    <?php while ($getEpisode->have_posts() ) : $getEpisode->the_post();?>
                        <?php $active = (get_post_meta( $post->ID, 'episode', true ) == $ep) ? 'class = "active"': "";?>
                        <?php
                            $next = $ep + 1;
                            $prev = $ep - 1;
                            if ($next == get_post_meta($post->ID, 'episode', true))
                            {
                                $next_link = get_the_permalink();
                            }
                            if ($prev == get_post_meta($post->ID, 'episode', true))
                            {
                                $prev_link = get_the_permalink();
                            }
                        ?>
                        <li <?php echo $active;?>>
                            <a href="<?php echo get_the_permalink();?>?do=views">
                                <?php _e('الحلقة رقم 	');?> 
                                <?php echo get_post_meta( $post->ID, 'episode', true );?>
                            </a>
                        </li>
                        <?php $active = false; ?>
                    <?php endwhile; ?>
                <?php endif;?>
                    </ul> 
                </div>
            </div> 
            <div class="col-md-9 col-sm-8 col-xs-12 fRight">
                <div class="boxVideos">
                    <div class="getCode">
                       <?php 
                            if (!empty($servers)):
                                foreach ($servers as $key => $server) :
                                      if (!empty($server["code"])) :
                                          echo $server["code"];
                                          break;
                                      endif;
                                  endforeach;
                              endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 fRight">
                <div class="boxEp">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 fRight">
                            <div class="social_position addthisEp">
                                <div class="addthis_sharing_toolbox"></div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-531f21056f1feee8"></script>
                            </div>
                        </div> 
                        <div class="col-md-9 col-sm-8 col-xs-12 fRight">
                            <?php if (wp_get_count_episode($seriesSlug) > 1 && $next_link): ?>
                                <div class="epNext">
                                    <a href="<?php echo $next_link; ?>?do=views"><?php _e('الحلقة التالية'); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if (wp_get_count_episode($seriesSlug) > 1 && $prev_link): ?>
                                <div class="epPrev">
                                    <a href="<?php echo $prev_link; ?>?do=views"><?php _e('الحلقة السابقة'); ?></a>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;  ?>
    </div>
    
   <?php }
   //Begin 
    elseif(isset($_GET['do']) && $_GET['do'] == 'report') { ?>
    <div class="container">
        <div class="row artRow"> 
            <div class="col-md-12 col-sm-12 fRight">
                <?php
                    if (isset($_POST['report'])) :
                    $error = "";
                    $your_name = htmlspecialchars($_POST['your_name']);
                    $your_email = htmlspecialchars($_POST['your_email']);
                    $your_message = $_POST['your_message'];
                    if (!trim($your_name) || $your_name == null) :
                        $error .= "<p>قم بإدخال الاسم</p>";
                    endif;
                    if (!filter_var(trim($your_email), FILTER_VALIDATE_EMAIL) || $your_email == null) :
                        $error .= "<p>قم بإدخال بريد الكتروني صحيح</p>";
                    endif;
                    if (!trim($your_message) || $your_message == null) :
                        $error .= "<p>قم بإدخال نص الرسالة</p>";
                    endif;
                    if (!$error) :
                        $email = mail(get_option("admin_email"), trim($your_email) . " رسالة تبليغ من" .' ' . get_the_title(), stripslashes(trim($_POST['your_message'])), "From: " . trim($your_name) . " <" . trim($your_email) . ">\r\nReply-To:" . trim($your_email));
                    endif;
                    if (isset($email)) :
                        echo '<div class="alert alert-success alert-dismissable">';
                        _e('تم ارسال الرسالة بنجاح', 'VO');
                        echo '</div>';
                    else:
                        if ($error):
                            echo '<div class="alert alert-danger alert-dismissable">';
                            echo $error;
                            echo '</div>';
                        endif;
                    endif;
                endif;
                ?>
                <form action="<?php the_permalink(); ?>?do=report" id="contactUs" method="post">
                    <div class="form-group">
                        <input type="hidden" name="sent" id="sent" value="1" />
                        <label for="your_name"><?php _e('الاسم', 'VO'); ?></label>
                        <input required placeholder="<?php _e('الاسم', 'VO'); ?>" class="form-control" type="text" name="your_name" id="your_name" />
                        <label for="your_email"><?php _e('البريد الالكترونى', 'VO'); ?></label>
                        <input required placeholder="<?php _e('البريد الالكترونى', 'VO'); ?>" class="form-control" type="text" name="your_email" id="your_email" />
                        <label for="your_message"><?php _e('الرسالة', 'VO'); ?></label>
                        <textarea required placeholder="<?php _e('نص الرسالة', 'VO'); ?>" rows="8" class="form-control" name="your_message" id="your_message"></textarea>
                        <input class="btn btn-primary" type="submit" name="report" value = "<?php _e('ارسال', 'VO'); ?>" />
                        <input class="btn btn-primary" type="reset"  value="<?php _e('مسح', 'VO'); ?>" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php  
    }
    elseif (isset($_GET['do']) && $_GET['do'] == "download"){ ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 fRight">
            <div class="boxInfo">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="social_position addthis">
                            <div class="addthis_sharing_toolbox"></div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-531f21056f1feee8"></script>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="postDown">
                            <h1 itemprop="name"><?php the_title(); ?></h1>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="download">
                <div class="downloadTitle"><?php _e('سيرفرات التحميل المباشر');?></div>
                <ul>
                    <?php
                    if (!empty($downloads)):
                        foreach ($downloads as $embeder):
                            if (!empty($embeder["link"])):
                                ?>
                                <?php $embederName = (!empty($embeder["name"])) ? $embeder["name"] : "غير معروف"; ?>
                                <li> 
                                    <a target="_blank" href="<?php echo $embeder["link"]; ?>">
                                        <i class="fa fa-download"></i>
                                        <?php echo $embederName; ?> 
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="backToArt">
                <?php if (!empty($servers)) : ?>
                    <div class="serveView">
                        <div class="btnView">
                            <a class="btn" href="<?php echo get_permalink($post->ID) . '?do=views'; ?>">
                                <span class="txt"> <?php echo _e('المشاهدة المباشرة'); ?> </span>
                                <span class="round"><i class="fa fa-video-camera"></i> </span>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
    <?php }
    else { ?>
    <div id="single"  class="cover">
        <div class="container">
            <div class="row">
    <?php  
        if (!empty($cover)) {
            $imageCover = $cover;
            $imageId = pippin_get_image_id($imageCover);
            $imageThumb = wp_get_attachment_image_src($imageId, 'bg');
            $postCover = $imageThumb[0];
        }
        else
        {
            $postCover = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
        } 
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $trailer, $match))
        {
            $video_id = $match[1];
            $frame = "<iframe width='100%' height='360' src='https://www.youtube.com/embed/$video_id' frameborder='0' allowfullscreen></iframe>";
        }
        $dataTrailer = (!empty($trailer) && $video_id) ? 'data-bpopup="' . $frame . '"' : "";
    ?>
        <div id="trailerPopUp">
            <span class="b-close"><i class="fa fa-close"></i></span>
            <div id="popupVideo" class="boxes-popup">
                <div class="head-popup"></div> 
                <div class="popupContentVideo vt"></div>
            </div>
        </div>
        <div class="postCover" style="background-image: url(<?php echo $postCover; ?>);"></div>
        <div class="col-md-3 col-sm-4 col-xs-12 fRight">
            <div class="boxRight"> 
                <div class="postImg">
                    <?php if (has_post_thumbnail()) : the_post_thumbnail('poster2', array('itemprop' => 'image')) ; ?>
                    <?php else : ?>
                       <img class="img-responsive" src="<?php echo $thui;?>" width="300" height="300" title="<?php the_title(); ?>" alt="<?php the_title();?>"/>
                    <?php endif; ?>
                    <div>
                        <?php if (function_exists('the_ratings')) the_ratings(); ?>
                    </div>
                    <div class="postViews"> 
                        <i class="fa fa-eye"></i>
                        <?php echo number_format(get_post_meta($post->ID, 'post_views_count', true)); ?>
                    </div>
                    <?php if (!empty($imdb_id)) : ?>
                        <div class="postImdb"> 
                            <a rel="nofollow" href="<?php echo 'http://www.imdb.com/title/' . $imdb_id; ?>" target="_blank">
                                <i class="fa fa-film"></i>
                                <?php _e('IMDB');?> 
                            </a>
                        </div> 
                    <?php endif;?>
                    <div class="report">
                        <a rel="nofollow" href="<?php echo get_permalink($post->ID); ?>?do=report"><?php _e('التبليغ'); ?></a>
                    </div>  
                    <div class="vTrailer"  <?php echo $dataTrailer; ?>></div>
                </div> 
            </div>
        </div>
        <div class="col-md-6 col-sm-8 col-xs-12 fRight">
            <div class="boxCenter">
                    <div class="postTitle">
                        <h1 itemprop="name"><?php the_title(); ?></h1> 
                    </div> 
                <?php if (!empty($actor)) : ?>
                    <div class="actors">
                        <div class="actor"><?php _e('الممثلين');?></div>
                        <?php foreach ($actor as $actor): ?>
                        <span>
                            <a title="<?php echo $actor->name; ?>" href="<?php echo get_bloginfo('url') . "/actor/" . $actor->slug; ?>" itemprop="actor" itemtype="http://schema.org/Person">
                                <?php echo $actor->name . '  '; ?>
                            </a>
                        </span>
                        <?php $numstars ++; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?> 
                    <?php if (!empty($seasons) && !empty($series)) : ?>
                    <div class="seasons">
                        <span class="season"><?php _e('المواسم'); ?></span> 
                    <?php foreach ($series as $serSeason) : endforeach; ?>
                    <?php $args = array('post_type' => 'post', 'tax_query' => array(array('taxonomy' => 'series', 'field' => 'slug', 'terms' => $serSeason->slug), 'orderby' => 'ASC')); ?>
                    <?php $getSeason = new WP_Query($args); ?>
                    <?php $ar = array(); ?>
                    <?php while ($getSeason->have_posts()) : $getSeason->the_post(); ?>
                        <?php $theSeason = get_the_terms($post->ID, 'seasons', ''); ?>
                        <?php if (is_array($theSeason) || is_object($theSeason)) : ?>
                            <?php foreach ($theSeason as $season): ?>
                                <?php if (in_array($season->name, $ar)) : ?>
                                    <?php continue; ?>
                                    <?php endif; ?>
                                        <a href="<?php echo get_bloginfo('url'); ?>/seasons/<?php echo $season->slug; ?>">
                                            <span><?php echo str_replace($serSeason->name, '', $season->name) . " "; ?></span>
                                        </a>
                                <?php $ar[] = $season->name; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <?php if (!empty($story)) : ?>
                    <div class="postStory">
                        <span class="story"><?php _e('القصة');?></span>
                        <span><?php echo $story; ?></span>
                    </div>
                <?php endif; ?>
                <?php if (!empty($downloads) && isArrayEmpty($downloads, "link")) : ?>
                <div class="btnDown">
                    <a class="btn" href="<?php echo get_permalink($post->ID) . '?do=download'; ?>">
                        <span class="txt"> <?php echo _e('التحميل المباشر'); ?> </span>
                        <span class="round"><i class="fa fa-download"></i> </span>
                    </a>
                </div>
                <?php endif; ?>
                <?php if (!empty($servers)) : ?>
                <div class="btnView">
                    <a class="btn" href="<?php echo get_permalink($post->ID) . '?do=views'; ?>">
                        <span class="txt"> <?php echo _e('المشاهدة المباشرة'); ?> </span>
                        <span class="round"><i class="fa fa-video-camera"></i> </span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 fRight">
            <div class="boxLeft">
                <ul class="postInfo">
                    <?php $catName = get_the_terms($post->ID, 'category', '');?>
                    <?php if (!empty($catName)): ?>
                        <?php foreach ($catName as $cName)?>
                    <li>
                        <span><?php _e('القسم');?> : </span>
                        <a href="<?php echo  get_bloginfo('url').'/category/'. $cName->slug;?>"><?php echo $cName->name; ?></a>
                    </li>
                    <?php endif;?>
                    <?php if (!empty($releaseYear)) : ?>
                        <li>
                            <span><?php _e('تاريخ الإنتاج'); ?> :</span>
                            <?php foreach (array_slice($releaseYear, 0, 1) as $releaseYear): ?>
                                <a href="<?php echo get_bloginfo('url') . "/releaseYear/" . $releaseYear->slug; ?>">
                                    <?php echo $releaseYear->name . " "; ?>
                                </a>
                            <?php endforeach; ?>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($quality)) : ?>
                        <li>
                            <span><?php _e('الجودة'); ?> :</span>
                            <?php foreach ($quality as $quality): ?>
                                <a href="<?php echo get_bloginfo('url') . '/quality/' . $quality->slug; ?>">
                                    <?php echo $quality->name; ?>
                                </a>
                            <?php endforeach; ?>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($genres)) : ?>
                        <li>
                            <span><?php _e('النوع'); ?> :</span>
                            <?php foreach ($genres as $genres): ?>
                                <a href="<?php echo get_bloginfo('url') . "/genres/" . $genres->slug; ?>">
                                    <?php echo $genres->name; ?>
                                </a>
                            <?php endforeach; ?>
                        </li> 
                    <?php endif; ?>
                    <?php if (!empty($runtime)) : ?>
                        <li>
                            <span><?php _e('المدة'); ?> :</span>
                            <a> 
                                <?php echo $runtime; ?>
                            </a>
                        </li> 
                    <?php endif; ?>
                    <?php if (!empty($lang)) : ?>
                        <li>
                            <span><?php _e('اللغة'); ?> :</span>
                            <a> 
                                <?php echo $lang; ?>
                            </a>
                        </li> 
                    <?php endif; ?> 
                    <?php if (!empty($series)) : ?>
                        <li>
                            <?php foreach ($series as $sEpisode)?>
                            <span><?php _e('عدد الحلقات'); ?> :</span> 
                            <a> 
                                <?php echo wp_get_count_episode($sEpisode->slug); ?>
                            </a> 
                        </li> 
                    <?php endif; ?>
                    <?php if (!empty($writers)) : ?>
                      <li>
                            <span><?php _e('الكاتب'); ?> :</span>
                            <?php foreach ($writers as $writer) ?>
                            <a href="<?php echo get_bloginfo('url') . "/writer/" . $writer->slug; ?>">
                            <?php echo $writer->name . " "; ?>
                            </a>
                      </li>
                    <?php endif; ?>  
                    <?php if (!empty($directors)) : ?>
                      <li>
                          <span><?php _e('الاخراج'); ?> :</span>
                            <?php foreach ($directors as $director) ?>
                            <a href="<?php echo get_bloginfo('url') . "/director/" . $director->slug; ?>">
                            <?php echo $director->name . " "; ?>
                            </a>
                      </li> 
                    <?php endif; ?>   
                    <li>
                        <div class="social_position">
                            <div class="addthis_sharing_toolbox"></div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-531f21056f1feee8"></script>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
    <?php } // end view
?>
<?php if (!empty($postTag)) : ?>
<div id="boxeTags">
    <div class="container"> 
        <div class="row"> 
            <ul class="tags"> 
                <?php foreach ($postTag as $tags): ?>
                    <li>
                        <a itemprop="name" href="<?php echo get_bloginfo('url') . '/tag/' . $tags->slug; ?>" rel="tag">
                            <i class="fa fa-tag"></i>
                            <?php echo $tags->name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>  
</div>
  <?php endif; ?>
<div class="container-fluid ad">
    <div class="row">
        <?php $adCenter = get_option('vo_ad_center'); ?>
        <?php if (!empty($adCenter)) : ?>
            <div class="boxAdCenter">
                <center>
                    <?php echo get_option('vo_ad_center'); ?>
                </center>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $categories = get_the_terms($post->ID, 'category', ''); ?>
<?php if (!empty($categories) || !empty($series)): ?>
      <div class="container-fluid PostCat">
          <div class="row"> 
              <?php if (empty($series)): ?>
                  <?php foreach ($categories as $cat) : ?>
                      <?php $catSlug = $cat->slug; ?>
                      <?php $catName = $cat->name; ?>
                  <?php endforeach; ?>
                  <?php $args = array('post_type' => 'post', 'posts_per_page' => 10, 'category' => $catSlug, 'orderby' => 'rand'); ?>
                  <?php $getCate = new WP_Query($args); ?>
                  <?php if ($getCate->have_posts()) : ?>
                      <div class="recommend">
                          <div class="PostRandom"> <i class="fa fa-star"></i> <?php _e('ننصحك بمشاهدة', 'VO'); ?> <i class="fa fa-star"></i> </div>
                          <hr>
                      </div>
                      <?php while ($getCate->have_posts()) : $getCate->the_post(); ?>
                          <article class="post">
                              <div class="col-xs-5th col-sm-5th col-md-5th col-lg-5th">
                                  <?php require( get_template_directory() . '/inc/temp/data/content.php' ); ?>
                              </div> 
                          </article>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?> 
                  <?php endif; ?>
              <?php else : ?>
                  <?php $seriesAr = (is_array(get_the_terms($post->ID, 'series', ''))) ? get_the_terms($post->ID, 'series', '') : array(); ?>
                  <?php foreach ($seriesAr as $ser) : ?>
                      <?php $seriesSlug = $ser->slug; ?>
                      <?php $seriesName = $ser->name; ?>
                  <?php endforeach; ?>
                  <?php $args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 10, 'tax_query' => array(array('taxonomy' => 'series', 'field' => 'slug', 'terms' => $seriesSlug))); ?>
                  <?php $getSeries = new WP_Query($args); ?>
                  <?php if ($getSeries->have_posts()) : ?>
                        <div class="recommend">
                          <div class="PostRandom"> <i class="fa fa-star"></i> <?php _e('ننصحك بمشاهدة', 'VO'); ?> <i class="fa fa-star"></i> </div>
                          <hr>
                      </div>
                      <?php while ($getSeries->have_posts()) : $getSeries->the_post(); ?>
                          <article class="post">
                              <div class="col-xs-5th col-sm-5th col-md-5th col-lg-5th">
                              </div> 
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?> 
                  <?php endif; ?>
              <?php endif; ?>
          </div>
      </div>
  <?php endif; ?>
<?php if (!empty($assemblies)): ?>
      <div class="container-fluid assemblies">
          <div class="row"> 
              <?php $assem = (is_array($assemblies)) ? $assemblies : array(); ?>
              <?php foreach ($assem as $assem) : ?>
                  <?php $assemSlug = $assem->slug; ?>
                  <?php $assemName = $assem->name; ?>
              <?php endforeach; ?>
              <?php $args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 10, 'orderby' => 'rand', 'tax_query' => array(array('taxonomy' => 'assemblies', 'field' => 'slug', 'terms' => $assemSlug))); ?>
              <?php $getAssemblies = new WP_Query($args); ?>
              <?php if ($getAssemblies->have_posts()) : ?>
                  <div class="recommend">
                      <div class="PostRandom"> 
                          <a href="<?php echo get_bloginfo('url') . '/assemblies/' . $assemName; ?>">
                              <i class="fa fa-star"></i> 
                              <?php echo $assemName; ?> 
                              <i class="fa fa-star"></i> 
                              <hr>
                          </a>
                      </div>
                      
                  </div>
                  <?php while ($getAssemblies->have_posts()) : $getAssemblies->the_post(); ?>
                      <article class="post">
                          <div class="col-xs-5th col-sm-5th col-md-5th col-lg-5th">
                              <?php require( get_template_directory() . '/inc/temp/data/content.php' ); ?>
                          </div> 
                      </article>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?> 
              <?php endif; ?>
          </div>
      </div>
  <?php endif; ?> 
<?php get_footer(); ?>
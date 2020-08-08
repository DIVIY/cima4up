<?php if ( !defined( 'ABSPATH' ) ) exit; 
/*
  Template Name: Movies
 */
	
	if ( isset(  $_POST[sent] ) ) :
		$error = "";
		if ( !trim( $_POST['your_name'] ) || $_POST['your_name'] == null ) :
			$error .= "<p>قم بإدخال الاسم</p>";
		endif;
		if ( !trim( $_POST['movies'] ) || $_POST['movies'] == null ) :
			$error .= "<p>قم بإدخال اسم الفيلم</p>";
		endif;
		if ( !filter_var( trim( $_POST['your_email'] ), FILTER_VALIDATE_EMAIL ) || $_POST['your_email'] == null ) :
			$error .= "<p>قم بإدخال بريد الكتروني صحيح</p>";
		endif;
		if ( !trim( $_POST['your_message'] ) || $_POST['your_message'] == null ) :
			$error .= "<p>قم بإدخال نص الرسالة</p>";
		endif;
		if ( !$error ) :
			$email = mail( get_option( "admin_email" ), trim( $_POST['your_name'] ) . " رسالة من " . get_option( "blogname" ),  "الاسم " . trim($_POST['your_name']) ." " ."طلب فيلم ". trim( $_POST['moves'])." ".stripslashes( trim( $_POST['your_message'] ) ), "From: " . trim( $_POST['your_name'] ) . " <" . trim( $_POST['your_email'] ) . ">\r\nReply-To:" . trim( $_POST['your_email'] ) );
		endif;
	endif;

?> 
<?php get_header(); ?>
<section id="breadcrumbs">
    <div class="container">
		<?php breadcrumbs(); ?>
	</div>
</section>
<section class="section">
<div class="container pages1">
	<div class="row artRow">
		<div class="col-md-12 col-sm-12 col-xs-12 fRight" role="main">
		<?php if ( have_posts() ):
			while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					<div class="pageContent"> 
						<?php if ( $email ) : ?>
						<div class="alert alert-success alert-dismissable">
							<?php  _e( 'تم ارسال الرسالة بنجاح', 'VO' );?>
							</div>
						<?php
						else :
							if ( $error ) : ?>
								<div class="alert alert-danger alert-dismissable">
								<?php echo $error; ?>
								</div>
							<?php else :
									the_content();
							endif; ?>
							<form action="<?php the_permalink(); ?>" id="contactUs" method="post">
								<div class="form-group">
									<input type="hidden" name="sent" id="sent" value="1" />
									<label for="your_name"><?php  _e( 'الاسم', 'VO' ); ?></label>
									<input required placeholder="<?php  _e( 'الاسم', 'VO' ); ?>" class="form-control" type="text" name="your_name" id="your_name" value="<?php echo $_POST['your_name']; ?>" />
									<label for="your_name"><?php  _e( 'اسم الفيلم', 'VO' ); ?></label>
									<input required placeholder="<?php  _e( 'اسم الفيلم', 'VO' ); ?>" class="form-control" type="text" name="movies" id="movies" value="<?php echo $_POST['your_name']; ?>" />
									<label for="your_email"><?php  _e( 'البريد الالكترونى', 'VO' ); ?></label>
									<input required placeholder="<?php  _e( 'البريد الالكترونى', 'VO' ); ?>" class="form-control" type="text" name="your_email" id="your_email" value="<?php echo $_POST['your_email']; ?>" />
									<label for="your_message"><?php  _e( 'الرسالة', 'VO' ); ?></label>
									<textarea required placeholder="<?php _e( 'نص الرسالة', 'VO' ); ?>" rows="8" class="form-control" name="your_message" id="your_message"><?php echo stripslashes( $_POST['your_message'] ); ?></textarea>
									<input class="btn btn-primary" type="submit" name = "send" value = "<?php _e( 'ارسال', 'VO' ); ?>" />
								</div>
							</form>
		<?php endif; ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
			<?php endwhile; ?>
			<?php endif; ?>
			</div><!-- #content -->
		</div>
	</div>
</section>
<?php get_footer(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1.0", minimum-scale="1.0", user-scalable=no>
<title>こちらへ入力してください。</title>
<link href="<?php echo get_template_directory_uri(); ?>/default-style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<?php get_header(); ?>
	<!-- メイン -->
	<?php // ループ開始
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>	<div class="main">
	  <div class="content">
          <h1><?php the_title(); ?></h1> <!-- タイトル取得 -->
          <section>
            <?php the_content(); ?> <!-- 本文取得 -->
          </section>
      <?php // ループ終了
        endwhile;
      endif;
      ?>
		</div>
		<?php get_sidebar(); ?>
	<!-- /メイン -->	
	</div>
	<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>

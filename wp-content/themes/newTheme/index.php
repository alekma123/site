<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php echo wp_get_document_title(); ?>
	</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
  <header id="pageHeader">
	<div id="logo"> 
			<a href=”/”><img src=”<?php bloginfo('template_url'); ?>\images\logo.jpg” alt=”logo”></a>
	</div>	
	<div id="phone"> номер телефона: <?php bloginfo( 'name' ); ?> </div>
	<div id="address">адрес: <?php bloginfo( 'description' ); ?> </div>
  </header>
  <nav id="mainNav">Nav</nav>
  <article id="mainArticle">
	<div>
		<h4>Slideshow</h4>
	</div>
	<div class="middle">
				<?php
				// циклы вывода записей
				// если записи найдены
				if ( have_posts() ){
					while ( have_posts() ){
						the_post();

						echo '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';

						echo get_the_excerpt();
					}
				}
				// елси записей не найдено
				else{
					echo ' <p>Записей нет...</p>';
				}
				?>
			</div>
	</article>
  <footer id="pageFooter">
	Footer
	<?php echo date('Y') ?> © Я и компания моя
	<?php wp_footer(); ?>
  </footer>
</body>
</html>
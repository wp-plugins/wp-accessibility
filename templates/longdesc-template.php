<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php the_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php print get_stylesheet_uri(); ?>">
<link rel="stylesheet" type="text/css" href="<?php print plugins_url( '/wp-accessibility/wpa-style.css' ); ?>">
</head>
<body>
	<div id="longdesc" class="template-longdesc">
		<div id="desc">
	<?php  the_content(); ?>
		</div>
	<?php
		if( isset( $_GET['referrer'] ) ) {
			$uri = get_permalink( (int) $_GET['referrer'] );
			if( !empty( $uri ) ) {
				$uri.= '#' . longdesc_return_anchor( get_the_ID() );
				print '<p><a href="' . esc_url( $uri ) . '">' .esc_html__( 'Return to article.', 'longdesc' ) . '</a></p>';
			}
		}
	?>
	</div>
</body>
</html>
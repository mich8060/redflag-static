<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/regular/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/bold/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/fill/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/duotone/style.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<section class="toolbar">
    <div class="toolbar--container">
        <div>
            Call or Text Us:
            <a href="tel:469-436-5274" class="system-content-link-alt">469-436-5274</a>
        </div>
        <div>
            <a href="#" class="system-content-link-alt">Support</a> |
            <a href="#" class="system-content-link-alt">Login</a>
        </div>
    </div>
</section>

<header class="header">
    <div class="header--container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header--branding">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/redflag.svg" alt="GetApp" />
        </a>
        <button class="nav--toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
		<nav class="nav">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'nav--container',
				'walker'         => new Redflag_Walker_Nav_Menu()
			) );
			?>
		</nav>
        <a href="#" class="button">Book Demo</a>
    </div>
</header>
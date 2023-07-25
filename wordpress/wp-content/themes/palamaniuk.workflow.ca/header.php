<?php
/**
 * The header for theme

 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package palamaniuk.workflow.ca
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="container">
      <div class="header-top">
        <?php
			    the_custom_logo();
				?>
        <div class="header-top__search">
          <input type="search" placeholder="Enter City/Postal Code" class="header-top__search-input">
          <button type="submit" class="header-top__search-btn">
          </button>
        </div>
        <a href="tel:+12263700170" class="header-top__phone phone_num">
          +1 226-370-0170
        </a>
      </div>
      <div class="header-bottom">
        <?php
          wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'nav',
            'container_class' => 'header-bottom__nav',
            'menu_class' => 'header-bottom__nav-list',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>'
          ]);
        ?>
        <button type="button" class="header-bottom__btn book_online">
          <p class="book_online__text">
            book online
          </p>
        </button>
      </div>
    </div>
  </header>
<?php
/**
 * The header for our theme.
 *
 * @package Botega_Scratch_Theme
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="HandheldFriendly" content="true">
  
  <!--[if (lt IE 9)&(!IEMobile)]>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/enhanced.css" />
  <![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header role="banner">
      <div>
            <h1 class="logo"><a href="#">Logo</a></h1>
            <ul  id="nav-anchors" class="nav-anchors">
              <li><a href="#nav" id="menu-anchor">Menu</a></li>
              <li><a href="#search" id="search-anchor">Search</a></li>
            </ul>
            <nav id="nav" class="nav reveal">
                <ul role="navigation">
                    <li><i class="per per-analysis-copy"></i></li>
                    <li><i class="per per-award"></i></li>
                    <li><i class="per per-behaviour"></i></li>
                    <li><i class="per per-certificate"></i></li>
                    <li><i class="per per-code"></i></li>
                    <li><i class="per per-cloud"></i></li>
                    <li><i class="per per-Combined-shape-19051"></i></li>
                    <li><i class="per per-cart"></i></li>
                </ul>
            </nav>
        </div>
  </header><!--end .header-->
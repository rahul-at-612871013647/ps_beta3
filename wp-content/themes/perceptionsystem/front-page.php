<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="content product-info" role="main">
        <section class="product-main">
            <header>
                <h1 class="product-name">Demo Product</h1>
                <div class="product-overview">
                    <strong class="price">$23</strong>
                    <ol class="star">
                        <li class="on">&#9733;</li>
                        <li class="on">&#9733;</li>
                        <li class="on">&#9733;</li>
                        <li class="on">&#9733;</li>
                        <li>&#9734;</li>
                    </ol>
                    <a href="#" class="review-count">8 Reviews</a>
                </div>
                
            </header>
            <div id="product-img" class="product-img">
                <figure class="img-container" id="img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_img_1.jpg" alt="Super Ffly T-shirt" />
                </figure>
                <nav>
                    <ul>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/product_img_1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/product_img_1_thumb.jpg" alt="Super Ffly Men's Shirt" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/product_img_2.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/product_img_2_thumb.jpg" alt="Super Ffly Women's Shirt" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/product_img_3.png"><img src="<?php echo get_template_directory_uri(); ?>/images/product_img_3_thumb.jpg" alt="Ffly Logo" /></a></li>
                    </ul>
                </nav>
            </div><!--end .product-img-->
            <form method="post" action="#" id="product-form" class="product-form">
                <fieldset>
                    <legend>Add to Cart</legend>
                    <div class="submit-form">
                        <input type="submit" class="btn" value="Add to Cart" />
                    </div>
                </fieldset>
            </form><!--end #product-form-->
            <div class="product-description"> 
                <div id="p-desc">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div><!--end .product-description-->
        </section><!--end .product-main-->
        <section class="aux related-products" id="related-products">
            <div id="p-desc">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
        </section><!--end .related-products-->
    </div><!--end .content-->

<?php
get_footer();

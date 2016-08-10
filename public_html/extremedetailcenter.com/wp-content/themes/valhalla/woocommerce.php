<?php get_header(); ?>

<?php if(is_shop() || is_product_category() || is_product_tag()): // SHOP TEMPLATE !! ?>

<div id="primary"<?php if(!empty($pagename)) echo ' class="'.$pagename.'"'; ?>>
    <div class="container woocommerce">
    <?php wc_print_notices();
        $args = array(
            'number'     => $number,
            'orderby'    => 'title',
            'order'      => 'ASC',
            'hide_empty' => $hide_empty,
            'include'    => $ids,
            'exclude'    => array(16)
        );
        $product_categories = get_terms('product_cat',$args);
        $count = count($product_categories);
        if($count > 0){
            foreach($product_categories as $product_category){
                echo '<div class="cf">';
                echo '<h4><span>' . $product_category->name . '</span></h4>';
                $args = array(
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            // 'terms' => 'white-wines'
                            'terms' => $product_category->slug
                        )
                    ),
                    'post_type' => 'product',
                    'orderby' => 'title,'
                );
                $products = new WP_Query($args);
                echo "<ul class='products'>";
                while ($products->have_posts()){
                    $products->the_post(); $current = new WC_Product(get_the_ID());
                    ?>
                        <li class="product">
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>
                            <span class="price"><?php woocommerce_template_loop_price(); ?></span>
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <?php $desc = get_the_excerpt(); if(empty($desc)) $desc = get_the_content(); ?>
                            <p><?php echo $desc; ?></p>
                            <?php if(function_exists(get_field)): if(get_field('msds')): ?>
                                <a href="<?php the_field('msds'); ?>" class="msds" target="_blank">Download MSDS</a>
                            <?php endif; endif; ?>
                            <?php woocommerce_template_loop_add_to_cart(); ?>
                        </li>
                    <?php
                }
                echo "</ul>";
                echo "</div>";
            }
        } $args = array( // === === === === === === === ===>>> GIFT CARD
            'number'     => $number,
            'orderby'    => 'title',
            'order'      => 'ASC',
            'hide_empty' => $hide_empty,
            'include'    => array(16)
        );
        $product_categories = get_terms('product_cat',$args);
        $count = count($product_categories);
        if($count > 0){
            foreach($product_categories as $product_category){
                echo '<div class="cf">';
                echo '<h4><span>' . $product_category->name . '</span></h4>';
                $args = array(
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            // 'terms' => 'white-wines'
                            'terms' => $product_category->slug
                        )
                    ),
                    'post_type' => 'product',
                    'orderby' => 'title,'
                );
                $products = new WP_Query($args);
                echo "<ul class='products' style='text-align:center;'>";
                while ($products->have_posts()){
                    $products->the_post(); $current = new WC_Product_Variable(get_the_ID());
                    ?>
                        <li class="product" style="display:inline-block;float:none;">
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>
                            <span class="price"><?php woocommerce_template_loop_price(); ?></span>
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <?php $desc = get_the_excerpt(); if(empty($desc)) $desc = get_the_content(); ?>
                            <p><?php echo $desc; ?></p>
                            <?php if(function_exists(get_field)): if(get_field('msds')): ?>
                                <a href="<?php the_field('msds'); ?>" class="msds" target="_blank">Download MSDS</a>
                            <?php endif; endif; ?>
                            <?php woocommerce_variable_add_to_cart(); ?>
                        </li>
                    <?php
                }
                echo "</ul>";
                echo "</div>";
            }
        } ?>
    </div>
</div>
<style>
    table.variations .value,table.variations .label{width:100%;display:block;margin-bottom:3px;}
    table.variations .label{font-weight:bold;}
    table.variations .value{margin-bottom:10px;}
    aside#sidebar{display:none;}
    .single_variation_wrap{display:block!important;}
</style>

<script>
jQuery(document).ready(function($){
    $('table.variations').next().remove();
});
</script>


<?php elseif(is_product()): // SINGLE PRODUCT TEMPLATE !! ?>

    <?php // GIFT CARD
        if(get_the_ID() == 203):
            $product = new WC_Product_Variable(get_the_ID());
    ?>

<style>
    .rpw_product_message{margin-top:20px;}
    .variations_form input,.variations_form textarea{font-family:inherit;width:100%;display:block;margin-bottom:20px;padding:5px;height:auto;border:1px solid #333;outline:none;border-radius:2px;box-shadow:none;}
    .variations_form textarea{min-height:80px;}
</style>
<script>
jQuery(document).ready(function($){
    $(window).on("load",function(){
        $('.variations_form input,.variations_form textarea').unbind("blur");
    });
});
</script>
    
    <?php
        endif; // Gift card
    ?>

<div id="title">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
    </div>
</div>
<div id="primary"<?php if(!empty($pagename)) echo ' class="'.$pagename.'"'; ?>>
    <div class="container woocommerce single-product">
        <div class="content cf">
            <?php wc_print_notices(); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="thumbnail">
                    <?php woocommerce_show_product_images(); ?>
                </div>
                <div class="description">
                    <?php the_content(); ?>
                    <span class="price"><?php woocommerce_template_single_price(); ?></span>
                    <?php if($product->product_type != "variable"): ?>
                    <?php woocommerce_simple_add_to_cart(); ?>
                    <?php else:
                    woocommerce_variable_add_to_cart(); ?>
                    <?php endif; if(function_exists("get_field")): if(get_field('msds')): ?>
                        <a href="<?php the_field('msds'); ?>" class="msds" target="_blank">Download MSDS</a>
                    <?php endif; endif; ?>
                    <a href="<?php echo site_url(); ?>/shop/" class="button back-to-all"><i class="fa fa-chevron-left"></i> Back to All Products</a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php else: // REGULAR WOOCOMMERCE STUFFS !! ?>

<div id="primary"<?php if(!empty($pagename)) echo ' class="'.$pagename.'"'; ?>>
    <div class="container woocommerce">
        <?php woocommerce_content(); ?>
    </div>
</div>

<?php endif; ?>
<?php get_footer(); ?>
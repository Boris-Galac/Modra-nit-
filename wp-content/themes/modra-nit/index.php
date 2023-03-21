<?php get_header() ?>


<main class="main main-news">

<!-- all news section -->
<section class="all-news-section">
    <div class="banner" aria-label="banner image of single news">
        <img class="banner__img" src="/wp-content/themes/modra-nit/assets/assets/images/banner-img-2.jpg" alt="banner image" />
        <div class="container">
            <h2 class="banner--heading">
                SVE NOVOSTI
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="d-grid news__body-inner-wrapper py-2">
            <div class="news__body-wrapper">
            <div class="all-news__inner-wrapper mb-2">
            <?php
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
             $args = array(
                'post_type'=> 'post',
                'posts_per_page'=> 4,
                'paged'=> $paged
               );
               $the_query = new WP_Query($args);
            if($the_query->have_posts()){
            while( $the_query->have_posts()){
                $the_query->the_post();
            get_template_part('template-parts/content', 'news-card');
            }

?>
    </div>
<div class="pagination">            
    <div class="pagination__wrapper"><?php
    $pages = array(
        'total'=>$the_query->max_num_pages
    );
    echo paginate_links($pages);
?>
    </div>
</div>

<?php
}
wp_reset_postdata();
?>
            </div>
            <!-- sidebar -->
            <?php get_sidebar() ?>
            <!------------>
        </div>
    </div>
</section>
<!---------------->
</main>


<?php get_footer() ?>


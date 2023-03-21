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
              if(have_posts()){
                while(have_posts()){
                  the_post();
                  get_template_part('template-parts/content', 'news-card');
                }
              }else{
                echo "<h2 class='h2--heading grid-center mt-8'>Nema traženih rezultata...</h2>";
              }
              ?>
            </div>
          </div>
          <!-- sidebar -->
          <?php get_sidebar() ?>
          <!------------>
    </div>
</section>
<!---------------->
</main>


<?php get_footer() ?>


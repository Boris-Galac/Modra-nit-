<?php get_header() ?>

<main class="main main-single">
    <!------ news section ------>
    <section class="news-section">
      <div class="banner" aria-label="banner image of single news">
        <?php
            if(get_field('banner_img')){ ?>
                <img class="banner__img" src="<?php echo get_field('banner_img')['sizes']['pageBanner']; ?>" alt="banner image" />
                <?php
            }else { ?>
<img class="banner__img" src="/wp-content/themes/modra-nit/assets/assets/images/banner-img.jpg" alt="banner image" />

            <?php }
        ?>
        <div class="container">
          <h2 class="banner--heading">
            <?php the_title() ?>
          </h2>
        </div>
      </div>
      <div class="container" aria-hidden="true">
        <div class="news__body-wrapper mb-4">
          <div class="news__body">
            <div class="meta-info flex-row-center">
              <span class="meta-info__date flex-row-center">
                <img src="/wp-content/themes/modra-nit/assets/assets/icons/clock-icon.svg" alt="clock" />
                <span class="meta-info__time"><?php the_time('F j, Y') ?></span>
              </span>
              <?php
              if(get_field('category_news')){
                      ?>
                      <div class="meta-info__separator"></div>
                      <span class="meta-info__category p-05">
                        <?php
                     echo the_field('category_news'); ?>
                     </span>
                     <?php
            }
                    ?>
            </div>
            <div class="news__body-inner-wrapper d-grid">
                <div class="news__body-text">
                    
                    <?php
                $content = get_the_content();
    
                    if (!empty($content)) {
                    the_content();
                    } else {
                    echo "<p class='grid-center'>Nažalost, ovaj post trenutno nema teksta!</p>";
    } ?>
                </div>
                <!-- sidebar -->
                <?php get_sidebar() ?>
                <!------------>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!------------------>
  </main>
<?php get_footer() ?>
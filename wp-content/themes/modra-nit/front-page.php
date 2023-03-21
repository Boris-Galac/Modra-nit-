<?php get_header(); ?>
<main class="main home-main">
      <canvas></canvas>

      <!-- hero-section -->

      <section class="hero-section grid-center mb-4">
        <div class="container">
          <div class="hero__showcase">
            <div class="hero__headings mb-2">
              <h2 class="hero__subheadline">društveno poduzeće modra nit</h2>
              <h3 class="hero__headline">
                <span class="hero-span__headline-wrapper d-grid"
                  ><p class="hero-span__headline">agencija za</p></span
                >
                <span class="hero-span__headline-wrapper d-grid">
                  <p class="hero-span__headline">projektnu</p></span
                >
                <span class="hero-span__headline-wrapper d-grid"
                  ><p class="hero-span__headline">vidljivost</p></span
                >
              </h3>
            </div>
            <button><a href="#modra-nit" class="hero__cta">istraži</a></button>
          </div>
        </div>
        <img
          class="hero-illustration"
          src="
          <?php echo get_theme_file_uri('/assets/assets/graphic/hero-illustration.svg') ?>
          "
          aria-hidden="true"
        />
        <a href="#modra-nit" class="container_mouse">
          <span class="mouse-btn">
            <span class="mouse-scroll"></span>
          </span>
        </a>
      </section>

      <!-------------------->
      <!-- o nama section  -->

      <section class="o-nama-section mb-4" id="modra-nit">
        <div class="container">
          <h2 class="h2--heading h2--heading-section" data-subheadline="o nama">
            o nama
          </h2>
          <article class="o-nama__inner-wrapper left">
            <div class="o-nama__text-block mb-2 p-05">
              <h3 class="h3--heading h3--heading-block">o modroj niti</h3>
              <p class="p-text">
                Agencija je za marketing specijalizirana za vidljivost EU
                projekata. Osnivač i jedini vlasnik Modre niti je Udruga za
                kreativni razvoj Slap iz Osijeka, koja se od 2000. godine bavi
                socijalnim poduzetništvom. Upravo na Slapovim EU projektima
                kreativni tim Modre niti učinio je prve korake u svijet
                vidljivosti EU projekata. Modra nit posluje od 2010. godine, te
                nudi kreativne usluge organizacijama civilnog društva,
                jedinicama lokalne samouprave, razvojnim agencijama te ostalim
                provoditeljima projekata financiranih iz EU projekata. Naši
                klijenti su često i naši partneri na projektima s kojima gradimo
                društveno poduzetništvo i promoviramo društveno korisne ciljeve.
              </p>
              <div class="o-nama__skew"></div>
            </div>
            <img
              class="o-nama__img-wrapper"
              src="<?php echo get_theme_file_uri('/assets/assets/images/o-nama-modranit-img.jpg') ?>"
              alt="o nama image"
            />
          </article>
        </div>
      </section>

      <!-------------------->
      <!-- novosti section -->

      <section class="novosti-section py-4 mb-4">
        <div class="container">
          <h2
            class="h2--heading h2--heading-section block-light"
            data-subheadline="novosti"
          >
            novosti
          </h2>
          <div class="novosti__carousel">
            <button class="slide-btn slide__left p-05">
              <img src="<?php echo get_theme_file_uri('/assets/assets/icons/slide-left.svg') ?>" aria-hidden="true" />
            </button>
            <div class="slider__wrapper">
             <?php
             $args = array(
              'post_type'=> 'post',
              'posts_per_page'=> 5
             );
             $the_query = new WP_Query($args);
                if($the_query -> have_posts()){
                  while($the_query -> have_posts()){
                    $the_query -> the_post();
                    get_template_part('template-parts/content', 'news-card');
                  }
                }
                wp_reset_postdata();
             ?>
            </div>
            <button class="slide-btn slide__right p-05">
              <img src="<?php echo get_theme_file_uri('/assets/assets/icons/slide-right.svg') ?>" aria-hidden="true" />
            </button>
          </div>
        </div>
      </section>

      <!-------------------->
      <!-- gallery section -->

      <section class="gallery-section mb-4">
        <div class="container">
          <h2
            class="h2--heading h2--heading-section mb-2"
            data-subheadline="galerija"
          >
            galerija
          </h2>
          <div
            style="
              --swiper-navigation-color: #fff;
              --swiper-pagination-color: #fff;
            "
            class="swiper mySwiper2"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-01.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-01.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-02.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-03.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-04.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-05.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-06.jpg') ?>" />
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-01.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-02.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-03.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-04.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-05.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-06.jpg') ?>" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri('/assets/assets/images/swiper-imgs/main-img-07.jpg') ?>" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-------------------->
      <!-- partneri section -->

      <section class="partneri-section">
        <div class="container">
          <h2
            class="h2--heading h2--heading-section block-light"
            data-subheadline="partneri"
          >
            partneri
          </h2>
          <div class="partneri__inner-wrapper d-flex">
            <img
              src="
              <?php echo get_theme_file_uri('/assets/assets/images/partneri-imgs/image 2.png') ?>"
              alt="partneri image"
            />
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/images/partneri-imgs/image 3.png') ?>"
              alt="partneri image"
            />
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/images/partneri-imgs/image 4.png') ?>"
              alt="partneri image"
            />
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/images/partneri-imgs/image 5.png') ?>"
              alt="partneri image"
            />
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/images/partneri-imgs/image 6.png') ?>"
              alt="partneri image"
            />
            <img
              src="<?php echo get_theme_file_uri('/assets/assets/images/partneri-imgs/image 7.png') ?>"
              alt="partneri image"
            />
          </div>
        </div>
      </section>
    </main>
    <?php get_footer() ?>
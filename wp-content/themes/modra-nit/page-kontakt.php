<?php get_header() ?>
<main class="main main-kontakt">
      <!-- KONTAKT section -->

      <section class="kontakt-section mt-8">
        <div class="container">
          <h2
            class="h2--heading h2--heading-section"
            data-subheadline="kontakt"
          >
            kontakt
          </h2>
          <div class="kontakt__wrapper">
            <div class="kontakt__about kontakt-row d-flex mb-4 left">
              <div class="kontakt-inner-row">
                <h3 class="h3--heading h3--heading-block">
                  MI SMO KREATIVAN TIM ŠIROKOG SPEKTRA VJEŠTINA, S BOGATIM
                  ISKUSTVOM U RAZNOVRSNIM PROJEKTIMA.
                </h3>
                <p class="p-text">
                  Pružamo kvalitetnu uslugu i podršku u svim aspektima
                  marketinga, dizajna i tržišnih komunikacija. Tu smo ukoliko
                  vam je potreban oglas u tiskanim ili elektronskim medijima,
                  efektan društveni događaj ili ste zainteresirani za digitalni
                  marketing, društvene mreže i dizajn. Sve što radimo, radimo sa
                  srcem. Sa svakim klijentom ostvarujemo blisku povezanost kako
                  bi mogli u potpunosti shvatiti njihove želje i potrebe i u
                  skladu s time pružiti im najkvalitetniju uslugu i ostvariti
                  sve ciljeve.
                </p>
              </div>
              <img
                src="/wp-content/themes/modra-nit/assets/assets/images/modra-nit-image.jpg"
                alt="modra nit image"
              />
            </div>
            <div class="kontakt__info kontakt-row d-flex mb-4 right">
              <div class="kontakt-inner-row">
                <h3 class="h3--heading h3--heading-block">
                  modra nit d.o.o. za istraživanje tržišta i promidžbu
                </h3>
                <p class="p-text">Otokara Krešovanija 31, 31000 Osijek</p>
                <div class="kontakt__list d-grid">
                  <span class="kontakt__item flex-row-center"
                    ><img
                      src="/wp-content/themes/modra-nit/assets/assets/icons/phone.svg"
                      aria-hidden="true"
                    />
                    <p class="p-text">
                      <a href="tel:+38531213556">+ 385 31 213 556</a>
                    </p>
                  </span>
                  <span class="kontakt__item flex-row-center">
                    <img src="/wp-content/themes/modra-nit/assets/assets/icons/mail.svg" aria-hidden="true" />
                    <p class="p-text">
                      <a href="mailto:modranit@gmail.com">modranit@gmail.com</a>
                    </p>
                  </span>
                  <span class="kontakt__item flex-row-center">
                    <img
                      src="/wp-content/themes/modra-nit/assets/assets/icons/mdi_bank-outline.svg"
                      aria-hidden="true"
                    />
                    <p class="p-text">IBAN: HR6523600001102125422</p>
                  </span>
                </div>
              </div>
              <div class="kontakt-inner-row">
               <!-- contact form -->
               <?php get_template_part('template-parts/content', 'contact-form') ?>
               <!------------------>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!---------------------->
      <!-- RADNO VRIJEME section -->

      <section class="radno-vrijeme-section mb-4">
        <div class="container">
          <h3 class="h3--heading h3--heading-block">radno vrijeme</h3>
          <div class="radno-vrijeme__wrapper">
            <div class="radno-vrijeme__row flex-row-center">
              <img
                src="/wp-content/themes/modra-nit/assets/assets/icons/clock-icon.svg"
                alt="working time icon"
                class="radno-vrijeme__icon"
              />
              <p class="p-text">Današnje radno vrijeme:</p>
              <time class="radno-vrijeme__time"></time>
            </div>
            <div class="radno-vrijeme__row flex-row-center">
              <strong>Subota - Nedjelja:</strong>
              <p class="p-text">Zatvoreno</p>
            </div>
          </div>
        </div>
      </section>

      <!-------------------------->
    </main>
<?php get_footer() ?>
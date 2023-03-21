    <!-- search -->
    <div class="search-form-wrapper" aria-hidden="true">
      <form class="search-form" title="Search" method="get" action="<?php echo home_url() ?>">
        <input
          class="search-form__input p-1"
          type="search"
          name="s"
          id="search"
          placeholder="Pretraži..."
          value="<?php echo get_search_query(); ?>"
          required
        />
        <button class="search-form__submit" type="submit">
          <img src="<?php echo get_theme_file_uri('/assets/assets/icons/search-white.svg') ?>" aria-hidden="true" />
        </button>
      </form>
    </div>
<button class="scroll-to-top-btn" aria-hidden="true">
      <img src="<?php echo get_theme_file_uri('/assets/assets/icons/arrow-top-icon.svg') ?>" aria-hidden="true" />
    </button>
    <!----------------------->
    <div class="overlay" aria-hidden="true"></div>
    <!-- footer -->
    <div class="search-form-wrapper" aria-hidden="true">
      <form class="search-form">
        <input
          class="search-form__input p-1"
          type="search"
          name="search"
          id="search"
          placeholder="Pretraži..."
          required
        />
        <button class="search-form__submit" type="submit">
          <img src="<?php echo get_theme_file_uri('/assets/assets/icons/search-white.svg') ?>" aria-hidden="true" />
        </button>
      </form>
    </div>

    <footer class="footer py-4 grid-center">
      <h2 class="h2--heading text-center">projekt krugovi up.02.3.03.0087</h2>
      <div class="footer__inner-wrapper">
        <img src="<?php echo get_theme_file_uri('/assets/assets/images/eu-footer-img.png') ?>" alt="eu image" />
      </div>
      <div class="footer__border-line"></div>
      <p class="footer__copyright-text text-center">
        Copyright &copy; 2023 Modra nit - All Rights Reserved. Sadržaj ove web
        stranice isključiva je odgovornost Modre niti i ne odražava nužno
        stavove Europske unije.
      </p>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
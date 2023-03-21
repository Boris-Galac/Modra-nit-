<div class="card">
               <div class="card__img d-grid">
               <a class="card__img-link d-grid" href="<?php the_permalink() ?>">
               <?php if(has_post_thumbnail()){ ?>
                            <img src="<?php the_post_thumbnail_url();  ?>" alt="project image">
                            <?php }else{ ?>
                              <img src="<?php echo get_theme_file_uri('/assets/assets/images/card-img.jpg'); ?>" alt="default generic image"> 
                              <?php
                            }
                      ?>
                      </a> 
                </div>
                <div class="meta-info flex-row-center p-05">
                  <span class="meta-info__date flex-row-center">
                    <img src="<?php echo get_theme_file_uri('/assets/assets/icons/clock-icon.svg') ?>" alt="clock" />
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
                <div class="card__body p-1">
                  <div class="d-grid">
                    <h3 class="card--heading">
                      <?php the_title() ?>
                    </h3>
                  </div>
                  <a href="<?php the_permalink() ?>" class="link__read-more flex-row-center"
                    >read more<img
                      src="<?php echo get_theme_file_uri('/assets/assets/icons/arrow-right-icon.svg') ?>"
                      aria-hidden="true"
                  /></a>
                </div>
              </div>
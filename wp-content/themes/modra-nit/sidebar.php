<aside class="sidebar p-1">
                <h2 class="sidebar--heading mb-1">nedavne vijesti</h2>
                <?php dynamic_sidebar('sidebar-search-bar') ?>
                <ul class="sidebar__post-list d-grid">
                    <?php
                    $args = array(
                        'posts_per_page' => 5,
                        'post_type'=>'post'
                    );
                    $the_query = new WP_Query($args);
                        if($the_query->have_posts()){
                            while($the_query->have_posts()){
                                $the_query->the_post();
                                ?>
                            <li class="sidebar__post d-grid">
                                <a href="<?php the_permalink() ?>"><?php
                               if(has_post_thumbnail()){ ?>
                                <img src="<?php the_post_thumbnail_url();  ?>" alt="project image">
                                <?php }else{ ?>
                                  <img src="<?php echo get_theme_file_uri('/assets/assets/images/card-img.jpg'); ?>" alt="default generic image"class="sidebar__post-img"> 
                                  <?php
                                }
                                ?>
                                </a>
                            <div class="sidebar__post-body d-grid p-05">
                                <h2 class="card--heading">
                                <?php the_title() ?>
                                </h2>
                                <div class="sidebar__body-footer d-flex">
                                <span class="sidebar__post-date p-05"><?php the_time('F j, Y') ?></span>
                                <a href="<?php the_permalink() ?>" class="link__read-more flex-row-center">read more<img
                                    src="/wp-content/themes/modra-nit/assets/assets/icons/arrow-right-icon.svg" aria-hidden="true" /></a>
                                </div>
                            </div>
                            </li>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                    ?>
                </ul>
                <a href="<?php echo site_url('blog') ?>" class="btn--all-news flex-center my-2"
                    >Sve vijesti</a>
              </aside>
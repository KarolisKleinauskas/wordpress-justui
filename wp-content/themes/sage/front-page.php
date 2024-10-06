<div class="home-banner">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <?php if (get_field('banner_heading')) { ?>
          <h1 class="home-banner__heading"><?php the_field('banner_heading') ?></h1>
        <?php } ?>
        <?php if (get_field('banner_text')) { ?>
          <div class="home-banner__text"><?php the_field('banner_text') ?></div>
        <?php } ?>
        <?php if (get_field(selector: 'banner_link')) { ?>
          <?php
          $banner_link = get_field('banner_link');
          if ($banner_link) {
            $link_url = $banner_link['url'];
            $link_title = $banner_link['title'];
            $link_target = $banner_link['target'] ? $banner_link['target'] : '_self';
            ?>
            <a class="button" href="<?php echo $link_url ?>"
              target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
            <?php } ?>
          <?php } ?>


        </div>
      </div>
    </div>
  </div>


  <div class="why">
    <div class="container">
      <?php if (get_field('why_heading')) { ?>
        <h1 class="why-heading"><?php the_field('why_heading') ?></h1>
      <?php } ?>



      <div class="row">
        <?php

        if (have_rows('why_repeater')):
          while (have_rows('why_repeater')):
            the_row(); ?>
            <div class="col-3">
              <img src="<?php the_sub_field('icon') ?>" class="img-fluid">
              <h3><?php the_sub_field('heading') ?></h3>
              <p><?php the_sub_field('text') ?></p>
            </div>

            <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>



  <div class="which">
    <div class="container">
      <div class="which-heading">
        <div class="row">
          <div class="col-9">
            <?php if (get_field('which_heading')) { ?>
              <h1 class="home-which__heading"><?php the_field('which_heading') ?></h1>
            <?php } ?>
            <div class="which-text">
              <?php if (get_field('which_text')) { ?>
                <div class="home-which__text"><?php the_field('which_text') ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="which-link">

            <?php if (get_field(selector: 'which_link')) { ?>
              <?php
              $banner_link = get_field('which_link');
              if ($banner_link) {
                $link_url = $banner_link['url'];
                $link_title = $banner_link['title'];
                $link_target = $banner_link['target'] ? $banner_link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo $link_url ?>"
                  target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
                <?php } ?>
              <?php } ?>

            </div>
          </div>
        </div>

        <div class="which-repeater">
          <div class="row">

            <?php

            if (have_rows('which_repeater')):
              while (have_rows('which_repeater')):
                the_row(); ?>
                <div class="col-4">
                  <h3 class="text-center"><?php the_sub_field('heading') ?></h3>
                  <img src="<?php the_sub_field('icon') ?>" class="img-fluid">
                  <p><?php the_sub_field('text') ?></p>
                </div>

                <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>


    <div class="steps">
      <div class="container">
        <div class="row">
          <div class="steps-heading">
            <?php if (get_field('steps_heading')) { ?>
              <h1 class="steps_heading"><?php the_field('steps_heading') ?></h1>
            <?php } ?>
          </div>
          <div class="row justify-content-center">
            <div class="col-4">
              <div class="steps-text">
                <?php if (get_field('steps_text')) { ?>
                  <div class="steps_text"><?php the_field('steps_text') ?></div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
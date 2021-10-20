<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 p-post-index">
        <h2 class="p-post-index__title"><?php single_cat_title(); ?></h2>
        <div class="row">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="col-sm-6 col-md-4 mb-3">
            <div class="p-post-index__post c-box-content">
              <div class="p-post-index__post__img">
              <a href="<?php the_permalink() ?>"><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/dist/img/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(); ?>"></a>
              </div>
              <div class="p-post-index__post__info c-box-content__info">
                <h2 class="p-post-index__post__info__name c-box-content__info__name"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <p class="p-post-index__post__info__date"><?php the_date() ?></p>
                <p class="p-post-index__post__info__description c-box-content__info__description
                d-none"><?php echo esc_html(get_the_excerpt()); ?></p>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <?php if(function_exists("pagination")) {
            pagination();
        } ?>
      </div>
      <div class="col-lg-4">
          <?php get_sidebar(); ?>            
      </div>
    </div>
  </div>
<?php get_footer(); ?>
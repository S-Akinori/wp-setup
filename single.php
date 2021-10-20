<?php get_header(); ?>
<article>
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-8">
        <div class="l-post">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="l-post__header">
            <h1 class="l-post__title"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail(get_post_thumbnail_id())) : ?>
            <div class="text-center py-2">
                <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
            </div>
            <?php endif; ?>
          </div>
          <div class="l-post__body my-5">
              <?php the_content(); ?>
          </div>
          <?php endwhile; endif ?>
        </div>
      </div>
      <div class="col-lg-4">
          <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</article>
<?php get_footer(); ?>
<?php get_header(); ?>
<article>
  <div class="container">
    <div class="l-page">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="l-page__header">
        <h1 class="l-post__title text-center"><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail(get_post_thumbnail_id())) : ?>
        <div class="img-container">
          <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
        </div>
        <?php endif ; ?>
      </div>
      <div class="l-page__body my-5">
          <?php the_content(); ?>
      </div>
      <?php endwhile; endif ?>
    </div>
    <?php get_sidebar() ?>
  </div>
</article>
<?php get_footer(); ?>
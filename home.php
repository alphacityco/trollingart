<?php get_header(); ?>
<section class="content">
  <div class="container">
    <div class="row">
      <div id="articulos" class="col-md-7">
          <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <?php
              get_template_part( 'content', get_post_format() );
              endwhile; endif;
          ?>
        </div>
        <?php get_sidebar('blog'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>

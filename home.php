<?php get_header(); ?>
<section class="content">
  <div class="container">
    <div class="row">
      <div id="articulos" class="col-md-7">
          <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <?php
              $tags = "";
              $cont = 0;
              $posttags = sortWpResults( get_the_tags(), 'count', 'asc' );
              if( $posttags ) {
                foreach( $posttags as $tag ) {
                  if( $cont == 0 ) { $firstTag =$tag->name; }
                  $tags .= '#'.$tag->name . ' ';
                  $cont++;
                }
              }
              get_template_part( 'content', get_post_format() );
              endwhile; endif; ?>
        </div>
        <?php get_sidebar('blog'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>

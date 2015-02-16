<?php get_header(); ?>
<section class="content">
  <div class="container">
    <div class="row">
      <div id="articulos" class="col-md-7">
          <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
              <article <?php post_class(); ?>>
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
                ?>
                <div class="row">
                  <div class="titlePost col-md-9"><h2><?php echo "#".$firstTag." | "; the_title(); ?></h2></div>
                  <div class="col-md-3 votes text-right"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
                </div>
                <div class="row contentImage">
                  <img class="imgArticle img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="<?php echo the_title(); ?>">
                </div>
                <div class="row tags">
                  <h4><?php echo $tags; ?></h4>
                </div>
                <div class="row textArticle">
                  <?php the_content(); ?>
                </div>
                <div class="row infoAuthor">
                  <div class="col-xs-1 avatar">
                    <?php //echo get_avatar( get_the_author_meta('email') , 65 ); ?>
                    <?php
                      $str = get_avatar( get_the_author_meta('email') , 65 );
                      preg_match('/(src=["\'](.*?)["\'])/', $str, $match);  //find src="X" or src='X'
                      $split = preg_split('/["\']/', $match[0]); // split by quotes
                      $url_avatar = $split[1]; // X between quotes
                    ?>
                    <img class="img-circle" src="<?php echo $url_avatar; ?>">
                  </div>
                  <div class="col-xs-4 author">By: <em><?php the_author_meta('display_name') ?></em></div>
                  <div class="readMore col-xs-7 text-right">
                    <a href="" class="btn btn-default btn-md">
                      <span class="glyphicon glyphicon-chevron-left"></span>Previous
                    </a>
                    <a href="" class="btn btn-default btn-md">
                      <span class="glyphicon glyphicon-chevron-right"></span>Next
                    </a>
                  </div>
                </div>
                <hr>
              </article>
              <section class="coments">
                <?php comments_template(); ?>
              </section>
          <?php endwhile; endif; ?>
      </div>
        <?php get_sidebar('blog'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>

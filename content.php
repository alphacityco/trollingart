<article <?php post_class(); ?>>
  <?php
    $cont=0;
    foreach((get_the_category()) as $category) {
      if ($cont == 0) {
        $firstCat = $category->cat_name;
      }
      $cont++;
    }
  ?>
  <div class="row">
    <div class="titlePost col-md-9"><h2><?php echo "#".$firstCat." | "; ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
    <div class="col-md-3 votes text-right"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
  </div>
  <div class="row contentImage">
    <img class="imgArticle img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="<?php echo the_title(); ?>">
  </div>
  <div class="row tags">
    <h4><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo '<span class="label label-info">#'.$tag->name . '</Span> '; } } ?></h4>
  </div>
  <div class="row textArticle">
    <?php //the_excerpt(); ?>
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
    <div class="col-xs-6 author"><p>By: <em><?php the_author_meta('display_name') ?></em></p><p></p></div>
    <div class="readMore col-xs-5 text-right"><a href="<?php the_permalink(); ?>" class="btn btn-default btn-md"><span class="glyphicon glyphicon-plus"></span>Read more</a></div>
  </div>
  <hr>
</article>

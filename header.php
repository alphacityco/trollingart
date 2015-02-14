<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|',true,'right') ?><?php bloginfo('name'); ?></title>  
  <?php wp_head(); ?>
</head>
<body>
  <header id="sticker" class="menuSocials">
    <div class="container-fluid">
      <div class="row">
        <div class="logo col-xs-6 col-sm-3 col-md-2 col-lg-2"><h3>TrollingArt</h3></div>
        <div class="menuGen col-xs-6 col-sm-9 col-md-10 col-lg-1">
          <div class="btn-group">
            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Perú</a></li>
              <li><a href="#">Colombia</a></li>
              <li><a href="#">Chile</a></li>
              <!--<li class="divider"></li>
              <li><a href="#">Separated link</a></li>-->
            </ul>
          </div>
        </div>
        <div class="tagsMenu col-md-3 col-lg-3 visible-lg">
          <h4>#HashTags · Articles · ArtLife</h4>
        </div>
        <div class="socialLink col-md-6 col-lg-6 containerSocial visible-lg">
          <div class="social">
            <span class="twitter">
              <a class="twitter-follow-button" href="https://twitter.com/trolling_art" data-show-count="true" data-lang="en">Follow @trolling_art</a>
              <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
              </script>
            </span>
            <span class="google">
              <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
              <g:plusone size="medium" href="https://gist.github.com/thebigreason/1296097"></g:plusone>
            </span>
            <span class="Facebook">
              <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FTrolling-Art%2F906966812686934&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=236972426392468" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px; width: 150px" allowTransparency="true"></iframe>
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>

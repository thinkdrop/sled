
  <header>
      <h1><a href='/'><img src='/<?php print path_to_theme(); ?>/img/thinkdrop.png' id='logo'><span><?php print $site_name; ?></span></a></h1>
      <p><img src='/<?php print path_to_theme(); ?>/img/slogan.png' id='logo'><span><?php print $site_slogan; ?></span></p>
  </header>
  <nav id='navigation'>
    <?php print $nav; ?>
  </nav>
  <div id='content'>
    <div class='content-inner'>
	  <h2><?php print $title; ?></h2>
	  <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>
          
          <?php if ($messages): ?>
            <div id="messages"><div class="section clearfix">
              <?php print $messages; ?>
            </div></div> <!-- /.section, /#messages -->
          <?php endif; ?>

          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
    </div>
  </div>

  <footer>
    <div id='footer-img'>Made in Brooklyn NY - 347-915-DROP (3767)</div>
    <p>&copy; 2010-2012 ThinkDrop Consulting LLC | <a href="http://twitter.com/thinkdropNYC" target="_blank">@thinkdropNYC</a> | <a href="https://plus.google.com/116058331687134465766/" target="_blank">Google+</a></p>  
<div style="display: inline;" class="fb-like" data-href="http://www.facebook.com/thinkdrop" data-send="true" data-layout="button_count"  data-show-faces="false"></div> 
<g:plusone size="small" href="https://plus.google.com/116058331687134465766"></g:plusone> 

    
  </footer>

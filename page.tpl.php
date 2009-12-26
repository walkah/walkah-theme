<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
	<title><?php print $head_title ?></title>
    	<?php print $head ?>
      <?php print $styles ?>
    	<?php print $scripts ?>
      <meta name="microid" content="mailto+http:sha1:d1026e95deb9e779de34648de0c7e2c83e1d2a73" />
      <link rel="openid2.local_id" href="http://walkah.myopenid.com" />
      <link rel="openid2.provider" href="http://www.myopenid.com/server" />
      <link rel="openid.server" href="http://www.myopenid.com/server" />
      <link rel="openid.delegate" href="http://walkah.myopenid.com/" />
      <meta http-equiv="X-XRDS-Location" content="http://www.myopenid.com/xrds?username=walkah.myopenid.com" />
</head>
<body>
<div id="doc" class="yui-t4">
  <div id="hd">
    <div class="yui-ge">
      <div class="yui-u first">
        <?php if ($logo): ?>
          <a href="<?php print check_url($base_path) ?>"><img src="<?php print check_url($logo) ?>" alt="<?php print $site_name; ?>" id="logo" /></a>
        <?php endif; ?>
        <div id="site-title">
          <?php
          $html_title = $site_name .': ';
          $html_title.= ($title) ? $title : $site_slogan;
          ?>
          <h1 id="title"><?php print $html_title; ?></h1>
      	</div>
      </div>
      <div class="yui-u">
        <?php print $header ?>
      </div>
    </div>
    <div class="yui-ge">
      <div class="yui-u first">
        <?php if (isset($primary_links)) : ?>
            <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
          <?php endif; ?>
      </div>
      <div class="yui-u">
            <?php print $search_box; ?>
      </div>
    </div>
  </div>
    <div id="bd">
     	<div id="yui-main">
	    <div class="yui-b">
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($tabs): print $tabs .'</div>'; endif; ?>

          <?php if (isset($tabs2)): print $tabs2; endif; ?>

          <?php if ($help): print $help; endif; ?>
          <?php if ($messages): print $messages; endif; ?>
          <?php print $content ?>
          <span class="clear"></span>
          <?php print $feed_icons ?>
			     
	    </div>
	</div>
	<div class="yui-b">
	  <?php print $sidebar; ?>
	</div>
    </div>
    <div id="ft">
        <?php print $footer_message ?>
        <?php print $footer; ?>
    </div>
</div>
<?php print $closure ?>
</body>
</html>

<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-<?php print $node->type;?> clear-block">

<?php  if (theme_get_setting('toggle_node_info_' . $node->type)): ?>
<div class="date">
    <span class="day"><?php print format_date($node->created, 'custom', 'j'); ?></span>
    <span class="month"><?php print format_date($node->created, 'custom', 'M'); ?></span>
    <span class="year"><?php print format_date($node->created, 'custom', 'Y'); ?></span>     
</div>
<?php endif; ?>

<?php print $picture ?>

<h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <div class="content clear-block">
    <?php print $content ?>
  </div>

  <div class="links">
  <?php
  if (theme_get_setting('toggle_node_info_' . $node->type)) {
    print 'posted '. format_date($node->created, 'custom', 'g:ia') . ': ';
  }
  if ($links) {
    print $links;
  }
  ?>
  </div>

  <?php if ($terms): ?>
    <div class="terms">tags: <?php print $terms ?></div>
  <?php endif;?>
</div>

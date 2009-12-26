<div class="blog-entry">
  <span class="posted">
    <?php print format_date($row->node_created, 'custom', 'M d Y'); ?> | 
    <?php print l($row->node_comment_statistics_comment_count, 'node/'. $row->nid, array('fragment' => 'comments', 'attributes' => array('title' => t('%num comments', array('%num' => $row->node_comment_statistics_comment_count))))); ?>
  </span>
  <?php print l($row->node_title, 'node/'. $row->nid); ?>
</div>

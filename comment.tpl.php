<div class="comment<?php print ($comment->uid) ? ' auth' : ''; ?><?php print ($comment->new) ? ' comment-new' : ''; print ($comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : ''; ?> clear-block">
  <?php print $picture ?>

<?php if ($comment->new) : ?>
  <a id="new"></a>
  <span class="new"><?php print $new ?></span>
<?php endif; ?>

  <h3><?php print $title ?></h3>

  <div class="submitted">
  <?php print t('by !name', array('!name' => theme('username', $comment))) ?>
  </div>

  <div class="time">
  <?php print format_date($comment->timestamp); ?>
  </div>

  <div class="content">
    <?php print $content ?>
  </div>

  <?php print $links ?>
</div>

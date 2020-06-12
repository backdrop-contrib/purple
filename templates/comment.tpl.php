<?php
/**
 * @file
 * Theme implementation for comments.
 *
 * See available variables in core/modules/comment/templates/comment.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_comment()
 * @see template_process()
 * @see theme_comment()
 *
 * @ingroup themeable
 */
?>
<article class="<?php print implode(' ', $classes); ?> clearfix"<?php print backdrop_attributes($attributes); ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>

  <?php
    // We hide the links now so that we can render them later.
    hide($content['links']);
    print render($content);
  ?>
  <?php if ($signature): ?>
    <div class="user-signature">
      <?php print $signature; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['links']) ?>

  <footer class="submitted">
    <?php print $submitted; ?>&nbsp;|&nbsp;<?php print $permalink; ?>
  </footer>
</article>

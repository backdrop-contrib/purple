<?php
/**
 * @file
 * Template for outputting the default block styling within a Layout.
 *
 * See available variables in core/modules/layout/templates/block.tpl.php.
 *
 * @ingroup themeable
 */
?>
<div class="<?php print implode(' ', $classes); ?>">
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <div class="container container-fluid">
    <?php print render($content); ?>
  </div>
</div>

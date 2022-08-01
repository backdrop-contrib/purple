<?php
/**
 * @file
 * Template for the Rolph layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['quarter1']
 *   - $content['quarter2']
 *   - $content['quarter3']
 *   - $content['quarter4']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="layout--rolph <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <div class="l-wrapper">
    <?php if (!empty($content['top'])): ?>
      <div class="l-top">
        <?php print $content['top']; ?>
      </div>
    <?php endif; ?>

    <div class="l-wrapper-inner container container-fluid">

      <?php if ($messages): ?>
        <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>

      <div class="l-page-title">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>

      <?php if ($tabs): ?>
        <nav class="tabs" role="tablist" aria-label="<?php print t('Admin content navigation tabs.'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>

      <?php print $action_links; ?>

      <div class="l-middle l-quarters row">
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter1']; ?>
        </div>
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter2']; ?>
        </div>
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter3']; ?>
        </div>
        <div class="l-quarters-region col-md-3">
          <?php print $content['quarter4']; ?>
        </div>
      </div><!-- /.l-middle -->

      <?php if (!empty($content['bottom'])): ?>
        <div class="l-bottom">
          <?php print $content['bottom']; ?>
        </div>
      <?php endif; ?>

    </div><!-- /.l-wrapper-inner -->
  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']): ?>
    <footer class="l-footer">
      <div class="l-footer-inner container container-fluid">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div><!-- /.layout--rolph -->
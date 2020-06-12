<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Backdrop page.
 *
 * See available variables in core/modules/system/templates/page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html<?php print backdrop_attributes($html_attributes); ?>>
  <head>
    <?php print backdrop_get_html_head(); ?>
    <title><?php print $head_title; ?></title>
    <meta name="Keywords" content="Jennifer Lea Lampton, Jen Lampton, Drupal Developer, Drupal, Developer, Web Developer, Programmer, Lampton, Jennifer, HTML, CSS, PHP, MySQL, Jeneration, san francisco, san francisco bay area, east bay, northern california, bay area, north california, sf bay area" />
    <meta name="Description" content="Jennifer Lea Lampton is currently a Senior Drupal developer in the San Francisco bay area. Jen has been actively working with and contributing to the Drupal project for years. She is the lead organizer for the Bay Area Drupal Camp, and is a very active member in the Drupal open source community." />
    <?php print backdrop_get_css(); ?>
    <?php print backdrop_get_js(); ?>
  </head>
  <body class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($body_attributes); ?>>
    <?php print $page; ?>
    <div class="copy">&copy; <?php print date('Y'); ?> <a href="<?php print base_path(); ?>" title="<?php print $site_name; ?>"><?php print $site_name; ?></a></div>
    <?php print $page_bottom; ?>
    <?php print backdrop_get_js('footer'); ?>
  </body>
</html>

<?php
/**
 * @file
 * Site header block.
 *
 * See available variables in core/modules/system/templates/header.tpl.php.
 *
 * @ingroup themeable
 */
?>
<div class="header-box header-right">
  <a href="/blog"><img width="100" src="<?php print $path; ?>blog.png" title="Read the Blog" /></a>
</div>
<div class="header-box header-left">
  <a href="http://www.linkedin.com"><img width="64" src="<?php print $path; ?>linkedin.png" title="Find me on LinkedIn" /></a>
  <a href="http://twitter.com/"><img width="64" src="<?php print $path; ?>twitter.png" title="Follow me on Twitter" /></a>
</div>

<?php if ($site_name): ?>
  <?php if (!$is_front): ?>
    <div class="site-name"><strong>
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><span><?php print $site_name; ?></span></a>
    </strong></div>
  <?php else: /* Use h1 when the content title is empty */ ?>
    <h1 class="site-name">
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><span><?php print $site_name; ?></span></a>
    </h1>
  <?php endif; ?>
<?php endif; ?>

<div class="location">
  <div class="email">mail@example.com</div>
  <?php if ($site_slogan): ?>
    <div class="site-slogan"><?php print $site_slogan; ?></div>
  <?php endif; ?>
</div>

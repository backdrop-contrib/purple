<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * See available variables in core/modules/node/templates/node.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print implode(' ', $classes); ?> clearfix"<?php print backdrop_attributes($attributes); ?>>
  <?php print $user_picture; ?>

  <?php if (!$page && $node->type == 'blog_post'): ?>
    <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
  <?php elseif (!$page): ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>

  <?php if ($display_submitted || !empty($content['links']['terms'])): ?>
    <div class="meta">
      <?php if ($display_submitted): ?>
        <span class="submitted">
          <?php
            print t('Submitted by !username on !datetime',
              array('!username' => $name, '!datetime' => $date));
          ?>
        </span>
      <?php endif; ?>

      <?php if (!empty($content['links']['terms'])): ?>
        <div class="terms terms-inline"><?php print render($content['links']['terms']); ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div class="content">
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php if ($page && isset($comments['comments'])): ?>
    <section class="comments">
      <?php if ($comments['comments']): ?>
        <h2 class="title"><?php print t('Comments'); ?></h2>
        <?php print render($comments['comments']); ?>
      <?php endif; ?>

      <?php if ($comments['comment_form']): ?>
        <h2 class="title comment-form"><?php print t('Add new comment'); ?></h2>
        <?php print render($comments['comment_form']); ?>
      <?php endif; ?>
    </section>
  <?php endif; ?>

</article>

<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h3<?php print $title_attributes; ?> class="dcf-txt-md dcf-bold dcf-uppercase dcf-lh-3 unl-cream unl-ls-2"><?php print $block->subject ?></h3>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</div>

<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
    <?php $c=0; foreach ($rows as $id => $row): $c++; ?>

    <div class="visible-xs clearfix"></div>
<?php print $row; ?>

    <?php endforeach; ?>

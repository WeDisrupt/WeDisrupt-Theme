<?php

/**
 * @file node-nodeblock-default.tpl.php
 *
 * Theme implementation to display a nodeblock enabled block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see bootstrap_preprocess_block()
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see bootstrap_process_block()
 * @see template_process()
 *
 * @ingroup templates
 */
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .
              "User-agent: BROWSER-DESCRIPTION-HERE\r\n"
  )
);


$url = 'https://actionnetwork.org/api/v2/events';

$headers = array('OSDI-API-Token' => 'f8777e32ab156ac2ece30479c51c9c0f');
			

				
$response = drupal_http_request($url, $headers);

dpm(drupal_json_decode($response); ?>



<section id="section-id-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?> style="background-image: url(<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>)">    
    <div class="sections container tt">
        <div class="row">
            <div class="title col-xs-12 col-md-8">
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
                <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
              <?php endif;?>
            </div>
            <div class="col-xs-12 col-md-4 content"<?php print $content_attributes; ?>>
                <?php
                  // We hide the comments and links now so that we can render them later.
                  hide($content['comments']);
                  hide($content['links']);
                  print render($content);
                ?>
            </div>

        </div>
    </div>

</section>

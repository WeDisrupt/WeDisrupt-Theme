<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

?>
<?php dpm($fields); ?>


<section id="section-header-id-<?php print $fields['nid']->raw; ?>" class="<?php print $classes; ?> actions events-header clearfix"<?php print $attributes; ?> style="background-image:url('http://wedisrupt.org/sites/default/files/<?php echo str_replace(' ', '', $fields['field_cover_photo']->content); ?>')">    
    <div class="sections container tt">
        <div class="row">
            <div class="title col-xs-12">
                <h1><i>  <?php print $fields['title']->content; ?></i></h1>
          
                 <h2><?php print $fields['field_date']->content; ?> | <?php print $fields['field_date_1']->content; ?></h2>
            </div>
             <div class="clearfix"></div>
            <div class="col-xs-12 content"<?php print $content_attributes; ?>>
               <p class="lead">
                   <b><?php print $fields['place']->content; ?></b> <?php print $fields['field_street']->content; ?> <?php print $fields['field_city']->content; if (!empty($fields['field_tags'])): ?><br><small><?php print $fields['field_street']->content; ?> </small><?php endif; ?>
                </p>
                
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-8">
                <a href="#section-entry-id-<?php print $fields['nid']->raw; ?>" class="smoothscroll pull-left btn btn-default">Read More</a>
                <a href="<?php print $fields['field_action_network_embed']->content; ?>" class="smoothscroll pull-right btn btn-primary">RSVP</a>
            </div>
        </div>
    </div>

</section>
<section id="section-entry-id-<?php print $fields['nid']->raw; ?>" class="<?php print $classes; ?> main-container actions events-entry clearfix"<?php print $attributes; ?>>
    <div class="container">
        <?php print $fields['body']->content; ?>
    </div>

</section>


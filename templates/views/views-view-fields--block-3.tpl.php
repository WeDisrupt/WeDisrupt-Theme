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
<div class="visible-xs col-xs-12 event-cube" id="<?php print $fields['nid']->raw; ?>">
    <a class="link-image" href="/node/<?php if (!empty($fields['nid'])):
           print $fields['nid']->raw; 
         endif; ?>" style="background-image:url('http://wedisrupt.org/sites/default/files/<?php echo str_replace(' ', '', $fields['field_cover_photo']->content); ?>');">
    </a>
    <div class="event-meta bg-primary">
        <?php if (!empty($fields['title'])): ?>
      
                
            <h5>
                 <?php if (!empty($fields['field_date'])): ?>
                     <a href="/node/<?php if (!empty($fields['nid'])):
           print $fields['nid']->raw; 
                              endif; ?>"> <?php print $fields['field_date']->content; ?></a> | 
                <?php endif; ?>
                <?php print render($fields['title']->content); ?>
            </h5>
        <?php endif; ?>
        <a href="/node/<?php if (!empty($fields['nid'])):
           print $fields['nid']->raw; 
         endif; ?>"> 
           
        </a>
        <?php if (!empty($fields['field_host_id'])): ?>
            <span class="label label-warning">
                <small><?php print $fields['field_host_uri']->content; ?></small>
            </span>
        <?php endif; ?>
        
        <?php if (empty(($fields['field_host_id']) or($fields['field_host_uri']) )): ?>
            <small><a href="http://facebook.com/resistthis">View more by <?php print $site_name;?></a></small>
           
        <?php endif; ?>
    </div>
</div>
<div class="hidden-xs col-sm-6 col-md-8 event-cube" id="<?php print $fields['nid']->raw; ?>">
    <a class="link-image" href="/node/<?php if (!empty($fields['nid'])):
           print $fields['nid']->raw; 
         endif; ?>" style="background-image:url('http://wedisrupt.org/sites/default/files/<?php echo str_replace(' ', '', $fields['field_cover_photo']->content); ?>');">
    </a>
</div>
<div class="hidden-xs col-sm-6 col-md-4 event-cube" id="<?php print $fields['nid']->raw; ?>">
    <div class="event-meta bg-primary">
        <?php if (!empty($fields['title'])): ?>
      
                
            <h5>
                 <?php if (!empty($fields['field_date'])): ?>
                     <a href="/node/<?php if (!empty($fields['nid'])):
           print $fields['nid']->raw; 
                              endif; ?>"> <?php print $fields['field_date']->content; ?></a> | 
                <?php endif; ?>
                <?php print render($fields['title']->content); ?>
            </h5>
        <?php endif; ?>
        <a href="/node/<?php if (!empty($fields['nid'])):
           print $fields['nid']->raw; 
         endif; ?>"> 
           
        </a>
        <?php if (!empty($fields['field_host_id'])): ?>
            <span class="label label-warning">
                <small><?php print $fields['field_host_uri']->content; ?></small>
            </span>
        <?php endif; ?>
        
        <?php if (empty(($fields['field_host_id']) or($fields['field_host_uri']) )): ?>
            <small><a href="http://facebook.com/resistthis">View more by <?php print $site_name;?></a></small>
           
        <?php endif; ?>
    </div>
</div>


<?php /* print $fields['field_date']->content; ?>
<?php print $fields['field_date_1']->content; ?>
<?php print $fields['field_cover_photo']->content; ?>
<?php print $fields['field_host_id']->content; ?>
<?php print $fields['field_host_uri']->content; ?>
<?php print $fields['title_1']->content; ?>
<?php print $fields['nid']->content; ?>
<?php print $fields['view_node']->content; */ ?>
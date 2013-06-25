<?php use_helper('Text') ?>
<?php
  // Compatible with sf_escaping_strategy: true
  $aEvent = isset($aEvent) ? $sf_data->getRaw('aEvent') : null;
  $options = isset($options) ? $sf_data->getRaw('options') : null;
?>

<?php if( !$options['compact']): ?>  
    <h3 class="a-blog-item-title"><?php echo link_to($aEvent['title'], 'a_event_post', $aEvent) ?></h3>
    
    	<?php if ($options['aBlogMeta']): ?>
    		<?php include_partial('aEvent/meta', array('aEvent' => $aEvent)) ?>
    	<?php endif ?>
    	
    <?php if($options['maxImages'] && $aEvent->hasMedia()): ?>		
    	<div class="a-blog-item-media">
    		<?php include_component('aSlideshowSlot', 'slideshow', array(
    	  'items' => $aEvent->getMediaForArea('blog-body', 'image', $options['maxImages']),
    	  'id' => 'a-slideshow-blogitem-'.$aEvent['id'],
    	  'options' => $options['slideshowOptions']
    	  )) ?>
    	</div>
    <?php endif ?>
    
         <div class="a-blog-item-excerpt-container">
        	<div class="a-blog-item-excerpt">
            <?php echo aHtml::simplify($aEvent->getRichTextForArea('blog-body', $options['excerptLength']), array('allowedTags' => '<a><em><strong>'))  ?>
        	</div>  	
        	<div class="a-blog-read-more">
        		<?php echo link_to(__('Read more'), 'a_event_post', $aEvent, array('class' => 'a-blog-more')) ?>
        	</div>
        </div>
<?php else: ?>
    <div class="event-item">
        <h4 class="a-blog-item-title">&#8594; <?php echo link_to( htmlentities(truncate_text( html_entity_decode($aEvent['title']),35)), 'a_event_post', $aEvent) ?></h4>
        <span class="datelocation">
            <?php include_partial('aEvent/dateRangeCompact', array('aEvent' => $aEvent,)) ?> 
            <?php if($aEvent['location']): ?>
                (<?php echo truncate_text(aString::firstLine($aEvent['location']),18) ?>)
            <?php endif ?>
        </span>
    </div>
<?php endif ?>
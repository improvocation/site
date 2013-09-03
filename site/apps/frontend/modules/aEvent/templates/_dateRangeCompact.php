<?php // *** This is used in more than one place *** ?>
<?php // * Please keep it simple and don't add structural markup ?>
<?php // * The "ifs" here are carefully chosen to cover all of the possible ?>
<?php //   scenarios re: when to show the end date and when to show the times ?>
<?php // * The format_date helper automatically I18Ns in a reasonable fashion. ?>

<?php use_helper('Date') ?>
<?php
  // Compatible with sf_escaping_strategy: true
  $aEvent = isset($aEvent) ? $sf_data->getRaw('aEvent') : null;
?>

<?php // The -> syntax is compatible with both Doctrine objects and ?>
<?php // Zend Lucene results, I pass both to this partial. Please don't ?>
<?php // change to the [] syntax ?>

<?php if (strlen($aEvent->start_date)): ?>
    <span class="a-blog-item-start-day"><?php echo format_date($aEvent->start_date,'D'); ?></span>
<?php endif ?>

<?php if (strlen($aEvent->start_time)): ?>
    <span class="a-blog-item-start-time"><?php echo (sfConfig::get('app_a_pretty_english_dates')) ? str_replace(' ', '', format_date($aEvent->start_time, 't')) : format_date($aEvent->start_time, 't') ?></span>
<?php endif ?>


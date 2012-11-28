<?php $page = aTools::getCurrentNonAdminPage() ?>
<?php $realPage = aTools::getCurrentPage() ?>    
<?php $root = aPageTable::retrieveBySlug('/') ?> 

<header>
    <h1 class="site_title">
            <img id="logo" src="img/logo_01_s.png"/>
            <span class="title"><a href="/">Impro-Vocation</a></span>
            <span class="subtitle">l'improvisation théâtrale à l'ULB</span>
    </h1>
    
    <a  class="forum" href="http://forum.impro-vocation.org">&#8594; forum </a>
    
    <?php if (has_slot('a-search')): ?>
      <?php include_slot('a-search') ?>
    <?php else: ?>
      <?php include_partial('a/search') ?>
    <?php endif ?>

    
    <?php include_component('aNavigation', 'tabs', array('root' => $root, 'active' => $page, 'name' => 'main', 'draggable' => true, 'dragIcon' => false)) # Top Level Navigation ?>   

       <?php /*
    <ul class="menu">
		 <li><a href="#qui">Qui sommes-nous?</a></li>
        <li><a href="#contacter">Nous contacter</a></li>
        <li><a href="#rejoindre">Nous rejoindre</a></li>
        <li><a href="#matchs">Nos matchs &amp; spectacles</a></li>
    </ul>
    	*/?> 
    
    <div class="thumbs" id="#header_thumbs">
        <img class="thumb1" src="/maquette/thumbs/DSC_7173.jpg" />
        <img class="thumb2" src="/maquette/thumbs/DSC_7980.jpg" />
    </div>
  </header>

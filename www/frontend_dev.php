<?php

// this check prevents access to debug front controllers that are deployed by accident to production servers.
// feel free to remove this, extend it or make something more sophisticated.
$bypass = "venus des profondeurs de l'espace, d'un temps ou meme nos memoires s'effacent.";

if('delulbdedans' == $_GET['unbonhymnea']){
    setcookie('bypass',$bypass,time()+3600*24*14);
}

if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')) 
&& $bypass != $_COOKIE['bypass']  )
{
  die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

require_once(dirname(__FILE__).'/../site/config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);
$configuration->setWebDir(sfConfig::get('sf_root_dir').DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'www');

sfContext::createInstance($configuration)->dispatch();

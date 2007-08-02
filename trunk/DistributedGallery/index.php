<?php
error_reporting(E_ALL);

require_once('libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'data/templates';
$smarty->compile_dir = 'data/templates_c';
$smarty->cache_dir = 'data/cache';
$smarty->config_dir = 'data/configs';

$smarty->assign("title", "Hallo");
$smarty->assign("content", "Hallo, Welt!");

$smarty->display("one.tpl");
?>
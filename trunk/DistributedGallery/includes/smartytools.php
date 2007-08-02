<?php
require_once ('libs/Smarty.class.php');

function getSmartyEngine() {

	$smarty = new Smarty();
	$smarty->template_dir = 'data/templates';
	$smarty->compile_dir = 'data/templates_c';
	$smarty->cache_dir = 'data/cache';
	$smarty->config_dir = 'data/configs';

	return $smarty;

}
?>

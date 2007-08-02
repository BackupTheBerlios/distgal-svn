<?php
error_reporting(E_ALL);

include ('includes/smartytools.php');

$smarty = getSmartyEngine(); 

$smarty->assign("title", "Hallo");
$smarty->assign("content", "Hallo, Welt!");

$smarty->display("one.tpl");
?>


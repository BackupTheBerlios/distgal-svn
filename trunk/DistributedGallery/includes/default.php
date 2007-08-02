<?php
function generateHeader($title) {
	$result = "<html>\n" .
	"<head>\n" .
	"	<title>$title</title>\n" .
	"	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n" .
	"	<style type=\"text/css\" media=\"all\">@import \"css/look.css\";</style>\n" .
	"	<style type=\"text/css\" media=\"all\">@import \"css/layout.css\";</style>\n" .
	"</head>\n";
	return ($result);
}
?>

<?php
error_reporting(E_ALL);

include "includes/config.php";

echo DOCTYPE;
echo generateHeader("Testseite");
echo "<body>\n";

@ mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS) OR die(mysql_error());
mysql_select_db(MYSQL_DATABASE) OR die(mysql_error());

$result = mysql_query("SELECT * FROM configuration WHERE name LIKE \"sitename\"") OR die(mysql_error());

$sitename = mysql_fetch_row($result);
echo "Sitename: " . ($sitename['1']) . "<br />\n";

echo "</body>\n";
echo "</html>\n";
<?php
error_reporting(E_ALL);

include ('includes/smartytools.php');
include ('includes/config.php');
include ('includes/Gallery.class.php');
include ('includes/Image.class.php');

// Smarty Engine initialisieren
$smarty = getSmartyEngine();

// Verbindung zu MySQL Aufbauen
@ mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS) OR die(mysql_error());
mysql_select_db(MYSQL_DATABASE) OR die(mysql_error());

// Checken ob eine ID übergeben wurde
if (isset ($_GET['id'])) {
	$gallery = getGalleryById($_GET['id']);
	
	$smarty->assign('galleryname', $gallery->getName());
	$smarty->assign('imagecount', getImageCount($_GET['id']));
	$smarty->assign('images', getImages($_GET['id']));
} else {
	displayErrorMessage($smarty, "Fehler: Es wurde keine ID &uuml;bergeben!");	
}

// Seite darstellen
$smarty->display('display.tpl');

/****************************************************************************/
/*	Weitere Funktionen														*/
/****************************************************************************/
function getGalleryById($gallery_id) {
	// Gallerie mit entsprechender ID suchen.
	$sql = "SELECT * FROM galleries WHERE gallery_id = $gallery_id";

	$result = mysql_query($sql) OR die(mysql_error());

	$row = mysql_fetch_assoc($result);

	return new Gallery($row['GALLERY_ID'], $row['NAME'], $row['BASELOCATION']);
}

function getImageCount($gallery_id) {
	$sql = "SELECT * " .
	"FROM galleries JOIN images " .
	"ON (galleries.gallery_id = images.gallery_id) " .
	"WHERE galleries.gallery_id = $gallery_id";

	$result = mysql_query($sql);

	return mysql_num_rows($result);
}

/**
 * Liefert alle Bilder zu einer übergebenen ID einer Gallerie
 */
function getImages($gallery_id) {
	$images = Array ();

	$sql = "SELECT * " .
	"FROM galleries JOIN images " .
	"ON (galleries.gallery_id = images.gallery_id) " .
	"WHERE galleries.gallery_id = $gallery_id";
	
	$result = mysql_query($sql);
	
	while($row = mysql_fetch_assoc($result)) {
		$images[] = new Image($row['FILENAME'], $row['DESCRIPTION'], $row['FILESIZE'], $row['BASELOCATION'] . "/" . $row['FILENAME']);
    }

	return $images;
}

/**
 * Zeigt einen Fehler auf der Seite an
 */
function displayErrorMessage($smarty, $message) {
	$smarty->assign('error', "displayError('$message')");
}
?>

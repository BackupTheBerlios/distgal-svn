<?php
class Gallery {
	
	private $gallery_id;
	private $name;
	private $baselocation;

    function Gallery($g_id, $n, $bl) {
    	$this->gallery_id = $g_id;
    	$this->name = $n;
    	$this->bl = $bl;
    }
    
    function getGalleryId() {
    	return $this->gallery_id;
    }
    
    function setGalleryId($g_id) {
    	$this->gallery_id = $g_id;
    }
    
    public function getName() {
    	return $this->name;
    }
    
    function setName($n) {
    	$this->name = $n;
    }
    
    function getBaseLocation() {
    	return $this->baselocation;
    }
    
    function setBaseLocation($bl) {
    	$this->baselocation = $bl;
    }
}
?>
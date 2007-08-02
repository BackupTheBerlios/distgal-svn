<?php

class Image {

	private $filename;
	private $description;
	private $filesize;
	private $url;

    function Image($filename, $description, $filesize, $url) {
    	$this->filename = $filename;
    	$this->description = $description;
    	$this->filesize = $filesize;
    	$this->url = $url;
    }
    
    function getFilename() {
    	return $this->filename;
    }
    
    function setFilename($filename) {
    	$this->filename = $filename;
    }
    
    function getDescription() {
    	return $this->description;
    }
    
    function setDescription($description) {
    	$this->description = $description;
    }
    
    function getFilesize() {
    	return $this->filesize;
    }
    
    function setFilesize($filesize) {
    	$this->filesize = $filesize;
    }
    
    function getUrl() {
    	return $this->url;
    }
    
    function setUrl($url) {
    	$this->url = $url;
    }
}
?>
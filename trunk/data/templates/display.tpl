<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>{$galleryname}</title>
		<!-- Include the css stylesheets -->
		<style type="text/css" media="all">@import "css/look.css";</style>
		
		<!-- Include the Dojo Toolkit -->
		<script type="text/javascript" src="dojo/dojo.js"></script>
		<script type="text/javascript">
			dojo.require("dojo.widget.Toaster");
		</script>
		
		{literal}
		<script type="text/javascript">
			var toast = dojo.widget.byId("toast");
			
			function displayError(message) {
				dojo.event.topic.publish("errorTopic", message);
			}
				
		</script>
		{/literal}
	</head>
	<body onload="{$error}">
		<h1>Galleriename: {$galleryname}</h1>
		In der Gallerie sind {$imagecount} Bilder enthalten.<br />
		
		{foreach key=index item=image from=$images} 
       		<img src="{$image->getUrl()}" alt="{$image->getFilename()}" width="400px"/> <br />
     	{/foreach}
		
		<div dojoType="toaster" id="error" positionDirection="tl-right" messageTopic="errorTopic">Test</div>
	</body>
</html>
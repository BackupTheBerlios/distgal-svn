<?php /* Smarty version 2.6.18, created on 2007-08-02 17:12:23
         compiled from display.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php echo $this->_tpl_vars['galleryname']; ?>
</title>
		<!-- Include the css stylesheets -->
		<style type="text/css" media="all">@import "css/look.css";</style>
		
		<!-- Include the Dojo Toolkit -->
		<script type="text/javascript" src="dojo/dojo.js"></script>
		<script type="text/javascript">
			dojo.require("dojo.widget.Toaster");
		</script>
		
		<?php echo '
		<script type="text/javascript">
			var toast = dojo.widget.byId("toast");
			
			function displayError(message) {
				dojo.event.topic.publish("errorTopic", message);
			}
				
		</script>
		'; ?>

	</head>
	<body onload="<?php echo $this->_tpl_vars['error']; ?>
">
		<h1>Galleriename: <?php echo $this->_tpl_vars['galleryname']; ?>
</h1>
		In der Gallerie sind <?php echo $this->_tpl_vars['imagecount']; ?>
 Bilder enthalten.<br />
		
		<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['image']):
?> 
       		<img src="<?php echo $this->_tpl_vars['image']->getUrl(); ?>
" alt="<?php echo $this->_tpl_vars['image']->getFilename(); ?>
" width="400px"/> <br />
     	<?php endforeach; endif; unset($_from); ?>
		
		<div dojoType="toaster" id="error" positionDirection="tl-right" messageTopic="errorTopic">Test</div>
	</body>
</html>
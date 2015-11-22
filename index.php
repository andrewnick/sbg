<!DOCTYPE html>
<html lang="en">
	<?php include 'php/head.php' ?>
<body class="bg">

	<?php include 'php/header.php' ?>
	<?php require_once ('php/homepage/hp.php'); ?>
	<?php include 'php/footer.php' ?>

</body>
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'awesome',
        clientId: 'YOUR_CLIENT_ID'
    });
    feed.run();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
</html>
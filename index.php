<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body class="bg">
<!-- 	<script type="text/javascript" src="bundle.js" charset="utf-8"></script> -->
	<script src="http://localhost:8080/assets/css.bundle.js"></script>
	<script src="http://localhost:8080/assets/js.bundle.js"></script>
	<div class="container">
		<h1 class="title col-sm-6">Content</h1>
		<div class="col-sm-6">
			<?php $time = new DateTime('NOW'); ?>
			<?php echo ($time->format('Y-m-d H:i')); ?>
		</div>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  Launch demo modal
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
			      </div>
			      <div class="modal-body">
			        ...
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
	</div>
</body>
</html>
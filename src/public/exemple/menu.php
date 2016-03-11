<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<?php require_once 'data.php'; ?>
	<?php if(isset($dataMenu) && !empty($dataMenu)):?>
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Brand</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php foreach ($dataMenu as $label => $status) {//Gestion du niveau 1
						if($status == 1){//Lien enabled
							echo '<li><a href="#">' . $label . '</a></li>';
						} elseif($status == 0){//Lien disabled
							echo '<li class="disabled"><a href="#">' . $label . '</a></li>';
						} elseif(is_array($status) === true){//Test second niveau
							echo '<li class="dropdown">';
							echo '	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';
							echo 		$label;
							echo '		<span class="caret"></span>';
							echo '	</a>';
							echo '	<ul class="dropdown-menu">';
							foreach ($status as $labelSub => $statusSub) {//Gestion du niveau 2
								if($statusSub == 1){//Lien enabled
									echo '<li><a href="#">' . $labelSub . '</a></li>';
								} elseif($statusSub === 0){//Lien disabled
									echo '<li class="disabled"><a href="#">' . $labelSub . '</a></li>';
								} elseif($statusSub == 'divider'){//Divider
									echo '<li role="separator" class="divider"></li>';
								}
							}
							echo '	</ul>';
							echo '</li>';
						}
					}?>
				</ul>
			</div>
		</div>
	</nav>
	<?php endif; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

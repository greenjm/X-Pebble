<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/exercises.css">
	<script src="../libraries/jquery-2.1.3.min.js"></script>
	<script src="../javascript/exercisetabs.js"></script>

	<link href="../images/fav.gif" type="image/gif" rel="shortcut icon"/>
</head>
<body>
	<?PHP include 'navbar.html'; ?>
	<div class="wrapper">
		<div class="tabs">
			<ul class="tab-links">
				<li class="active"><a href="#tab1">Tab #1</a></li>
				<li><a href="#tab2">Tab #2</a></li>
				<li><a href="#tab3">Tab #3</a></li>
				<li><a href="#tab4">Tab #4</a></li>
			</ul>
 
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<p>Tab #1 content goes here!</p>
					<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
				</div>
 
				<div id="tab2" class="tab">
					<p>Tab #2 content goes here!</p>
					<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
				</div>
 
				<div id="tab3" class="tab">
					<p>Tab #3 content goes here!</p>
					<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
				</div>
 
				<div id="tab4" class="tab">
					<p>Tab #4 content goes here!</p>
					<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
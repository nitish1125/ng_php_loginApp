<!DOCTYPE html>
<html lang="en" ng-app="angular_app">
<head>
	<title>Angular App</title>
	<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="scripts/angular.min.js"></script>
	<script type="text/javascript" src="scripts/angular-route.js"></script>
	<script type="text/javascript" src="scripts/app.js"></script>
	<script type="text/javascript" src="scripts/config.js"></script>
	<script type="text/javascript" src="scripts/services.js"></script>
</head>
<body ng-controller="angular_controller">

<div class="clearfix">
	<div class="navigation">
		<a href="#/dashboard">Home</a>
		<a href="#/reports">Reports</a>
	</div>
	<div class="logout">
		<a href="" ng-click="logout()">
			Logout 
		</a>
	</div>

</div>
<div ng-view>
	
</div>

<div class="modal clearfix" id="modal">
	<div class="modal-header">
		<span class="close">
			X
		</span>
	</div>
	<div class="modal-footer">
		Invalis email or password
	</div>
</div>
	<script type="text/javascript">
		$('.close').click(function(){
				$('#modal').fadeOut(100);
		});
	</script>
</body>
</html>


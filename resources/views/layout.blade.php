<!DOCTYPE html>
<html ng-app>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<script src="/js/angular.min.js"></script>
</head>
<body>

	<input type="text" ng-model="test">

	<div ng-include="'/test.html'"></div>

	@yield('content')



	@yield('footer')
</body>

	

</html>
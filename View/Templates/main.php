<!DOCTYPE html>
<html>
<head>
	<!-- Template need this row for display page title -->
	<title><?php $this->getTitle(); ?></title>
	<!--  -->
</head>
<body>
	<!-- Template need this row for display page content -->
	<?php include_once 'View/Pages/' . $_COOKIE['controller']. '/' . $page . '.php'; ?>
	<!--  -->
</body>
</html>

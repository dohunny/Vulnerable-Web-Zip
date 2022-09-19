<html>
	<head>
		<script language="xxJavaScript" src="add1.js"></script>
		<link rel="shortcut icon" href="/favicon.ico">
		<meta charset="utf-8">

		<?php

		$nonce_key = hash('sha256', microtime());

		?>

		<script type="text/javascript" nonce="ecf0fab29b86c9514bc50fa9db94b9cbf530c783c6f4a49750c93a14ff1d1c79" src="add1.js"></script>
		<meta http-equiv="Content-Security-Policy" content="script-src 'nonce-ecf0fab29b86c9514bc50fa9db94b9cbf530c783c6f4a49750c93a14ff1d1c79';">

		<style type="text/css">
			@import url("css.css");
		</style>
	</head>
	<body>

		<div id="container">
			<div id="logo">
				<p>N0named<span>Search</span></p>
			</div>
			<div id="continput">
			<!-- Bypass CSP & Excute alert() Function! -->
				<div id="input-group">
		<form action method=get>
					<input type="text" id="searchtext" name=id>
					<input type=button id="icon-src"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>		
		</div>
			</div>
			<ul id="results"></ul>
			<div id="header"></div>
		</div>
		<?php
		echo '<center><span style="color:white"><br><br>';
		if(isset($_GET[id])!=0)
		echo $_GET[id];
		?>


	</body>
</html>
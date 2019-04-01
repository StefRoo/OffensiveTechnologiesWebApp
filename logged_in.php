<?PHP
require_once("./include/login_config.php");

if(!$loginsite->CheckLogin())
{
    $loginsite->RedirectToURL("index.php");
    exit;
}

?>
<!DOCTYPE html>
	<html>
		<head>
			<title> Logged in page </title>
		</head>
		<body>
			<div id='login_content'>
				Login succesful, <?= $loginsite->UserFullName(); ?>!
			</div>
		</body>
	</html>

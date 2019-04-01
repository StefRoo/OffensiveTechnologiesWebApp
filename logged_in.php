<?PHP
require_once("./include/login_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
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
				Login succesful, <?= $fgmembersite->UserFullName(); ?>!
			</div>
		</body>
	</html>

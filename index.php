<?PHP
require_once("./include/login_config.php");

if(isset($_POST['submitted']))
{
   if($loginsite->Login())
   {
        $loginsite->RedirectToURL("logged_in.php");
   }
}

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Login page</title>
			<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		</head>
		<body>
		<!-- Form Code Start -->
			<div id='fg_membersite'>
				<form id='login' action='<?php echo $loginsite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
					<fieldset >
						<legend>Login</legend>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						<div class='short_explanation'>* required fields</div>
						<div>
							<span class='error'>
								<?php echo $fgmembersite->GetErrorMessage(); ?>
							</span>
						</div>
						<div class='container'>
							<label for='username' >UserName*:</label>
							<br/>
							<input type='text' name='username' id='username' value='<?php echo $loginsite->SafeDisplay('username') ?>' maxlength="50" />
							<br/>
							<span id='login_username_errorloc' class='error'></span>
						</div>
						<div class='container'>
							<label for='password' >Password*:</label>
							<br/>
							<input type='password' name='password' id='password' maxlength="50" />
							<br/>
							<span id='login_password_errorloc' class='error'></span>
						</div>
						<div class='container'>
							<input type='submit' name='Submit' value='Submit' />
						</div>
					</fieldset>
				</form>
				<!-- client-side Form Validations: Uses form validation script from JavaScript-coder.com -->

				<script type='text/javascript'>
				// <![CDATA[

					var frmvalidator  = new Validator("login");
					frmvalidator.EnableOnPageErrorDisplay();
					frmvalidator.EnableMsgsTogether();

					frmvalidator.addValidation("username","req","Please provide your username");
    
					frmvalidator.addValidation("password","req","Please provide the password");

				// ]]>
				</script>
			</div>
		<!-- Form Code End -->
		</body>
	</html>

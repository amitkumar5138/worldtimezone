<html>
<head>

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/functions_form.js"></script>
<meta name="author" content="scott.finlay@uk.ibm.com">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<title>BP Locations</title>
</head>

<body>

<div class="loader"></div>


<form name="login" id="login" method="post" action="login_exe.php">
	<div id="feedback_form" class="addformcontainer">
		<div class="formtablelayout">
			<div class="row">
				<div class="formtablelayout">
					<div class="row">
						<div class="form-cell-title">
							<span class="formtitle hn_light">BP Locations Login</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="formtablelayout">
					<div class="row">
						<div class="form-cell-l">
							<span class="formcelltitle hn_light">IBM Intranet ID</span>
						</div>
						<div class="form-cell-r">
							<input type="text" id="submitter_id" name="submitter_id" size="30" value="" class="formdd hn_light" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="formtablelayout">
					<div class="row">
						<div class="form-cell-l">
							<span class="formcelltitle hn_light">Password</span>
						</div>
						<div class="form-cell-r">
							<input type="password" id="submitter_pw" name="submitter_pw" size="30" value="" class="formdd hn_light" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="formtablelayout">
					<div class="row">
						<div class="form-cell-s">
							<input type="checkbox" name="remember_me" value="1" ><label for="remember_me" class="formrememberme hn_light">Remember My IBM Intranet ID</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="formtablelayout">
					<div class="row">
						<div class="form-cell-s">
							<input type="submit" name="submit" value="Login" class="formdd hn_light">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>



<div id="home" class="iconcontainer-l0 iconhome">
	<a href="index.php">
		<img src="images/icon_home.png" class="iconimg" title="Home" />
	</a>
</div>



<img src="images/footer.png" class="footer" />

</body>
</html>
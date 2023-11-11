<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Coffee Chat Beta</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
			<script src='https://8x8.vc/vpaas-magic-cookie-d4af49b92c764519a0f75cbccec7afb1/external_api.js' async></script>
			<style>html, body, #jaas-container { height: 100%; }</style>
			<script type="text/javascript">
			  window.onload = () => {
				const api = new JitsiMeetExternalAPI("8x8.vc", {
				  roomName: "vpaas-magic-cookie-d4af49b92c764519a0f75cbccec7afb1/SampleAppWellDilemmasStripObviously",
				  parentNode: document.querySelector('#jaas-container'),
								// Make sure to include a JWT if you intend to record,
								// make outbound calls or use any other premium features!
								// jwt: "eyJraWQiOiJ2cGFhcy1tYWdpYy1jb29raWUtZDRhZjQ5YjkyYzc2NDUxOWEwZjc1Y2JjY2VjN2FmYjEvZTFlY2I3LVNBTVBMRV9BUFAiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJqaXRzaSIsImlzcyI6ImNoYXQiLCJpYXQiOjE2OTkzODIxODgsImV4cCI6MTY5OTM4OTM4OCwibmJmIjoxNjk5MzgyMTgzLCJzdWIiOiJ2cGFhcy1tYWdpYy1jb29raWUtZDRhZjQ5YjkyYzc2NDUxOWEwZjc1Y2JjY2VjN2FmYjEiLCJjb250ZXh0Ijp7ImZlYXR1cmVzIjp7ImxpdmVzdHJlYW1pbmciOmZhbHNlLCJvdXRib3VuZC1jYWxsIjpmYWxzZSwic2lwLW91dGJvdW5kLWNhbGwiOmZhbHNlLCJ0cmFuc2NyaXB0aW9uIjpmYWxzZSwicmVjb3JkaW5nIjpmYWxzZX0sInVzZXIiOnsiaGlkZGVuLWZyb20tcmVjb3JkZXIiOmZhbHNlLCJtb2RlcmF0b3IiOnRydWUsIm5hbWUiOiJUZXN0IFVzZXIiLCJpZCI6Imdvb2dsZS1vYXV0aDJ8MTA0OTUyNTU3MTUyMjg4Nzg4ODkzIiwiYXZhdGFyIjoiIiwiZW1haWwiOiJ0ZXN0LnVzZXJAY29tcGFueS5jb20ifX0sInJvb20iOiIqIn0.OiL7QSWYfFcKksDHr5F20Ce5f9AhyLQQ1J3gvfAwssPky9Pse8C2M6rjhrc5bcishougFdT4Q1qXJ9w0q9cLMzMnrBAKgO0pGZUGKK8LXi9V0uaQX_HpZaZxV0fzee3ZAmdEiadCqTPXvKFQUKKIhC7rgMuwp9_9PGfix9MQb33_n_6TFtRMmr3JeoURcZdTunZ6E-zIEf8j17pXbbs0Bv3j5gzva73DD2piWFI2RO-Ws5dh0LyT6jt4iTIg-dVTTDoiTXoCd5-lrvWThifCSo78-CmFkRmjts2JaGfJdPBevGXlcVAmtawDFvGf12yeJVgukr1paNa_7VrrEeKa9Q"
				});
			  }
			</script>

	</head>
	<body >

		<!-- Header -->
	
    <b>Welcome, <?php echo $_SESSION['username']; ?>!</b> 
    <a href="logout.php">Logout</a>
    
	<div id="jaas-container" />
	

		<!-- Footer -->
		
			<footer id="footer">
			   	<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="https://www5.cbox.ws/box/?boxid=947502&boxtag=uvqEHi" class="icon fa-envelope"><span class="label">Live Chat</span></a></li>
				
				</ul>
				
				<ul class="copyright">
					<li>&copy; Coffee Chat Beta 2023</li><li>Built by Dila</a></li>
					<li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>

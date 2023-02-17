<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script src="/js/script.js"></script>
	<link rel="stylesheet" href="/css/index.css">
	
	<title>SimSimi | Chatbot</title>
</head>

<body>
	<div class="container">
		<header>
			<h1>Chat with SimSimi!</h1>
		</header>
		<img id="logo" src="/assets/Simsimi_logo.png">
		<section id="conversation"></section>
		<footer>
			<form action="/talks/converse" method="post">
				<input type="text" name="utext" id="user-chat" placeholder="Type your message here..."autocomplete="off" autocapitalize="on">
				<input type="submit" value="Send">
			</form>
		</footer>
	</div>
</body>

</html>
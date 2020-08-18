<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
	<style>
		#modal{
			display: none;
			border-radius: 10px;
			
		}
	</style>
</head>
<body>
	<a data-fancybox data-src="#modal" href="javascript:;">asdasdasad</a>
	<div class="contactForm" id="modal">
		<form class="">
			<h1 class="h3 mb-3 font-weight-normal">Форма обратной связи</h1>
			<div class="form-group form">
				<label class="" for="inputEmail">Введите ваш Email</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">	
			</div>
			<div class="form-group form">
				<label class="" for="password">Введите пароль </label>
					<input type="password" id="password" class="form-control" placeholder="password" required="">					
			</div>

			<button class="btn btn-primary " type="submit">Отправить</button>
		</form>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.0.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
	<script type="text/javascript" src="js/jquery-3.4.0.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<style>
		#modal{
			display: none;
			border-radius: 10px;
		}
	</style>
	<script type="text/javascript" src="js/jquery-3.4.0.js"></script>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<table  class="table table-striped table-bordered ">
		<caption></caption>
		<tr class="text-center table-info">
			<th  scope="col">Задание</th>
			<th  scope="col">Посмотреть</th>
		</tr>
		<tr class=''>
			<td>Верстка главной страницы. Адаптивность поб моб.дивайсы</td>
			<td><a href="site.html">посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>Страница обратной связи. Адаптивность</td>
			<td><a href="contactForm.php">посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>Форма авторизации + fancybox </td>
			<td><a data-fancybox data-src="#modal" data-modal="false" href="javascript:;">посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>Слайдер </td>
			<td><a  href="slider/OfProject.html">посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>Форма регистрации + bootstrap Modal + jQuery Validation </td>
			<td><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>Анкета </td>
			<td><a href="anketa.php" >посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>PHP работа с датами + временные зоны </td>
			<td><a href="time.php" >посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>PHP Загрузка файла на сервер </td>
			<td><a href="upload.php" >посмотерть</a></td>
		</tr>
		<tr class=''>
			<td>PHP + MySQL+JOIN+GRUD (не по MVC) </td>
			<td><a href="grud.php" >посмотерть</a></td>
		</tr>
	</table>	
	<div class="contactForm" id="modal">
		<form class="">
			<h1 class="h3 mb-3 font-weight-normal">Форма авторизации</h1>
			<div class="form-group form">
				<label class="" for="inputEmail">Введите ваш Email</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">	
			</div>
			<div class="form-group form">
				<label class="" for="password">Введите пароль </label>
					<input type="password" id="password" class="form-control" placeholder="password" required=""minlength="8"maxlength="16" autocomplete="current-password">					
			</div>

			<button class="btn btn-primary " type="submit">Отправить</button>
		</form>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form class="" id="form">
				<div class="form-group form">
					<label class="" for="inputEmail">Введите ваш Email</label>
						<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="inputEmail">	
				</div>
				<div class="form-group form">
					<label class="" for="name">Введите имя </label>
						<input type="text" id="name" name="name" class="form-control" placeholder="name" required="">					
				</div>
				<div class="form-group form">
					<label class="" for="password">Введите пароль </label>
						<input type="password" id="password" name="password" class="form-control" placeholder="password" required="">					
				</div>
			
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
		        <input type="submit" class="btn btn-primary" value="зарегистрироваться">
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	
	<script type="text/javascript" src="js/js.js"></script>
	<script>
	$(function(){$('#form').validate({
			rules:{
				inputEmail:{
					required:true,
					email:true
				},
				password:{
					required:true,
					minlength:4
				},
				name:{
					required:true
				}
			},
			messages:{
				inputEmail:{
					required:"Поле обязательно для заполнения",
					email:"неверный формат email"
				},
				password:{
					required:"Поле обязательно для заполнения",
					minlength:"Пароль слишком короткий "
				},
				name:{
					required:"Поле обязательно для заполнения"
				}
			}
		}
	)});
	</script>

</body>
</html>
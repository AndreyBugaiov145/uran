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
</head>
<body>
	<div class="col-md-8 order-md-1">
      <h4 class="mb-3">Форма</h4>
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Имя</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Фамилия</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
        </div>
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Выберите страну</label>
            <select class="custom-select d-block w-100" id="country" required="">
              <option value="1">Украина</option>
              <option value="2">Германия</option>
              <option value="3">Польша</option>
            </select>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Сохранить email</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Сохранить данные</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Ваш пол</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="gender1" name="gender" type="radio" class="custom-control-input" value="male " checked="" required="">
            <label class="custom-control-label" for="gender1">Мужской</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="gender2" name="gender" type="radio" class="custom-control-input"value="female "  required="">
            <label class="custom-control-label" for="gender2">Женский</label>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">отправить</button>
      </form>
    </div>
</body>
</html>
<?php
	session_start();

	if(!empty($_SESSION['country'])) {
		$country = $_SESSION['country'];
		$email = $_SESSION['email'];
		$town = $_SESSION['town'];
		$age = $_SESSION['age'];
	} else {
		$country = '';
		$email = '';
		$town = '';
		$age = '';
	}
?>

<form action="" method="GET">
    <div>
        <label for="name">Имя</label>
        <input type="text" id="name" name = 'name'>
    </div>
    <br>
    <div>
        <label for="surname">Фамилия</label>
        <input type="text" id="surname" name = 'surname'>
    </div>
    <br>
    <div>
        <label for="email">e-mail</label>
        <input type="text" id="email" name = 'email' value="<?php echo $email ?>">
    </div>
	<br>
    <div>
        <label for="country">Страна</label>
        <input type="text" id="country" name = 'country' value="<?php echo $country ?>">
    </div>
	<br>
	<div>
        <label for="town">Город</label>
        <input type="text" id="town" name = 'town' value="<?php echo $town ?>">
    </div>
	<br>
	<div>
        <label for="age">Возраст</label>
        <input type="age" id="age" name = 'age' value="<?php echo $age ?>">
    </div>
	<br>
    
    <div>
        <input type="submit">
    </div>
</form>
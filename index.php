<?php
	require './Session.php';
	require './Cookie.php';

	$session = new Session();
	// session_start();

	// if(empty($_SESSION['startTime'])) {
	if(empty($session->get('startTime'))) {
		$session->set('startTime', time());
		$session->set('updatesCount', 0);
	}

    //if(!empty($_REQUEST['country'])) {
	if(!empty($_REQUEST['country'])) {
		// $_SESSION['country'] = $_REQUEST['country'];
		$session->set('country', $_REQUEST['country']);
	}

	if(!empty($_REQUEST['email'])) {
		// $_SESSION['email'] = $_REQUEST['email'];
		$session->set('email', $_REQUEST['email']);
	}

	// if(time() != $_SESSION['startTime']) {
	if(time() != $session->get('startTime')) {
		$session->set('updatesCount', $session->increment('updatesCount'));
	}

	if(!empty($_REQUEST['town'])) {
		$session->set('town', $_REQUEST['town']);
	}
	if(!empty($_REQUEST['age'])) {
		$session->set('age', $_REQUEST['age']);
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
        <input type="text" id="email" name = 'email'>
    </div>
	<br>
    <div>
        <label for="country">Страна</label>
        <input type="text" id="country" name = 'country' placeholder="Введите название страны">
    </div>
	<br>
	<div>
        <label for="town">Город</label>
        <input type="text" id="town" name = 'town' placeholder="Введите название города">
    </div>
	<br>
	<div>
        <label for="age">Возраст</label>
        <input type="age" id="age" name = 'age' placeholder="Введите возраст">
    </div>
	<br>
    
    <div>
        <input type="submit">
    </div>
</form>

<div><?php echo 'Вы зашли на этот сайт ' . (time() - $session->get('startTime')) . ' секунд назад' ?></div>
<div><?php echo ($session->get('updatesCount') == 0) ? 'Ещё не обновляли страницу' : 'Страница обновлена ' . $session->get('updatesCount') . ' раз' ?></div>

<a href="./logout.php">Выйти</a>

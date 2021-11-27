<?php ## Встроенное клонирование объектов
	require_once "Math/Complex2.php";
	$a = new MathComplex2(314, 101);
	$x = new MathComplex2(0, 0);
	// Создаем КОПИЮ объекта $x
	$y = clone $x;
	// Теперь $x и $y полностью различны
	$y->add($a);
	// При этом $x не изменяется!
	echo "x=", $x, ", y=", $y;
	// Попробуйте убрать clone - вы увидите, что $x и $y имеют
	// одинаковые значения, ибо ссылаются на один и тот же объект
?>
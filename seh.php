<?php ## Недостатки set_error_handler()
	echo "Начало программы.<br />";
	set_error_handler("handler");
	{
		// Код, в котором перехватываются исключения
		echo "Все, что имеет начало...<br />";
		// Генерируем ("выбрасываем") исключение
		trigger_error("Hello!");
		echo "...имеет и конец.<br />";
	}
	echo "Конец программы.<br />";
	// Функция-обработчик
	function handler($num, $str)
	{
		// Код обработчика
		echo "Ошибка: $str<br />";
		exit();
	}
?>
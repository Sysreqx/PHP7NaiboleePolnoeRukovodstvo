<?php ## Объявление пространства имен
	namespace PHP7;
	// Отладочная функция
	function debug($obj)
	{
		echo "<pre>";
			print_r($obj);
		echo "</pre>";
	}
	// Класс страницы
	class Page
	{
		// Заголовок
		protected $title;
		// Содержимое
		protected $content;
		// Конструктор класса
		public function __construct($title = '', $content = '')
		{
			$this->title = $title;
			$this->content = $content;
		}
	}
?>
<?php
	namespace PHP7;

	use \PHP7\Seo as Seo;
	use \PHP7\Tag as Tag;

	// Класс страницы
	class Page
	{
		// Подключаем трейты
		use Seo, Tag;
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
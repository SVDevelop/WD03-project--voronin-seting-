<?php 		
		
echo "Contacts";

// Готовим контент для центральной части
ob_start();
include ROOT . "templates/contacts/contacts.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
		
 ?>
<?php 

function getPage($site, $from, $to, $cut)
{
	// сторонняя страница сайта, с которой будем брать контент. 
	$content = file_get_contents($site);
 
	// определяем начало необходимого фрагмента кода, до которого мы удалим весь контент
	$pos = strpos($content, $from);
 
	// удаляем все до нужного фрагмента
	$content = substr($content, $pos);
 
	// находим конец необходимого фрагмента кода
	$pos = strpos($content, $to);
 
	// отрезаем нужное количество символов от конца фрагмента
	$content = substr($content, 0, $pos);
 
    //если в нужном контенте встречается не нужный кусок текста, то его вырезаем
    $content = str_replace($cut,'', $content); 
 
	// выводим необходимый контент
	return $content;
}



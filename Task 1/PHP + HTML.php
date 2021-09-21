<?php
$a = '18 сентября 2021 года у принцессы Беатрис родилась дочь, которая мгновенно сместила всех тех,пкто стоит в очереди на трон после ее матери, на одно место назад. Как теперь выглядит список престолонаследия в Великобритании — показываем в нашей галерее.';
$link = 'https://www.marieclaire.ru/stil-zjizny/kak-vyiglyadyat-pervyie-25-naslednikov-britanskogo-prestola/?utm_referrer=https%3A%2F%2Fzen.yandex.com';
$b =  substr($a,0,180);

if (str_ends_with($b, chr(32))) {  // Если строка заканчивается на пробел, то находим позицию второго пробела с конца строки, чтобы сделать выборку для ссылки


	$firstProbel = strrpos($b,chr(32),-1);
	$secondProbelNum = ($firstProbel - strlen($b)) -1;
	$seconfProbel = strrpos($b,' ', $secondProbelNum);
	$stringUrl =substr($b,$seconfProbel) . "...";
	$b = substr($b,0,$seconfProbel); 
	$b = '<h3>' . $b . '<a href="' . $link . '" target="_blank">' . $stringUrl . '</a></h3>';
	
	echo $b;

} else {  // Если строка заканчивается на символ, добавляем элементы до пробела и так же находим позицию второго пробела с конца строки, чтобы сделать выборку для ссылки

	$probel = stripos($a,chr(32), 180);
	$b = substr($a,0,$probel); 
	$firstProbel = strrpos($b,chr(32),-0);
	$secondProbelNum = ($firstProbel - strlen($b)) -1;
	$seconfProbel = strrpos($b,chr(32), $secondProbelNum);
	$stringUrl =substr($b,$seconfProbel+1) . "...";
	$b = substr($b,0,$seconfProbel); 
	$b = '<h3>' . $b . '<a href="' . $link . '" target="_blank">' . $stringUrl . '</a></h3>';
	
	echo $b;
}

?>


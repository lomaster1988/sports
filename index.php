<!doctype html>
<html>

 <head>
        <meta charset="UTF-8">
        <link href="/styles.css" rel="stylesheet" type="text/css">
        <title>Спринтеры VS Марафонцы</title>
    </head>
 <body>
<div>

<?php

include "header.php";

?>

</div>


<h1>Фото дня</h1>
<p><a href = index.php>Открыть другое случайное фото>>></a></br></br></p>

<?php

$a = rand(1, 2); //выбираем случайную папку
$b = rand(1, 10); // выбираем случайное фото


?>

<img src = "images<?php echo $a; ?>/<?php echo $b; ?>.jpg" width = 500> 
<br/>





        <h1>Галерея</h1>
        <section id="gallery a">

<?php
require_once "data.php"; 
$cnt = count($arr_images);
for ($i = 0; $i < $cnt; $i++) {

//считаем все элементы массива

?> 

<a href="item.php?index=<?php echo $arr_images[$i]["src"] ?>">

<img src="/sports/images<?php echo $arr_images[$i]["src"] ?>" height=300>

</a>

<!-- выводим поочередно все фотографии на страницу -->
 



<?php } ?>

        </section>
    </body>

</html>
/* Разместите функцию из предыдущего упражнения в отдельном файле. Затем создайте еще
один файл, загружающий первый файл, используя его для вывода на экран ряд дескрипторов
<img />.
*/


<?php

include "f.php";
$image_path = '/images/';
print f('dog.png');
print f('cat.png', 'ttt');
print f('map.png',null,300,200);
?>
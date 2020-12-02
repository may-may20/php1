<!DOCTYPE HTML>
<html>
<head>
    <title>урок 7</title>
</head>
<body>
<h2>работа над if</h2>

<?php

$a = 7;
$b = 20;
$c = 120;
if ($a >$b and $a >$c)
    if ($b >$c)
        echo "  Ответ на задание к файлу 2: числа в порядке возрастания от меньшего к большему $c , $b , $a";
if ($a >$c and $a >$b)
    if ($c >$b)
        echo " Ответ на задание к файлу 2: числа в порядке возрастания от меньшего к большему $b , $c , $a";
if ($b >$a and $b >$c)
    if ($a >$c)
        echo "Ответ на задание к файлу 2:  числа в порядке возрастания от меньшего к большему $c , $a , $b";
if ($b >$c and $b >$a)
    if ($c >$a)
        echo " Ответ на задание к файлу 2: числа в порядке возрастания от меньшего к большему $a , $c , $b";
if ($c >$a and $c >$b)
    if ($a >$b)
        echo " Ответ на задание к файлу 2: числа в порядке возрастания от меньшего к большему $b , $a , $c";
if ($c >$b and $c >$a)
    if ($b >$a)
        echo "Ответ на задание к файлу 2: числа в порядке возрастания от меньшего к большему $a , $b , $c";

?>


<?php
$page="2.php";
$pag= substr($page, 0, 1); // функция обрезания строковой переменной  $pag
if($put):
    ?>

<?php else: ?>
<ul>
    <?php  if ($pag=="1"):  ?>
        <li><b><a href="1.php">файл 1</a></b></li>
    <?php else:  ?>
        <li><a href="1.php">файл 1</a></li>
    <?php endif ?>
    <?php  if ($pag=="2"):  ?>
        <li><b><a href="2.php">файл 2</a></b></li>
    <?php else:  ?>
        <li><a href="2.php">файл 2</a></li>
    <?php endif ?>
    <?php  if ($pag=="3"):  ?>
        <li><b><a href="3.php">файл 3</a></b></li>
    <?php else:  ?>
        <li><a href="3.php">файл 3</a></li>
    <?php endif ?>

</ul>
<?php e
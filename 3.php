<!DOCTYPE HTML>
<html>
<head>
    <title>урок 7</title>
</head>
<body>
<h2>работа над if</h2>
<?php
$a = -70;
$b = 20;
if ($a >=0 and $b>=0 ){
 $c=$b + $a;
     echo "Ответ на задание к файлу 3: сумма переменных а и в равна $c ";}
if ($a >=0 and $b<0 ){
    $c=$a - $b;
    echo "Ответ на задание к файлу 3: разница переменных а и b равна $c ";}
if ($b >=0 and $a<0 ){
    $c=$b - $a;
    echo "Ответ на задание к файлу 3: разница переменных b и a равна $c ";}

?>
<?php
$page="3.php";
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
<?php endif ?
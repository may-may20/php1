<!DOCTYPE HTML>
<html>
<head>
    <title>урок 7</title>
</head>
<body>
<h2>работа над if</h2>
<?php
$int =5;

if ($int >= 0)
    echo " Ответ на задание к файлу 1: число $int положительное";
else
    echo " Ответ на задание к файлу 1: число $int врядли положительное...";
?>
<?php
$page="1.php"; //первый файл -есди поменять вручную на 2.рнр или 3.рнр -меню должно работать
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
<?php endif ?>
